<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $categories = Category::all();
        $tabData = $this->getCategoryData($request);
        return view("user.dashboard", get_defined_vars());
    }

//    public function getCategoryData(Request $request)
//    {
//        $userActive = User::where("is_active_member", 1)
//            ->first();
//        if ($userActive) {
//        $selectedTab = $request->input('selectedTab');
//        $selectedFavTab = $request->input('selectedFavTab');
//        $selectedOtherTab = $request->input('selectedOtherTab');
//
//        $tabData = Category::where('category', $selectedTab)
//            ->where('sub_category', $selectedFavTab)
//            ->where('ticker', $selectedOtherTab)
//            ->first();
//        return $tabData;
//        } else {
//            return "Inactive user";
//        }
//    }

//    public function getCategoryData(Request $request)
//    {
//        $userActive = User::where("is_active_member", 1)
//            ->first();
//
//        if ($userActive) {
//            $selectedTab = $request->input('selectedTab');
//            $selectedFavTab = $request->input('selectedFavTab');
//            $selectedOtherTab = $request->input('selectedOtherTab');
//
//            $tabData = Category::where('category', $selectedTab)
//                ->where('sub_category', $selectedFavTab)
//                ->where('ticker', $selectedOtherTab)
//                ->first();
//
//            if ($tabData) {
//                if ($tabData->visibility_levels > $userActive->subscription_level) {
//                    return "Category Not Found";
//                } else {
//                    return $tabData;
//                }
//            } else {
//                return "Category Not Found";
//            }
//        } else {
//            return "Inactive user";
//        }
//    }

    public function getCategoryData(Request $request)
    {
        $userActive = User::where("is_active_member", 1)->first();

        if (!$userActive) {
            return "Inactive user";
        }

        $selectedTab = $request->input('selectedTab');
        $selectedFavTab = $request->input('selectedFavTab');
        $selectedOtherTab = $request->input('selectedOtherTab');

        $tabData = Category::where('category', $selectedTab)
            ->where('sub_category', $selectedFavTab)
            ->where('ticker', $selectedOtherTab)
            ->first();

        if (!$tabData || $tabData->visibility_levels > $userActive->subscription_level) {
            return "Category not found";
        }

        return $tabData;
    }

}
