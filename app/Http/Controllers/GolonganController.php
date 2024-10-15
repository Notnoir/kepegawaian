<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index() {
        $golongan = Golongan::all();
        // return $golongan;
        return view('golongan.index', compact(['golongan']));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        // dd($request->except('_token','submit'));
        Golongan::create($request->except(['_token','submit']));
        return redirect('/golongan');
    } 

    public function edit($id)
    {
        $golongan = Golongan::find($id);
        return view('golongan.edit',compact(['golongan']));
    }

    public function update($id, Request $request)
    {
        $golongan = Golongan::find($id);
        $golongan->update($request->except(['_token','submit']));
        return redirect('/golongan')->with('toast_success', 'Data Berhasil di Update');
    } 

    public function destroy($id)
    {
        $golongan = Golongan::find($id);
        $golongan->delete();
        return redirect('/golongan')->with('toast_success', 'Data Berhasil di Hapus');
    }
}
