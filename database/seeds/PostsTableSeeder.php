<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50)->create()->each(function ($p) {
            $p->tags()->attach(array_random(range(1, 20), 5));
        });
    }
}
