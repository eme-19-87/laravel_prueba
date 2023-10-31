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
            'description'  =>  'Aseo, entrenamiento, y cuidado general de tus mascotas'
        ]);

        Category::create([
            'name'  =>  'Mascota perdida',
            'slug'  =>  'mascotas-perdidas',
            'description'  =>  'Anuncios de mascotas perdidas'
        ]);

        Category::create([
            'name'  =>  'Entretenimiento',
            'slug'  =>  'entretenimiento',
            'description'  =>  'Videos de gatos, animales exóticos y los animales más carismáticos para tu entretenimiento'
        ]);

        Category::create([
            'name'  =>  'Eventos y actividades',
            'slug'  =>  'eventos-y-actividades',
            'description'  =>  'Actividades organizadas por administradores y patrocinadores'
        ]);
    }
}
