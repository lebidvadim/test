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
        Schema::create('city_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_city_id')->references('id')->on('region_cities');
            $table->string('street');
            $table->string('house');
            $table->string('apartment')->nullable();
            $table->unique(['region_city_id', 'street', 'house', 'apartment']);
            $table->timestamps();
        });

        Artisan::call('db:seed --class=CityAddressSeeder');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_addresses');
    }
};
