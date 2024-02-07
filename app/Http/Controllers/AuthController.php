<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use Alert;
class AuthController extends Controller
{
    public function login(){
        return view('pages.auth.login');
    }
    public function loginattemp(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            Alert::success('Berhasil Login', 'Selamat Datang di Dashboard');
            return redirect('/dashboard');
        }else{
            
            Alert::error('Gagal', 'Email Atau Password yang anda masukkan salah');
            return redirect('/');
        }
    }
}
