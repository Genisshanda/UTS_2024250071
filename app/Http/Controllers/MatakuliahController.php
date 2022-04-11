<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    //

    public function detail($id= null)
    {
      
      
        return view("matakuliah.detail",compact("id"));
    }

    public function index()
    {
        $matakuliah = matakuliah::all();
        
        return view("matakuliah.index",compact('matakuliah'));
    }
}
