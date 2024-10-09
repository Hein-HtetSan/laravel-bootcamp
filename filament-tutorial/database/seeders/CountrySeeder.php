<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'United States', 'code' => 'US', 'phonecode' => '1'],
            ['name' => 'Canada', 'code' => 'CA', 'phonecode' => '1'],
            ['name' => 'United Kingdom', 'code' => 'GB', 'phonecode' => '44'],
            ['name' => 'Australia', 'code' => 'AU', 'phonecode' => '61'],
            ['name' => 'India', 'code' => 'IN', 'phonecode' => '91'],
            // Add more countries as needed
        ];

        DB::table('countries')->insert($countries);
    }
}
