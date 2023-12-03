<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' =>'Login',
            'active' =>'login'
        ]);
    }

    public function authenticate(Request $request){
        $credit = $request->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credit)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginerror', 'Gagal Untuk Login !!!');
    }

    public function logout(){
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
