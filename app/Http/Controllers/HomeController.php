<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome ()
    {
      $naam = 'Browser';
      $informatie = 'Bowser is een website waarbij je de laatste en nieuwste browsers te zien krijgt en de voordelen en nadelen hiervan. Waardoor je zelf kan kiezen welke browser je fijner vind.';
      $ervaring = 10;
      $products = [
        'Firefox',
        'Google',
        'Brave',
        'Safari'
      ];

       return view('home', ['Name' => $naam, 'information' => $informatie, 'experience' => $ervaring, 'producten' => $products]);
    }

    public function showAboutUs()
    {
       return view('aboutus');
    }

    public function showName($name)
    {
      return view('showname', ['naam' => $name]);
    }

    public function showProducts()
    {
      return view('products');
    }
}
