<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsHasVaccines extends Model
{
    use HasFactory;

    public function pets(){
        return $this->belongsTo(Pet::class);
    }

    public function vaccines(){
        return $this->belongsTo(Vaccine::class);
    }
}
