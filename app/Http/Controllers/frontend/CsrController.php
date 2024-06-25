<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CsrController extends Controller
{
    public function csr() {
        return view("frontend.csr");
      }
}
