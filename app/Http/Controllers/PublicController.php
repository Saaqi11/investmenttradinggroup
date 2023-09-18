<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Pricing;
use App\Models\Subscription;
use App\Models\User;
use App\Models\WebsiteSection;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class PublicController extends Controller
{
    private $key;

    public function __construct()
    {
        $this->key = 'AVDvnmafPAQlZ8Kah5Rdlnq2fLYSbrnYpYCCR9ukOpcRYHhyQOybNk94fyvsfBZNSjpvfVDiclNryGEA:EBXJvP_3QuGY4wNd2YizlDHfujscLM4hJEdydQBpMD9289i548diLp8snjdUq0bOReFsCofD2EqbG-Xc';
    }


    /**
     * Show Landing page
     * @return View
     */
    public function index(): View
    {
        $pricings = Pricing::all();
        $websiteSections = WebsiteSection::all();
        return view('index', get_defined_vars());
    }

    /**
     * Paypal checkout
     * @param $subscription
     * @return RedirectResponse
     */
    public function paypalCheckout($subscription): RedirectResponse
    {
        try {
            $link =  $this->proceedPaymentPaypal($subscription);
            return redirect()->to($link);
        }
        catch (\Exception|GuzzleException $e)
        {
            return redirect()->back()->with('error','Please try again later');
        }
    }

    /**
     * @param $subscription
     * @return string
     * @throws GuzzleException
     */
    public function proceedPaymentPaypal($subscription): string
    {
        $plan_id    = env($subscription."_SUBSCRIPTION");
        try {
            $url = "https://api.sandbox.paypal.com/v1/billing/subscriptions";

            $client = new Client();
            $response = $client->request('POST', $url,
                [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Basic ' . base64_encode($this->key)
                    ],
                    'json' => [
                        "plan_id" => $plan_id,
                        'application_context' => [
                            "return_url" => url("payment-success/".$subscription),
                            "cancel_url" => url("payment-error")
                        ]
                    ]
                ]
            );
            $response = $response->getBody()->getContents();
            $response = json_decode($response);
            return $response->links['0']->href;
        }
        catch (\Exception $e)
        {
            return  $e->getMessage();
        }
    }



    /**
     * @param $subscription
     * @return RedirectResponse|View
     */
    public function getMembership($subscription): RedirectResponse|View
    {
        if (!empty($subscription)) {
            $subscriptionPrice = env(strtoupper($subscription)."_SUBSCRIPTION_PRICE");
            return \view("get-membership", compact('subscription', 'subscriptionPrice'));
        }
        return redirect()->back();
    }

    /**
     * user Sign up
     * @param Request $request
     * @param $subscription
     * @return RedirectResponse
     */
    public function userSignup(Request $request, $subscription): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "email"     => "required|email|unique:users",
            "subscription_level" => "required",
            "password" => "required|confirmed"
        ]);
        $inputs = $request->all();
        $inputs['password'] = Hash::make($inputs['password']);
        $inputs['is_active_member'] = 1;
        unset($inputs['password_confirmation']);
        unset($inputs['_token']);
        User::insert([
            $inputs
        ]);
        $user = User::latest()->first();
        $user->assignRole($subscription);
        Auth::login($user);

        return redirect()->route("paypal-checkout", [$subscription]);
    }

    /**
     * PayPal success
     * @param Request $request
     * @param $subscription
     * @return RedirectResponse
     * @throws GuzzleException
     */
    public function paypalSuccess(Request $request,$subscription): RedirectResponse
    {
        $uri = 'https://api.sandbox.paypal.com/v1/billing/subscriptions/'.$request->subscription_id;

        $client = new Client();
        $response = $client->get($uri, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . base64_encode($this->key)
            ],
        ]);

        $response = json_decode($response->getBody(), true);
        $currency_code = $response['billing_info']['outstanding_balance']['currency_code'];
        $value = $response['billing_info']['last_payment']['amount']['value'];
        $payer_id = $response['subscriber']['payer_id'];
        $next_billing_time = $response['billing_info']['next_billing_time'];
        $status_update_time = $response['status_update_time'];
        $start_time = $response['start_time'];
        $plan_id = $response['plan_id'];

        User::where("id", Auth::user()->id)->update(
            [
                'subscription_avail_date' => Carbon::now()
            ]
        );

        Payment::insert([
            'subscription_id' => $subscription,
            'user_id' => Auth()->user()->id,
            'amount' => $value,
            'create_date' => $start_time,
            'currency' => $currency_code,
            'status' => $response['status'],
            'start_date' => $status_update_time,
            'end_date' => $next_billing_time,
            'method' => 'paypal',
            'paypal_plan_id' => $plan_id,

        ]);

        return redirect()->route('user.dashboard')->with('message','Registration has been successful');
    }

    /**
     * Do user login
     * @param Request $request
     * @return RedirectResponse
     */
    public function doLogin(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['loginError' => 'Invalid credentials']);
        }
    }

    /**
     * Payment Error
     * @return string
     */
    public function paypalError(): string
    {
        return redirect()->route("re-subscription")->with('message','Payment not done! Error Occurred!');
    }

    /**
     * @return View
     */
    public function reSubscription (): View
    {
        return \view("re-subscription");
    }

    /**
     * @return View
     */
    public function subscriptions(): View
    {
        $pricings = Pricing::all();
        return view('public-layout.pages.subscription', compact('pricings'));
    }

    public function upgradeSubscription(): View
    {
        $user = User::where("is_active_member", 1)->first();
        return view('public-layout.pages.upgrade-subscription', compact('user'));
    }

}
