<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => 1,
            'country' => 'Bangladesh',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 2,
            'country' => 'Pakistan',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 3,
            'country' => 'Turky',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 4,
            'country' => 'Saudia arab',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 5,
            'country' => 'Morokko',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 6,
            'country' => 'Spain',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 7,
            'country' => 'Madina',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 8,
            'country' => 'Kufa',
        ]);
        
        DB::table('addresses')->insert([
            'user_id' => 9,
            'country' => 'Hafsha',
        ]);

        DB::table('addresses')->insert([
            'user_id' => 10,
            'country' => 'Makka',
        ]);

        DB::table('addresses')->insert([
            'user_id' => 11,
            'country' => 'yamen',
        ]);
    }
}
