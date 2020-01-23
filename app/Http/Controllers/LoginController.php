<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    function index()
    {
      return view('login');
    }

    function checklogin(Request $request)
    {
      $this->validate($request, [
        'username' => 'required|min:5',
        'password' => 'required|alphaNum|min:3'
    ]);
    }
}
