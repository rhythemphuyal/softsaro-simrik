<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news() {
        return view("frontend.news");
      }
      public function newsedu1() {
        return view("frontend.newspost.newsedu1");
      }
      public function newsedu2() {
        return view("frontend.newspost.newsedu2");
      }
      public function newsedu3() {
        return view("frontend.newspost.newsedu3");
      }
}
