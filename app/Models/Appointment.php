<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    

    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}




                        