<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalancontroller;
use App\Http\Controllers\Latihancontroller;
use App\Http\Controllers\postController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SlotController;

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

// Route Basic
Route::get('/belajar', function () {
   echo "<center><u><h1>HALO SEMUANYA</h1><br></u>";
   echo "<u><h1>Kami sedang belajar laravel dasar </h1></u>";
});

// Route Basic lanjut ke view
Route::get('/home', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/saya', function () {
    return view('pages.saya');
});
Route::get('/aku', function () {
    return view('pages.aku');
});

// Route Parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobby}',function($a,$b,$c,$d,$e,$f){
    return view('pages.biodata',compact('a','b','c','d','e','f'));
});

// Route Opsional Parameter
Route::get('pesanan/{makanan?}/{makan?}',function($a="Pesanan Kosong",$b="Pesanan Kosong"){
    return view('pages.pesanan',compact('a','b'));
});

// pasing data dari controller ke view
Route::get('/pengenalan',[App\Http\Controllers\pengenalancontroller::class,'pengenalan']);

// pasing data dinamis(route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}',[App\Http\Controllers\pengenalancontroller::class,'intro']);
Route::get('/siswa1',[App\Http\Controllers\pengenalancontroller::class,'siswa']);
Route::get('/latihan',[App\Http\Controllers\Latihancontroller::class,'menu']);
Route::get('/latihan2',[App\Http\Controllers\Latihancontroller::class,'dosen']);
Route::get('/latihan3',[App\Http\Controllers\Latihancontroller::class,'tv']);

Route::get('/post',[App\Http\Controllers\postController::class,'index']);

Route::get('/soal',[App\Http\Controllers\SiswaController::class,'index']);
Route::get('/perserta',[App\Http\Controllers\SiswaController::class,'ser']);
Route::get('/soal1',[App\Http\Controllers\SiswaController::class,'con']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::resource('slot',SlotController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test-admin',function(){
    return view('layouts.admin');
});

