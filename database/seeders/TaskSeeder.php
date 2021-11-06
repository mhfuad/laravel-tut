<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Task 1 for project 1 by user 1',
            'user_id' => 1
        ]);
        
        DB::table('tasks')->insert([
            'title' => 'Task 2 for project 1 by user 2',
            'user_id' => 2
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task 3 for project 1 by user 3',
            'user_id' => 2
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task 4 for project 2 by user 3',
            'user_id' => 3
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task 5 for project 2 by user 4',
            'user_id' => 4
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task 6 for project 2 by user 5',
            'user_id' => 5
        ]);
    }
}
