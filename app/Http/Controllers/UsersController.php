<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $roles = User::get('role')->pluck('role')->unique();

        return view('users', ['users' => User::all(), 'roles'=>$roles]);
    }

    public function edit(Request $request)
    {
        $user = User::find($request->user_id);

        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
        ]);

        return back();
    }
}
