<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['state_id' => 1, 'name' => 'Los Angeles'],
            ['state_id' => 1, 'name' => 'San Francisco'],
            ['state_id' => 2, 'name' => 'Houston'],
            ['state_id' => 2, 'name' => 'Dallas'],
            ['state_id' => 3, 'name' => 'New York City'],
            ['state_id' => 3, 'name' => 'Buffalo'],
            ['state_id' => 4, 'name' => 'Toronto'],
            ['state_id' => 4, 'name' => 'Ottawa'],
            ['state_id' => 5, 'name' => 'Montreal'],
            ['state_id' => 5, 'name' => 'Quebec City'],
            ['state_id' => 6, 'name' => 'London'],
            ['state_id' => 6, 'name' => 'Manchester'],
            ['state_id' => 7, 'name' => 'Edinburgh'],
            ['state_id' => 7, 'name' => 'Glasgow'],
            ['state_id' => 8, 'name' => 'Sydney'],
            ['state_id' => 8, 'name' => 'Newcastle'],
            ['state_id' => 9, 'name' => 'Melbourne'],
            ['state_id' => 9, 'name' => 'Geelong'],
            ['state_id' => 10, 'name' => 'Mumbai'],
            ['state_id' => 10, 'name' => 'Pune'],
            ['state_id' => 11, 'name' => 'Bangalore'],
            ['state_id' => 11, 'name' => 'Mysore'],
            // Add more cities as needed
        ];

        DB::table('cities')->insert($cities);
    }
}
