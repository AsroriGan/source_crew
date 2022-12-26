<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    public function datasiswa(){
        return view('datasiswa.datasiswa');
    }

    public function tambahsiswa() {
        
    }

    public function datakelas(){
        return view('datakelas.datakelas');
    }
}
