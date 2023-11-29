<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            'id' => '0',
            'name' => 'Ulises',
            // Agrega más campos y valores según sea necesario
        ]);
        DB::table('student')->insert([
            'id' => '1',
            'name' => 'Kevin',
            // Agrega más campos y valores según sea necesario
        ]);
        DB::table('student')->insert([
            'id' => '2',
            'name' => 'Adrian',
            // Agrega más campos y valores según sea necesario
        ]);
        DB::table('student')->insert([
            'id' => '3',
            'name' => 'Yoyo',
            // Agrega más campos y valores según sea necesario
        ]);
        DB::table('student')->insert([
            'id' => '4',
            'name' => 'Isabel',
            // Agrega más campos y valores según sea necesario
        ]);
    }
}
