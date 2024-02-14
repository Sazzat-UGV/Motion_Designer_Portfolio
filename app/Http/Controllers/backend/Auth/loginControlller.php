<?php

namespace App\Http\Controllers\backend\Auth;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginControlller extends Controller
{

    public function loginPage()
    {
        return view('backend.pages.auth.login');
    }

    
    public function login(Request $request)
    {

        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $request->filled('remember_me'))) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        $request->session()->invalidate();
        Toastr::error('You are not a valid user');
        return back();

    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.loginPage');
    }

}
