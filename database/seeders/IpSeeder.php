<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ips')->insert([
            ['value' => '10.10.10.10'],
            ['value' => '10.10.10.11'],
            ['value' => '10.10.10.12'],
        ]);
    }
}
