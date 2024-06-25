<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // $banners = Banner::get();
        return view("frontend.homepage.main");
    }
}