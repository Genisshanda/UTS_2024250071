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

    $matakuliah=['PWII','haha'];
    
     return view("matakuliah.index",compact('matakuliah','judul'));
  });


  Route :: get("/matakuliah/detail", function(){
    
    return view("matakuliah.detail")->with("matakuliah",["PWII"]);
 }); 


 Route :: get("/programstudi", function(){
   
    $programstudi=['PWII','PWI'];
    
     return view("programstudi.index",compact('programstudi'));
  });


  Route :: get("/programstudi/detail", function(){
    
    return view("programstudi.detail")->with("programstudi",['Teknik Sipil','Teknik mesin', 'Teknik Kimia', 'Teknik Electro', 'Teknik Fisika']);
 }); 


 use App\Http\Controllers\MatakuliahController;


Route :: get("/matakuliah", [MatakuliahController::class,'index']);
Route :: get("/matakuliah/detail/{id?}", [MatakuliahController::class,'detail']);

use App\Http\Controllers\ProgramstudiController;


Route :: get("/programstudi", [ProgramstudiController::class,'index']);
Route :: get("/programstudi/detail/{id?}", [ProgramstudiController::class,'detail']);
