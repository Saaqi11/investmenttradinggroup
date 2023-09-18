<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAdminUser;
use App\Models\User;
use App\Models\WebsiteSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use App\Models\Payment;
use App\Models\Category;
use App\Models\Pricing;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware(CheckAdminUser::class);
    }

    /**
     * Render admin dashboard view
     * @return View
     */
    public function sales(): View
    {
        $users = DB::table('users')->paginate(10);
        return view('admin-backend.general_statistics', get_defined_vars());
    }

    /**
     * Show Coupons page
     * @return View
     */
    public function couponsListing(): View
    {
        return view('admin-backend.coupons.listing');
    }

    /**
     * Home Page Sections listing
     * @return View
     */
    public function sections(): View
    {
        $sections = WebsiteSection::orderBy("section_order", "ASC")->get();
        return view('admin-backend.homepage.sections', compact("sections"));
    }

    /**
     * Add new Section
     * @return View
     */
    public function addSection(): View
    {
        return \view("admin-backend.homepage.add");
    }

    /**
     * Save section data
     * @param Request $request
     * @return bool
     */
    public function saveSection(Request $request): bool
    {
        $inputs = $request->only(['heading', 'sub_heading']);
        $inputs["html"] = json_encode($request->html);
        $inputs["css"] = json_encode($request->css);
        $inputs["js"] = json_encode($request->js);
        $inputs['status'] = 1;
        $lastWebsiteSection = WebsiteSection::orderBy("id", "DESC")->first();
        $count = 1;
        if (!empty($lastWebsiteSection)) {
            $count = $lastWebsiteSection->section_order + 1;
        }
        $inputs['section_order'] = $count;
        $section = WebsiteSection::create($inputs);
        if (!empty($section)) {
            Session::flash('success', 'The website section has been created');
            return true;
        } else {
            Session::flash('error', 'The website section has not been created');
            return false;
        }
    }

    /**
     * Edit section
     * @param $id
     * @return View|RedirectResponse
     */
    public function editSection($id): View | RedirectResponse
    {
        $section = WebsiteSection::findOrFail($id);
        if (!empty($section)) {
            return \view("admin-backend.homepage.edit", compact("section"));
        } else {
            return redirect()->back()->with("error", "Section not found");
        }
    }

    /**
     * Update Website Section
     * @param Request $request
     * @param $id
     * @return bool
     */
    public function updateSection(Request $request, $id): bool
    {
        $inputs = $request->only(['heading', 'sub_heading']);
        $inputs["html"] = json_encode($request->html);
        $inputs["css"] = json_encode($request->css);
        $inputs["js"] = json_encode($request->js);
        $inputs['status'] = 1;
        $section = WebsiteSection::where("id", $id)->update($inputs);
        if (!empty($section)) {
            Session::flash('success', 'The website section has been updated');
            return true;
        } else {
            Session::flash('error', 'Something wrong occurred');
            return false;
        }
    }

    /**
     * Delete Section
     * @param $id
     * @return RedirectResponse
     */
    public function deleteSection($id): RedirectResponse
    {
        $section = WebsiteSection::where("id", $id)->first();
        if (!empty($section)) {
            $section->delete();
            return redirect()->back()->with("success", "The section has been deleted");
        } else {
            return redirect()->back()->with("error", "Something wrong occurred");
        }
    }

    /**
     * Update section status
     * @param Request $request
     * @param $id
     * @return bool
     */
    public function updateSectionStatus(Request $request, $id): bool
    {
        $section = WebsiteSection::where("id", $id)->first();
        if (!empty($section)) {
            $section->status = $request->status;
            $section->update();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Update section status
     * @param Request $request
     * @param $id
     * @return bool
     */
    public function updateSectionOrder(Request $request, $id): bool
    {
        $section = WebsiteSection::where("id", $id)->first();
        if (!empty($section)) {
            $section->section_order = $request->order;
            $section->update();
            return true;
        } else {
            return false;
        }
    }

    public function paymentListing()
    {
        $payments = Payment::paginate(10);;

        return view('admin-backend.pages.payment.listings', compact('payments'));
    }

    public function showPricing()
    {
        $pricings = Pricing::all();

        return view('admin-backend.pages.pricing.listings', compact('pricings'));
    }

    public function updatePricings(Request $request)
    {
        $pricing = Pricing::findOrFail(1);

        $newPrices = [
            'L1' => $request->input('price1'),
            'L2' => $request->input('price2'),
            'L3' => $request->input('price3'),
            'L4' => $request->input('price4'),
        ];

        $tax = $request->input('tax');

        $pricing->price = json_encode($newPrices);
        $pricing->tax = $tax;
        $pricing->save();
        return redirect()->back()->with('success', 'Prices and tax updated successfully!');

    }

    public function settings(){
        return view('admin-backend.settings.settings');
    }
    public function fetchCategory(Request $request)
    {

        $category = $request->input('category');
        $sub_category = $request->input('sub_category');
        $ticker = $request->input('ticker');
        $exchange = $request->input('exchange');
        $visibility_levels_drop = $request->input('visibility_levels_drop');

        $categoryRecord = Category::where('category', $category)
            ->where('sub_category', $sub_category)
            ->where('ticker', $ticker)
            ->where('exchange', $exchange)
            ->where('visibility_levels', $visibility_levels_drop)
            ->first();
        return response()->json($categoryRecord);
    }

    public function storeCategory(Request $request)
    {

        $category = $request->input('category');
        $sub_category = $request->input('sub_category');
        $ticker = $request->input('ticker');
        $exchange = $request->input('exchange');

        $existingCategory = Category::where('category', $category)
            ->where('sub_category', $sub_category)
            ->where('ticker', $ticker)
            ->where('exchange', $exchange)
            ->first();

        if ($existingCategory) {

            $existingCategory->html_data = $request->input('html');
            $existingCategory->css_data = $request->input('css');
            $existingCategory->js_data = $request->input('js');
            $existingCategory->description = $request->input('description');
            $existingCategory->associated_search_terms = $request->input('ast');
            $existingCategory->up_percentage = $request->input('up_percentage');
            $existingCategory->down_percentage = $request->input('down_percentage');
            $existingCategory->visibility_levels = $request->input('visibility_level');

            $existingCategory->save();
            return redirect()->back()->with('success', 'Data updated successfully!');
        } else {

            $newCategory = new Category();
            $newCategory->html_data = $request->input('html');
            $newCategory->css_data = $request->input('css');
            $newCategory->js_data = $request->input('js');
            $newCategory->description = $request->input('description');
            $newCategory->associated_search_terms = $request->input('ast');
            $newCategory->category = $category;
            $newCategory->sub_category = $sub_category;
            $newCategory->ticker = $ticker;
            $newCategory->exchange = $exchange;
            $newCategory->up_percentage = $request->input('up_percentage');
            $newCategory->down_percentage = $request->input('down_percentage');
            $newCategory->visibility_levels = $request->input('visibility_level');

            $newCategory->save();
            return redirect()->back()->with('success', 'Data saved successfully!');
        }
    }



}
