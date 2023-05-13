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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            ФИО педагога
            $table->string('full_name', 50);
//            дата рождения педагога
            $table->date('birth_date');
//            номер телефона педагога
            $table->string('phone_number', 20);
//            адрес педагога
            $table->string('address', 150);
//            почта педагога
            $table->string('email', 100);
//            ученая степень педагога
            $table->string('academic_degree', 20);
//            ученое звание педагога
            $table->string('academic_title', 20);
//            стаж работы педагога
            $table->string('work_experience', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
