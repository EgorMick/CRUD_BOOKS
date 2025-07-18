<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('likes'); // Удаляем колонку likes
            $table->string('image')->after('description'); // Добавляем image после description
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->integer('likes')->default(0); // Восстанавливаем likes
            $table->dropColumn('image'); // Удаляем image при откате
        });
    }
};
