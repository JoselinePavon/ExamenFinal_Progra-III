<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){

        return view('auth.register');


    }

    public function store(){

        $this->validate(request (), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);


        $user= User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);

        auth()->login($user);
        return redirect()->route('read');
    }

}
