<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * For admin login page
     * @return View|RedirectResponse
     */
    public function adminLoginPage(): View|RedirectResponse
    {
        if (!Auth::check()) {
            return view('admin-backend.login');
        } else {
            return redirect()->route('dashboard');
        }
    }

    /**
     * @param Request $request
     * admin login
     */
    public function doAdminLogin(Request $request): Factory|View|RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/admin-login')
                ->withErrors($validator)
                ->withInput();
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    /**
     * Logout
     */
    public function doLogout(): bool
    {
        \auth()->logout();
        return true;
    }
}
