<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 3)
           ->create()
           ->each(function ($u) {
                $u->comments()->save(factory(App\Comment::class)->make());
                $u->comments()->save(factory(App\Comment::class)->make());
                $u->comments()->save(factory(App\Comment::class)->make());
            });
    }
}
