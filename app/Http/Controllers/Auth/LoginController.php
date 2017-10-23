<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        # code...
        if(Auth::attempt(['email'=> $request->input('email'),'password'=> $request->input('password')]))
        {
            return redirect()->intended('dashboard');
        }

        return view('auth.login');
    }

    public function showForm()
    {
        return view('auth.login');
    } 

    public function logout()
    {
        # code..
        Auth::logout();
        return redirect('/login');
    }
}
