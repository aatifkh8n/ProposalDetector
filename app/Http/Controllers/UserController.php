<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function login() {
        return view("user.login");
    }

    public function authenticate(Request $request) {
        $username = $request->input("username");
        $password = $request->input("password");

        $user = User::where('username', $username)->first();
        if (!$user) {
            return redirect('/login')->with('failure', 'Invalid credentials');
        }
        $matched = Hash::check($password, $user->password);
        if (!$matched) {
            return redirect('/login')->with('failure', 'Invalid credentials');
        }
        
        return redirect('/proposals')->with('success', 'Authenticated successfully');
    }
    
    public function register() {
        return view('user.register');
    }

    public function createUser(Request $request) {
        $username = $request->username;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        
        $user_exists = User::where('username', $username)->get();
        if ($user_exists) {
            return redirect('/register')->with('failure', 'Username already taken');            
        }

        $hashed_password = Hash::make($password);

        $user = new User();
        $user->username = $username;
        $user->name = $name;
        $user->email = $email;
        $user->password = $hashed_password;
        $user->save();

        return redirect('/')->with('success', 'New user "'.$username.'" created successfully');
    }
}
