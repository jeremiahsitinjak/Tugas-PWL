<?php

// use Illuminate\Support\Facades\Route; (UNNECESSARY)
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome',[
//         'isi_data' => 'Halaman Awal',
//     ]);
// });
Route::get('/',[PagesController::class,'index']);

Route::get('/aboutme', function () {
    return view('aboutme',[
        "judul" => "About Me",
        "nama" => "Jeremia Hasudungan Sitinjak",
        "nim" => "231402010"
    ]);
});

Route::get('/dosen', function () {
    return view('dosen',[
        "judul" => "Dosen Favorite",
        "dosen" => "Pak Opim"
    ]);
});

Route::get('/wisata', function () {
    return view('wisata',[
        "judul" => "Wisata",
        "wisata" => "-"
    ]);
});