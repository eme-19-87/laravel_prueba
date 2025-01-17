<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
