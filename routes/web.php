<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get("/matakuliah", function(){
    $judul="Halaman list Mata Kuliah : Menampilkan seluruh data Mata Kuliah dan Nama Program
    Studi";
    $matakuliah=['mtl','haha'];
    
     return view("matakuliah.index",compact('matakuliah','judul'));
  });
