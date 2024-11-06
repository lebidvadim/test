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
        Schema::create('region_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->references('id')->on('regions');
            $table->string('name');
            $table->unique(['region_id', 'name']);
            $table->timestamps();
        });

        Artisan::call('db:seed --class=RegionCitySeeder');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_cities');
    }
};
