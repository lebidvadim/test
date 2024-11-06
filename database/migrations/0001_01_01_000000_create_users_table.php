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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->index();
            $table->string('email')->unique()->index();
            $table->string('password');
            $table->string('phone')->unique()->index();
            $table->string('language')->default('uk');
            $table->string('theme')->default('light');
            $table->rememberToken();
            $table->timestamps();
        });

        Artisan::call('db:seed --class=UserSeeder');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
