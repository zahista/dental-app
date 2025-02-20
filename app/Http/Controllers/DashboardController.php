<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $appointments = $user->appointments;

        return view('dashboard', [
            'appointments' => $appointments,
        ]); 
    }
}
