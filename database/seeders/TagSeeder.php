<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Laravel'
        ]);

        DB::table('tags')->insert([
            'name' => 'PHP'
        ]);

        DB::table('tags')->insert([
            'name' => 'Javascript'
        ]);

        DB::table('tags')->insert([
            'name' => 'Vue.js'
        ]);


    }
}
