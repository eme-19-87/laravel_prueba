<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        for ($i=0; $i < 8; $i++) { 
            Post::factory(1)->hasAttached($categories->random(rand(1, 4)), ['created_at'=>now(), 'updated_at'=>now()])->create();
        }
    }
}
