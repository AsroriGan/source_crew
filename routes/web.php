<?php

use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasiswaController;

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
//Absensi
Route::get('/absensi',[AbsensiController::class,'scanqrview'])->name('absensi');
Route::post('/insertabsen',[AbsensiController::class,'insert'])->name('insertabsen');
// datasiswa
Route::get('/datasiswa',[DatasiswaController::class,'datasiswa'])->name('datasiswa');
//datakelas
Route::get('/datakelas',[DatasiswaController::class,'datakelas'])->name('datakelas');
