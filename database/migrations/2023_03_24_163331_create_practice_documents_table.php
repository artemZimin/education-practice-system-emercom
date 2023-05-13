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
        Schema::create('practice_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            название документа
            $table->string('name', 50);
//            вид документа
            $table->string('type', 50);
//            файл документа
            $table->binary('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practice_documents');
    }
};
