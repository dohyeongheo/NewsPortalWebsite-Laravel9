<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeAdvertisement;

class HomeController extends Controller
{
    public function index()
    {
        $home_ad_data = HomeAdvertisement::where('id', 1)->first();

        return view('front.home', compact('home_ad_data'));
    }
}
