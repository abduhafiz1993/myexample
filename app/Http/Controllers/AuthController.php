<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request) {
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','max:255'],
            'password' => ['required', 'min:6', 'confirmed'],

        ]);
        
        // Register
        $user = User::create($fields);

        Auth::login($user);

        // Redirect

        return redirect()->route('home');
    }

    public function login(Request $request) {
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'password' => ['required'],

        ]);
        
        
        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended();
        } else {
            return back()-> withErrors([
                'failed'=> 'The provided credentials do not match our records.'
            ]);
        }
    }
    
}