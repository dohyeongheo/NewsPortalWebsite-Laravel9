<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSettingController extends Controller
{
    public function index()
    {
        $setting_data = Setting::where('id', 1)->first();
        return view('admin.setting', compact('setting_data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'news_ticker_total' => 'required',
            'video_total' => 'required'
        ]);

        $setting_data = Setting::where('id', 1)->first();
        $setting_data->news_ticker_total = $request->news_ticker_total;
        $setting_data->news_ticker_status = $request->news_ticker_status;
        $setting_data->video_total = $request->video_total;
        $setting_data->video_status = $request->video_status;
        $setting_data->update();

        return redirect()->route('admin_setting')->with('success', '홈페이지 설정 정보가 성공적으로 변경되었습니다.');
    }
}
