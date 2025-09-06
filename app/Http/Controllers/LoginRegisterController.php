<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Visitor;

class LoginRegisterController extends Controller
{   
    public function register() {
        return view('pages.register.register');
    }

    public function store(Request $request) {
        $validated_data = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $validated_data['password'] = bcrypt($request['password']);

        if(Visitor::create($validated_data)) {
            return redirect()->route('auth.login')->with('Success', 'You have successfully registered');
        }else {
            return redirect()->route('auth.login')->with('error', 'Registration failed');
        }
        
    }

    public function login() {
        return view('pages.login.login');
    }

    public function loginstore(Request $request) {
        $validated_data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $visitor = Visitor::where('email', $validated_data['email'])->first();

        if($visitor && Hash::check($validated_data['password'], $visitor->password)) {
            session(['visitor_id' => $visitor->id]);
            return redirect()->route('public.home')->with('Success', 'You have successfully logged in');
        }else {
            return redirect()->route('auth.login')->with('error', 'Invalid email or password');
        }
    }
}
