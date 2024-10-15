<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request) {

        if($request->has('search')){
            $karyawan = Karyawan::where('nama','LIKE','%' .$request->search. '%')->paginate(5);
        }else{
            $karyawan = Karyawan::paginate(5); 
        }
        return view('karyawan.index', compact(['karyawan']));
    }
    // public function index()
    // {
    //     $karyawan = Karyawan::all();
    //     return view('karyawan.index', compact(['karyawan']));
    // }

    // public function search(Request $request)
    // {
    //     $output = "";
    //     $karyawan = Karyawan::where('nip','LIKE','%'.$request->search.'%')->orwhere('nama','LIKE','%'.$request->search.'%')->get();

    //     foreach($karyawan as $k)
    //     {
    //         $output.=
    //         '<tr>
            
    //         <td> '.$k->nip.' </td>
    //         <td> '.$k->nama.' </td>

    //         </tr>';

    //     }

    //     return response($output);
    // }

    public function index_detail() {
        $karyawan = Karyawan::with('golongan')->paginate(5);
        return view('detail.index-detail', compact(['karyawan']));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        // dd($request->except('_token','submit'));
        Karyawan::create($request->except(['_token','submit']));
        return redirect('/karyawan')->with('toast_success', 'Data Berhasil di Tambahkan');
    } 

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit',compact(['karyawan']));
    }

    public function update($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->update($request->except(['_token','submit']));
        return redirect('/karyawan')->with('toast_success', 'Data Berhasil di Update');
    } 

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan')->with('toast_success', 'Data Berhasil Di Hapus');
    }
}
