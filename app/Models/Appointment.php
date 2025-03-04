<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
 
    protected $fillable =
    [
        "title",
        "description",
        "notes",
        "start_at",
        "user_id",
    ];

    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}




                        