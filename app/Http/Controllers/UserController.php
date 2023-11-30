<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('user.register');
    }
    public function store(Request $req)
    {
        $formFields = $req->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);
        //HASH PASSWORD
        $formFields['password'] = bcrypt($formFields['password']);
        //CREATE USER
        $user = User::create($formFields);
        //LOGIN
        auth()->login($user);
        return redirect('/')->with('message', 'User created successfully');
    }
    public function logout(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been loged out!');
    }
    public function login(){
        return view('user.login');
    }
    public function authenticate(Request $req){
        $formFields = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(auth()->attempt($formFields)){
            $req->session()->regenerate();
            return redirect('/')->with('message','You are now logged in!');
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
