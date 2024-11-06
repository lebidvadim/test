<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_address_balances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_address_id')->references('id')->on('user_addresses');
            $table->float('amount');
            $table->timestamps();
        });

        Artisan::call('db:seed --class=UserAddressBalanceSeeder');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_address_balances');
    }
};
