<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showArtikel($id)
    {
      return 'Nu zit ik in de Blogcontroller met product = '. $id;
    }
}
