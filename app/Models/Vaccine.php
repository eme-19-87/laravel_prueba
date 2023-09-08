<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'form', 'brand', 'dosis', 'caution'];

    public function medical_records(){
        return $this->hasMany(MedicalRecord::class);
    } 
    
    
    public function pets_has_vaccines(){
        return $this->hasMany(PetsHasVaccines::class);
    }
}
