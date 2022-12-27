<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function kelas(){
        $data = Kelas::all();
        return view('kelas.kelas',compact('data'));
    }

    public function tambahkelas(request $request){
         $this->validate($request,[
            'kelas' => 'required',
        ],[
            'kelas'
        ]);
        $data = Kelas::create([
            'kelas' => $request->kelas,
        ]);
        return Redirect()->route('kelas')->with('success','Data Berhasil Ditambahkan');
    }

    public function editkelas(Request $request, $id){
        $data = Kelas::find($id);
        $this->validate($request,[
            'kelas' => 'required',
        ]);
        $data->update([

            'kelas' => $request->kelas,
        ]);       
        return redirect('kelas')->with('success','Data berhasil diupdate');
    }

    public function jurusans($id){
        $detail = Jurusan::with('idkelas')->where('kelas',$id)->get();
        $data = DB::table('Jurusans')
        ->join('kelas', 'kelas.id', '=', 'Jurusans.kelas')
        ->where('Jurusans.kelas', $id)
        ->get();

        // dd($data);
        return view('jurusan.jurusankelas', compact('detail'))->with('data', $data);
    }
}
