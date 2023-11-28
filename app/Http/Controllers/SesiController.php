<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'password'=>'required',
        ],[
            'password.required'=>'Password Wajib Diiisiiiii'
        ]);

        $infologin= [
            'nama' => $request->nama,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            if (Auth::user()->role == 'admin'){
                return redirect('/Dashboard/admin');
            }elseif (Auth::user()->role == 'pembeli') {
                return redirect('/Dashboard/user');
                # code...
            }
        }else {
            return redirect('')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }


    }

    function logout(){
        Auth::logout();
        return redirect('');
    }


}
