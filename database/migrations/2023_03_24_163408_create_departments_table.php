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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            номер кафедры
            $table->integer('number', false, true);
//            название кафедры
            $table->string('name', 150);
//            ФИО руководителя
            $table->string('director_full_name', 50);
//            телефон руководителя
            $table->string('director_phone_number', 20);
            $table->foreignId('faculty_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
