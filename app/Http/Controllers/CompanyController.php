<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function list(){
      // Alle bedrijven ophalen met Querybuilder van laravel
       $companies = DB::table('companies')->get();

      // In een variable opslaan

      // Een view teruggeven met deze data ( de bedrijven )
      return view('company.list', ['bedrijven' => $companies]);
    }

    public function details(){
    }
}
