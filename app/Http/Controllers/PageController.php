<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function LongUrl()
    {
      return 'Kan die URL niet wat korter?';
    }
    public function index()
    {
      return 'We zitten nu in de pagecontroller';
    }
}
