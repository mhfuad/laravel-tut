<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

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
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "Post One"
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => "Post title two"
        ]);
        
        DB::table('posts')->insert([
            'title' => "Post  3"
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "Post title 4"
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "Post  5"
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 5,
            'title' => "Post  title 6"
        ]);
    }
}
