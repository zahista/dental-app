<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // zkontorluj, že data jsou v pořádku 
            // - takový email ještě nemáme (SELECT * FROM USERS where email je ten email)
            // - heslo je v požadované délce 
            // - jméno je delší než 5 znáků

        $user = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password,
        ]);

        return redirect('/register')->with('message', 'Registrace proběhla v pořádku');
    }
}
