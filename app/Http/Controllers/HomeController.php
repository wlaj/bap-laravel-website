<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome ()
    {
       return view('home');
    }

    public function showAboutUs()
    {
       return view('aboutus');
    }

    public function showProducts()
    {
      return view('products');
    }
}
