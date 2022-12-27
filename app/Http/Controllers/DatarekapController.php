<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatarekapController extends Controller
{
    public function datarekap(){
        return view('datarekap.datarekap');
    }
    public function detailrekap(){
        return view('datarekap.detailrekap');
    }





///////////////////---------------------DATA IZIN----------------------------//////////////////////
public function dataizin(){
    return view('izinsiswa.dataizinsiswa');
}
}
