<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;

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

// datasiswa
Route::get('/datasiswa',[DatasiswaController::class,'datasiswa'])->name('datasiswa');
//datakelas
Route::get('/datakelas',[DatasiswaController::class,'datakelas'])->name('datakelas');


//kelas
Route::get('/kelas',[KelasController::class,'kelas'])->name('kelas');
Route::post('/tambahkelas',[KelasController::class,'tambahkelas'])->name('tambahkelas');
Route::post('/editkelas/{id}',[KelasController::class,'editkelas'])->name('editkelas');
Route::get('/jurusans/{id}',[KelasController::class,'jurusans'])->name('jurusans');


//jurusan
Route::get('/jurusan',[JurusanController::class,'jurusan'])->name('jurusan');
Route::get('/tambahjurusan',[JurusanController::class,'tambahjurusan'])->name('tambahjurusan');
Route::post('/tambahjurusanpost',[JurusanController::class,'tambahjurusanpost'])->name('tambahjurusanpost');
Route::get('/editjurusan/{id}',[JurusanController::class,'editjurusan'])->name('editjurusan');
Route::post('/editjurusanpost/{id}',[JurusanController::class,'editjurusanpost'])->name('editjurusanpost');