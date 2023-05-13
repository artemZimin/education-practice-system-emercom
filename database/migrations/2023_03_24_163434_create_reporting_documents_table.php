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
        Schema::create('reporting_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            Название ДО
            $table->string('name', 50);
//            Файл ДО
            $table->binary('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporting_documents');
    }
};
