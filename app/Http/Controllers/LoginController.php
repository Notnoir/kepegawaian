<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin(Request $request) {
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/')->with('toast_success','Login Berhasil');
        }
        return redirect('login');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function registrasi(){
        return view('pengguna.register');
    }
    
    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return view('pengguna.login')->with('toast_success','Silahkan login');
    }
}
