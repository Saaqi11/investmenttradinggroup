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
    public function dashboard(): View
    {
        return view('admin-backend.general_statistics');
    }
}
