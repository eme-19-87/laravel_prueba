<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach (Post::all() as $post) {
            Comment::factory(rand(1, 3))->for($users->random(1)->first())->create([
                'post_id'=>$post->id
            ]);
        }
    }
}
