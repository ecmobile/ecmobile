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
        Schema::create('keywords', function (Blueprint $table) {
            $table->date('date')->default('1970-01-01');
            $table->string('searchengine', 20)->default('');
            $table->string('keyword', 90)->default('');
            $table->unsignedInteger('count')->default(0);

            $table->primary(['date', 'searchengine', 'keyword']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keywords');
    }
};
