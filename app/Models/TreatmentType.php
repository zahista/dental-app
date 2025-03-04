<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentType extends Model
{
    protected $fillable= [
        "title",
        "description",
        "minutes",
        "is_paid",
        "status",
        "price",
    ];
}
