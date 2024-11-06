<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city_addresses')->insert([
            [
                'region_city_id' => 1,
                'street' => 'Миру',
                'house' => '13-а',
                'apartment' => '41'
            ],
            [
                'region_city_id' => 1,
                'street' => 'Бориса Тена',
                'house' => '10',
                'apartment' => null
            ]
        ]);
    }
}
