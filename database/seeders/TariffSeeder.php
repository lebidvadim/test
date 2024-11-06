<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tariffs')->insert([
            ['name' => 'Unlim 100'],
            ['name' => 'Unlim 500'],
            ['name' => 'Unlim 1000'],
        ]);
    }
}
