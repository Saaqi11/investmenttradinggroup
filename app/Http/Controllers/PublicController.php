<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    /**
     * Show Landing page
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Get membership page
     * @return View
     */
    public function getMembership(): View
    {
        return \view("get-membership");
    }
}
