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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_address_id')->unique();
            $table->foreign('city_address_id')->references('id')->on('city_addresses');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('tariff_id')->references('id')->on('tariffs');
            $table->enum('status', ['active', 'disabled', 'pause']);
            $table->foreignId('tv_id')->references('id')->on('tvs');
            $table->unsignedBigInteger('ip_id')->unique();
            $table->foreign('ip_id')->references('id')->on('ips');
            $table->string('device_id')->unique()->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed --class=UserAddressSeeder');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
