<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            название организации
            $table->string('name', 150);
//            адрес организации
            $table->string('address', 150);
//            номер телефона организации
            $table->string('phone_number', 20);
//            почта организации
            $table->string('email', 150);
//            Фио руководителя
            $table->string('director_full_name', 50);
//            Реквизиты организации
            $table->string('requisites', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
