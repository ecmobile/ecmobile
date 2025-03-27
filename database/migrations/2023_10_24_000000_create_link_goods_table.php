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
        Schema::create('link_goods', function (Blueprint $table) {
            $table->unsignedInteger('goods_id')->default(0);
            $table->unsignedInteger('link_goods_id')->default(0);
            $table->unsignedTinyInteger('is_double')->default(0);
            $table->unsignedTinyInteger('admin_id')->default(0);

            $table->primary(['goods_id', 'link_goods_id', 'admin_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_goods');
    }
};
