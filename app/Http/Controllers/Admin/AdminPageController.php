<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function about()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_about', compact('page_data'));
    }

    public function about_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'about_title' => 'required',
            'about_detail' => 'required'
        ]);

        $page_data->about_title = $request->about_title;
        $page_data->about_status = $request->about_status;
        $page_data->about_detail = $request->about_detail;

        $page_data->update();

        return redirect()->route('admin_page_about')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }

    public function faq()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_faq', compact('page_data'));
    }

    public function faq_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'faq_title' => 'required'
        ]);

        $page_data->faq_title = $request->faq_title;
        $page_data->faq_status = $request->faq_status;
        $page_data->faq_detail = $request->faq_detail;

        $page_data->update();

        return redirect()->route('admin_page_faq')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }

    public function terms()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_terms', compact('page_data'));
    }

    public function terms_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'terms_title' => 'required',
            'terms_detail' => 'required'
        ]);

        $page_data->terms_title = $request->terms_title;
        $page_data->terms_detail = $request->terms_detail;
        $page_data->terms_status = $request->terms_status;

        $page_data->update();

        return redirect()->route('admin_page_terms')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }

    public function privacy()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_privacy', compact('page_data'));
    }

    public function privacy_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'privacy_title' => 'required',
            'privacy_detail' => 'required'
        ]);

        $page_data->privacy_title = $request->privacy_title;
        $page_data->privacy_detail = $request->privacy_detail;
        $page_data->privacy_status = $request->privacy_status;

        $page_data->update();

        return redirect()->route('admin_page_privacy')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }

    public function disclaimer()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_disclaimer', compact('page_data'));
    }

    public function disclaimer_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'disclaimer_title' => 'required',
            'disclaimer_detail' => 'required'
        ]);

        $page_data->disclaimer_title = $request->disclaimer_title;
        $page_data->disclaimer_detail = $request->disclaimer_detail;
        $page_data->disclaimer_status = $request->disclaimer_status;

        $page_data->update();

        return redirect()->route('admin_page_disclaimer')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }

    public function login()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_login', compact('page_data'));
    }

    public function login_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'login_title' => 'required',
        ]);

        $page_data->login_title = $request->login_title;
        $page_data->login_status = $request->login_status;

        $page_data->update();

        return redirect()->route('admin_page_login')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }

    public function contact()
    {

        $page_data = Page::where('id', 1)->first();
        return view('admin.page_contact', compact('page_data'));
    }

    public function contact_update(Request $request)
    {

        $page_data = Page::where('id', 1)->first();

        $request->validate([
            'contact_title' => 'required',
            'contact_map_x' => 'required',
            'contact_map_y' => 'required'
        ]);

        $page_data->contact_title = $request->contact_title;
        $page_data->contact_detail = $request->contact_detail;
        $page_data->contact_map_x = $request->contact_map_x;
        $page_data->contact_map_y = $request->contact_map_y;

        $page_data->update();

        return redirect()->route('admin_page_contact')->with('success', '페이지 정보가 성공적으로 변경되었습니다.');
    }


}
