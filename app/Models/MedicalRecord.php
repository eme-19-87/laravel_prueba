<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = ['pet_id', 'vaccine_id', 'allergies', 'veterinarian'];
    
    public function pets(){
        return $this->hasMany(Pets::class);
    }
}
