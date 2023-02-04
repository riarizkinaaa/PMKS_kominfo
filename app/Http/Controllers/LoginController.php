<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('login');
        
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials))
         {
            
            $request->session()->regenerate();
            if(Auth::user()->id_role == 1)
            {
                return redirect()->intended ('dashboard');

            }else if(Auth::user()->id_role == 2)
            {
                return redirect()->intended ('dashboard');

            }else if(Auth::user()->id_role == 3)
            {
                return redirect()->intended ('dashboard');

            }else if(Auth::user()->id_role == 4)
            {
                return redirect()->intended ('dashboard');
            }
        }
        return back()->with('gagal','login invalid!');
    }
}
