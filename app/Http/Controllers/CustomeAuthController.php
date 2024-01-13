<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomeAuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function login(){
        if(auth()->check()){
            return redirect('/');
        }
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
            ]
        );  
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.authentication');
    }

    public function authentication(Request $request){
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // dd($request->password);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        // auth()->logout();

        Auth::logout();
        
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function create(){

        return view('posts.create');
    }
}
