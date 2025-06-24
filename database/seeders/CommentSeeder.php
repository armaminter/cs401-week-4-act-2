<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $posts = Post::all();

        if ($users->isEmpty()) {
            $users = User::factory(5)->create();
        }

        if ($posts->isEmpty()) {
            $posts = Post::factory(5)->create();
        }

        foreach ($users as $user) {
            Comment::factory(rand(2, 5))->create([
                'user_id' => $user->id,
                'post_id' => $posts->random()->id,
            ]);
        }
    }
}
