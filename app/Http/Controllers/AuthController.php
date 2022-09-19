<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('main-login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        $validated = auth()->attempt([
            'username'  => $request->username,
            'password'  => $request->password,
        ]);

        if ($validated) {
            if (auth()->user()->id_akses == 1 && $validated == true) {
                // Jika admin
                return redirect()->route('home')->with('success', 'Login Successfull');
            } else {
                // Jika bukan admin
                return redirect()->route('home')->with('success', 'Login Successfull');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('getLogin')->with('success', 'You have been successfully logged out');
    }
}
