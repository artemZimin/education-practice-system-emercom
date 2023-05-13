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
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            название практики
            $table->string('name', 50);
//            вид практики
            $table->string('type', 20);
//            вид отчетности
            $table->string('type_of_reporting', 20);
//            продолжительность практики
            $table->integer('duration', false, true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practices');
    }
};
