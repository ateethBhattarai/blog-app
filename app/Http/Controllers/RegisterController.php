<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('user.register');
    }

    public function store(){
        $attribute = request()->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users,username',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:8|max:255'
        ]);

        $user = User::create($attribute);
        
        auth()->login($user);

        // session()->flash('success','Your account has been created successfully.'); //using this line of code or code below with ->with() is same

        return redirect('/')->with('success','Your account has been created successfully.');
    }
}
