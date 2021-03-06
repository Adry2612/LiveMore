<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos 15 post de prueba.
        $posts = Post::factory(15)->create();

        // Por cada post se crean 1 imagen.
        foreach ($posts as $post){
            // Creamos 5 comentarios de prueba por cada post.
            Comment::factory(5)->create([
                'post_id' => $post->id
            ]);

        }
    }
}
