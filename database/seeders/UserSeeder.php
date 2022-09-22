<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    DB::table('Students')->insert([
        'name' => 'amaar',
        'email' => 'amaar@gmail.com',
        'city' => 'lahore',
        'marks' => '60',
    ]);
    DB::table('Students')->insert([
        'name' => 'bilal',
        'email' => 'bilal@gmail.com',
        'city' => 'lahore',
        'marks' => '70',
    ]);
}
}
