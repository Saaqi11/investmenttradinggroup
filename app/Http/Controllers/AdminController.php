<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAdminUser;
use App\Models\WebsiteSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

}
