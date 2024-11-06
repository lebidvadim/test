<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressBalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_address_balances')->insert([
            [
                'user_address_id' => 1,
                'amount' => 10
            ],
            [
                'user_address_id' => 1,
                'amount' => 15
            ],
            [
                'user_address_id' => 1,
                'amount' => -5
            ],
            [
                'user_address_id' => 2,
                'amount' => 5
            ],
            [
                'user_address_id' => 2,
                'amount' => -10
            ],
        ]);
    }
}
