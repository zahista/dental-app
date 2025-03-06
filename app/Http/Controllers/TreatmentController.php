<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function store(Request $request)
    {   
        Treatment::create([
            "title"=> $request->title,
            "description"=> $request->description,
            "tooth"=> $request->tooth,
            "appointment_id"=> $request->appointment_id,
            "user_id"=> $request->user_id,
            "type_id"=> $request->type_id,
            "doctor_id"=> $request->doctor_id,
        ]);

        return back();
    }
}
