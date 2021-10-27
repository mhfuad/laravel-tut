<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DefaultUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call([
            DefaultUserSeeder::class,
            AddressSeeder::class,
            PostSeeder::class,
            TagSeeder::class
        ]);

        $tag = \App\Models\Tag::first();
        $post = \App\Models\Post::first();
        $post->tags()->attach($tag);
        $post->tags()->attach([2,3,4]);
    }
}
