<?php

use App\Http\Controllers\DatarekapController;
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

// datasiswa
Route::get('/datasiswa',[DatasiswaController::class,'datasiswa'])->name('datasiswa');
//datakelas
Route::get('/datakelas',[DatasiswaController::class,'datakelas'])->name('datakelas');


//-------------------------------DATA REKAP------------------------/////////////////////
Route::get('/datarekap',[DatarekapController::class,'datarekap'])->name('datarekap');
Route::get('/detailrekap',[DatarekapController::class,'detailrekap'])->name('detailrekap');

//////////////-----------------DAta IZIN------------///////////////
Route::get('/dataizin', [DatarekapController::class, 'dataizin'])->name('dataizin');
