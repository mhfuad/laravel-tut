<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        DB::table('users')->insert([
            'name' => 'fuad',
            'email' => 'fuad@gmail.com',
            'password' => Hash::make('123456'),
            'project_id' => 1
        ]);
        
        DB::table('users')->insert([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'project_id' => 1,
            'remember_token' => Str::random(10),
        ]);
        
        DB::table('users')->insert([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'project_id' => 2,
            'remember_token' => Str::random(10),
        ]);
        
        DB::table('users')->insert([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'project_id' => 2,
            'remember_token' => Str::random(10),
        ]);
        
        DB::table('users')->insert([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'project_id' => 2,
            'remember_token' => Str::random(10),
        ]);
    }
}
