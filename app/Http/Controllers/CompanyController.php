<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function list(){
      // Alle bedrijven ophalen met Querybuilder van laravel
      $companies = DB::table('companies')->orderBy('name', 'asc')->get();
   // $companies = DB::table('companies')->where('country', '=', 'Netherlands')->get();

      // In een variable opslaan

      // Een view teruggeven met deze data ( de bedrijven )
      return view('company.list', ['bedrijven' => $companies]);
    }

    public function details($id){
      // Haal bedrijf uit database waar id = $id
      $company = DB::table('companies')->where('id', '=', $id)->first();
      // Sla op in een variable
      // Geef aan de view
      // Geef de view terug en laat zien op het scherm
      return view('company.details', ['bedrijf' => $company]);
    }
}
