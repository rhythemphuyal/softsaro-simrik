<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        return view("frontend.gallery");
      }
      public function gallery1() {
        return view("frontend.gallery.gallery1");
      }
}
