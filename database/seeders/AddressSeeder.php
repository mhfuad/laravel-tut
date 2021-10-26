<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        
        DB::table('addresses')->insert([
            'user_id' => 1,
            'country' => 'Bangladesh',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 2,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 3,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 4,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 5,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 6,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 7,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 8,
            'country' => $this->faker->country(),
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 9,
            'country' => $this->faker->country(),
        ]);

        DB::table('addresses')->insert([
            'user_id' => 10,
            'country' => $this->faker->country(),
        ]);

        DB::table('addresses')->insert([
            'user_id' => 11,
            'country' => $this->faker->country(),
        ]);
    }
}
