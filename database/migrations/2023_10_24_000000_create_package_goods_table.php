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
        Schema::create('package_goods', function (Blueprint $table) {
            $table->unsignedInteger('package_id')->default(0);
            $table->unsignedInteger('goods_id')->default(0);
            $table->unsignedInteger('product_id')->default(0);
            $table->unsignedInteger('goods_number')->default(1);
            $table->unsignedTinyInteger('admin_id')->default(0);

            $table->primary(['package_id', 'goods_id', 'admin_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_goods');
    }
};
