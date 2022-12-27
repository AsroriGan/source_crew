<?php

use App\Http\Controllers\DatarekapController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MapelController;

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


//-------------------------------DATA REKAP------------------------/////////////////////
Route::get('/datarekap',[DatarekapController::class,'datarekap'])->name('datarekap');
Route::get('/detailrekap',[DatarekapController::class,'detailrekap'])->name('detailrekap');

//////////////-----------------DAta IZIN------------///////////////
Route::get('/dataizin', [DatarekapController::class, 'dataizin'])->name('dataizin');
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


//mapel
Route::get('/mapel',[MapelController::class,'mapel'])->name('mapel');
Route::get('/tambahmapel',[MapelController::class,'tambahmapel'])->name('tambahmapel');
Route::post('/tambahmapelpost',[MapelController::class,'tambahmapelpost'])->name('tambahmapelpost');
Route::get('/editmapel/{id}',[MapelController::class,'editmapel'])->name('editmapel');
Route::post('/editmapelpost/{id}',[MapelController::class,'editmapelpost'])->name('editmapelpost');
