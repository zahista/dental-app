<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{

    // Index  = zobraz mi všechny Návštěvy

    public function index()
    {
        $user = Auth::user();

        $appointments = $user->appointments;
        $users = User::where('role', 'patient')->get();

        return view('dashboard', [
            'appointments' => $appointments,
            'users' => $users,
        ]); 
    }

    // Zobraz mi konkrétní Návštěvu s konkrétním ID a všechny jeho informace 

    public function show(Appointment $appointment)
    {
        $appointment = $appointment->load('treatments');

        return view('appointment', [
            'appointment' => $appointment,
           
        ]);
    }

     //vytvoř novou návštěvu

     public function store(Request $request)
     {
        Appointment::create($request->only(['title', 'description', 'notes', 'user_id']));

        return to_route('appointment.index');
    }


    // Uprav konkrétní model s konkrétním ID 

    public function edit(Request $request)
    {
        $appointment = Appointment::find($request->appointment_id)->update(['start_at' => $request->start_at]);

        return to_route('appointment.index');
    }
   
}
