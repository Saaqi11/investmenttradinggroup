<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAdminUser;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
        return view('admin-backend.general_statistics');
    }

    /**
     * Show Coupons page
     * @return View
     */
    public function couponsListing(): View
    {
        return view('admin-backend.coupons.listing');
    }
}
