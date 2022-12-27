<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
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
}
