<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Page;

class LoginController extends Controller
{
    public function index()
    {

        $page_data = Page::where('id', 1)->first();

        return view('front.login', compact('page_data'));
    }
}
