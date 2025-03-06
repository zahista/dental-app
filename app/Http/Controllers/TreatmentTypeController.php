<?php

namespace App\Http\Controllers;

use App\Models\TreatmentType;
use Illuminate\Http\Request;

class TreatmentTypeController extends Controller
{
    public function index()
    {
        return view('treatment_types', [
            'treatment_types' => TreatmentType::all()
        ]);
    }

    public function store(Request $request)
    {
        TreatmentType::create([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "minutes" => $request->minutes,
            "status" => $request->status,
            "is_paid" => $request->is_paid == "on" ? 1 : 0,
        ]);

        return to_route('treatment_type.index');
    }
}
