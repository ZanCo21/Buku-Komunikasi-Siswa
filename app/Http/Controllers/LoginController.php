<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Hash;

// use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password')) && $request->user()->level == 'admin'){
            return redirect('/dashboard');
        }
        elseif (Auth::attempt($request->only('email', 'password')) && $request->user()->level == 'user') {
            return redirect('/');
        }
        return redirect('login');
    }

    public function register(){
        $data['title'] = 'Register';
        return view('pengguna/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        // return redirect()->route('login')->with('success', 'Registration success. Please login!');
        return redirect('/login')->with('success', 'Registration success. Please login!');

    }

    public function logout(Request $request){
        auth::logout();
        return redirect('/login');
    }
    
}