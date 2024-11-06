<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tvs')->insert([
            ['name' => 'omega 60'],
            ['name' => 'omega 180'],
            ['name' => 'megogo'],
        ]);
    }
}
