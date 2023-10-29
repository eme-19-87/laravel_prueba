<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Pet extends Model
{
    use HasFactory;
    protected $guarded = ['id','timestamps'];

    public function pet_type(){
        return $this->belongsTo(PetType::class);
    }
    public function medical_records(){
        return $this->belongsTo(MedicalRecords::class);
    }
    public function pets_has_vaccines(){
        return $this->hasMany(PetsHasVaccines::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
