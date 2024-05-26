<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
