<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Appointment $appointment)
    {
        return view('appointment', [
            'appointment' => $appointment,
        ]);
    }
}
