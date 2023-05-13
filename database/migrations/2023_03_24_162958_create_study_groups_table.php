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
        Schema::create('study_groups', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            номер группы
            $table->integer('group_number', false, true);
//            ФИО старосты
            $table->string('headman_full_name', 50);
//            телефон старосты
            $table->string('headman_phone_number', 20);
//            курс
            $table->integer('course', false, true);
            $table->foreignId('faculty_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_groups');
    }
};
