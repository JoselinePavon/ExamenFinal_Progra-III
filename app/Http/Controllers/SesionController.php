<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function create(){

        return view('auth.login');

    }

    public function store(){

        if(auth()->attempt(request(['email','password']))== false)
        {
            return back()->withErrors([
                "message" => "Tu correo o contraseña son incorrectas, Intenta de nuevo"
            ]);
            return redirect()->back();
        }
        return redirect()->route('read');

    }
    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }

    public function login(){
        return view('auth.login');
    }
}
