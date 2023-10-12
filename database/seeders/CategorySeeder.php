<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'  =>  'Cuidado',
            'slug'  =>  'cuidado',
            'description'  =>  'Cuidado sobre las mascotas y tips'
        ]);

        Category::create([
            'name'  =>  'Mascota perdida',
            'slug'  =>  'mascotas-perdidas',
            'description'  =>  'Anuncios de mascotas perdidas'
        ]);

        Category::create([
            'name'  =>  'Felices Fiestas',
            'slug'  =>  'felices-fiestas',
            'description'  =>  'Tempano les desea Muy Felices Fiestas'
        ]);

        Category::create([
            'name'  =>  'Eventos y actividades',
            'slug'  =>  'eventos-y-actividades',
            'description'  =>  'actividades organizadas por administradores y patrocinadores'
        ]);

        Category::create([
            'name'  =>  'Tips',
            'slug'  =>  'tips',
            'description'  =>  'tips'
        ]);
    }
}
