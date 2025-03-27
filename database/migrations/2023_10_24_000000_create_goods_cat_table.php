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
        Schema::create('goods_cat', function (Blueprint $table) {
            $table->unsignedInteger('goods_id')->default(0);
            $table->unsignedInteger('cat_id')->default(0);

            $table->primary(['goods_id', 'cat_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods_cat');
    }
};
