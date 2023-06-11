<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create(){
        return view('user.sessions.login');
    }


    public function store(){

        // validation
        $attributes = request()->validate([
            'email'=>'required|max:255',
            'password'=>'required|min:8|max:255'
        ]);

        // auth failed
        if(!auth()->attempt($attributes)){
        throw ValidationException::withMessages(['email'=>'Your provided email is not verified.']);

    }

        // attempt to authenticate and login
        session()->regenerate();
        return redirect('/')->with('success','User LoggedIn.');
    }


    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success','User Logged out successfully.');
    }
}
