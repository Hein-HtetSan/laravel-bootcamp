<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['country_id' => 1, 'name' => 'California'],
            ['country_id' => 1, 'name' => 'Texas'],
            ['country_id' => 1, 'name' => 'New York'],
            ['country_id' => 2, 'name' => 'Ontario'],
            ['country_id' => 2, 'name' => 'Quebec'],
            ['country_id' => 3, 'name' => 'England'],
            ['country_id' => 3, 'name' => 'Scotland'],
            ['country_id' => 4, 'name' => 'New South Wales'],
            ['country_id' => 4, 'name' => 'Victoria'],
            ['country_id' => 5, 'name' => 'Maharashtra'],
            ['country_id' => 5, 'name' => 'Karnataka'],
            // Add more states as needed
        ];

        DB::table('states')->insert($states);
    }
}
