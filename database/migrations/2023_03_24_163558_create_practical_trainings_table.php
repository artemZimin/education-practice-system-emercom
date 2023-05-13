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
        Schema::create('practical_trainings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            ДО практики
            $table->date('do');
//            оценка за практику
            $table->integer('assessment', false, true);
//            дата защиты практики
            $table->date('date_of_protection');
//            ФИО РО
            $table->string('ro_full_name', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practical_trainings');
    }
};
