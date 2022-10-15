<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeAdvertisement;
use App\Models\Setting;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Video;




class HomeController extends Controller
{

    public function index()
    {
        $home_ad_data = HomeAdvertisement::where('id', 1)->first();
        $setting_data = Setting::where('id', 1)->first();
        $post_data = Post::with('rSubcategory')->orderBy('id', 'desc')->get();
        $sub_category_data = SubCategory::with('rPost')->orderBy('sub_category_order', 'asc')->where('show_on_home', 'Show')->get();
        $video_data = Video::orderBy('id', 'desc')->get();

        return view('front.home', compact('home_ad_data', 'setting_data', 'post_data', 'sub_category_data', 'video_data'));
    }
}
