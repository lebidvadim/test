<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_addresses')->insert([
            [
                'city_address_id' => 1,
                'user_id' => 1,
                'tariff_id' => 2,
                'status' => 'active',
                'tv_id' => 1,
                'ip_id' => 1,
                'device_id' => null
            ],
            [
                'city_address_id' => 2,
                'user_id' => 1,
                'tariff_id' => 3,
                'status' => 'disabled',
                'tv_id' => 3,
                'ip_id' => 2,
                'device_id' => null
            ],
        ]);
    }
}
