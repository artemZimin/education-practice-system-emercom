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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            ФИО студента
            $table->string('student_full_name', 50);
//            серия паспорта
            $table->integer('passport_series', false, true);
//            номер паспорта
            $table->integer('passport_number', false, true);
//            дата рождения
            $table->date('birth_date');
//            место выдачи паспорта
            $table->string('place_of_issue_of_the_passport', 150);
//            дата выдачи паспорта
            $table->date('date_of_issue_of_the_passport');
//            номер зачётной книжки
            $table->integer('credit_card_number', false, true);
//            номер мобильного телефона
            $table->string('phone_number', 20);
//            пол студента
            $table->string('gender', 20);
//            адрес студента
            $table->string('address', 150);
//            почта студента
            $table->string('email', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
