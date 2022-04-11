<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramstudiController extends Controller
{
    public function detail($id= null)
    {
      
      
        return view("programstudi.detail",compact("id"));
    }

    public function index()
    {
        $programstudi = programstudi::all();
        
        return view("programstudi.index",compact('programstudi'));
    }
}
