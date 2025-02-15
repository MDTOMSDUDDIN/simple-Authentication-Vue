<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request ){
        // return $request->all();
        $request->validate([
            'name'=>'required|string|min:4',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string|min:6',
        ]); 

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|string|min:6',
        ]);

        $credentials=$request->only('email','password');

        if(!Auth::attempt($credentials)){
            return back()->withErrors([
                'messages'=>'credentials Does not Match !',
            ]);
        }
        return redirect('/dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
