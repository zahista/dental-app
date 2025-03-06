<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use App\Models\TreatmentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{

    // Index  = zobraz mi všechny Návštěvy

    public function index($user = NULL)
    {
        $loggedUser = Auth::user();
        $urlUser = User::find($user);

        if($loggedUser->role !== "doctor" && $urlUser !== NULL)
        {
            return abort(404);
        }

        return view('dashboard', [
            'user' => $urlUser ?? $loggedUser,
        ]);
    }

    // Zobraz mi konkrétní Návštěvu s konkrétním ID a všechny jeho informace 

    public function show(Appointment $appointment)
    {

        if(Auth::user()->id !== $appointment->user_id)
        {
            to_route('appointment.index');
        }

        $appointment = $appointment->load('treatments');
        $treatment_types = TreatmentType::where('status', 'active')->get();
        $doctors = User::where('role', 'doctor')->get();


        return view('appointment', [
            'appointment' => $appointment,
            'treatment_types' => $treatment_types,
            'doctors' => $doctors
        ]);
    }

    //vytvoř novou návštěvu

    public function store(Request $request)
    {
        Appointment::create($request->only(['title', 'description', 'notes', 'user_id']));

        return back();
    }


    // Uprav konkrétní model s konkrétním ID 

    public function edit(Request $request)
    {
        $appointment = Appointment::find($request->appointment_id)->update(['start_at' => $request->start_at]);

        return back();
    }
}
