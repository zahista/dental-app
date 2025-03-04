<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'patient')->get();
        
        return view('patients', ['users'=>$users]);
    }

    public function store(Request $request)
    {
        $user = User::create(
            $request->only(['name', 'email', 'password', 'role'])
        );

        return to_route('patients.index');
    }
}
