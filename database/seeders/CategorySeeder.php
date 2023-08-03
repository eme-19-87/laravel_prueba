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
        $names = ['noticia', 'urgencia', 'anuncio', 'info'];
        for ($i=0; $i < 4; $i++) {
            Category::create([
                'name'=>$names[$i]
            ]);
        }
    }
}
