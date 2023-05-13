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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            Номер факультета
            $table->integer('faculty_number', false, true);
//            Название факультета
            $table->string('faculty_name', 50);
//            ФИО Декана
            $table->string('dean_full_name', 50);
//            Телефон декана
            $table->string('dean_phone_number', 20);
//            Фио ЗУП
            $table->string('zup_full_name', 50);
//            Телефон ЗУП
            $table->string('zup_phone_number', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
