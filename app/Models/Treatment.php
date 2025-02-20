<?php

namespace App\Models;

use App\Models\TreatmentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Treatment extends Model
{
    protected $fillable = [
        'title',
        'description',
        'tooth',
        'appointment_id',
        'user_id',
        'doctor_id',
        'type_id',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(TreatmentType::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
