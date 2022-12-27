<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function scanqrview(){
        $data = absensi::all();
        return view("absensi.absensi",compact("data"));
    }

    public function insert(Request $request){
        // dd($request->all());
        $sekarang = now();
        $jam = $sekarang->format('H');
        // dd($jam);
        $cekabsen = absensi::where([
            'nisn' => $request->nisn,
            'tanggal' => date('Y-m-d'),
            'jam' => $jam
        ])->first();
        if($cekabsen){
            return redirect('/absensi')->with("gagal","");
        }
        // dd($request->all());
        $data = absensi::create([
            'nisn' => $request->nisn,
            'tanggal' => date('Y-m-d'),
            'jam' => $jam,
            // 'created_at' => now(),
        ]);

        return redirect("/absensi")->with("success","");
    }
}
