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
        TreatmentType::create($request->except('_token'));

        return to_route('treatment_type.index');
    }
}
