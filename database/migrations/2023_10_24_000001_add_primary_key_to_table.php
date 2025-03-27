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
        Schema::table('adsense', function (Blueprint $table) {
            $table->increments('id')->first();
        });

        Schema::table('area_region', function (Blueprint $table) {
            $table->dropPrimary(['shipping_area_id', 'region_id']);
            $table->increments('id')->first();
            $table->unique(['shipping_area_id', 'region_id']);
        });

        Schema::table('auto_manage', function (Blueprint $table) {
            $table->dropPrimary(['item_id', 'type']);
            $table->increments('id')->first();
            $table->unique(['item_id', 'type']);
        });

        Schema::table('cat_recommend', function (Blueprint $table) {
            $table->dropPrimary(['cat_id', 'recommend_type']);
            $table->increments('id')->first();
            $table->unique(['cat_id', 'recommend_type']);
        });

        Schema::table('exchange_goods', function (Blueprint $table) {
            $table->dropPrimary('goods_id');
            $table->increments('id')->first();
            $table->unique('goods_id');
        });

        Schema::table('goods_article', function (Blueprint $table) {
            $table->dropPrimary(['goods_id', 'article_id', 'admin_id']);
            $table->increments('id')->first();
            $table->unique(['goods_id', 'article_id']);
        });

        Schema::table('goods_cat', function (Blueprint $table) {
            $table->dropPrimary(['goods_id', 'cat_id']);
            $table->increments('id')->first();
            $table->unique(['goods_id', 'cat_id']);
        });

        Schema::table('goods_gallery', function (Blueprint $table) {
            $table->unsignedInteger('sort_order')->default(0)->after('img_original');
        });

        Schema::table('group_goods', function (Blueprint $table) {
            $table->dropPrimary(['parent_id', 'goods_id', 'admin_id']);
            $table->increments('id')->first();
            $table->unique(['parent_id', 'goods_id']);
        });

        Schema::table('keywords', function (Blueprint $table) {
            $table->dropPrimary(['date', 'searchengine', 'keyword']);
            $table->increments('id')->first();
            $table->unique(['date', 'searchengine', 'keyword']);
        });

        Schema::table('link_goods', function (Blueprint $table) {
            $table->dropPrimary(['goods_id', 'link_goods_id', 'admin_id']);
            $table->increments('id')->first();
            $table->unique(['goods_id', 'link_goods_id']);
        });

        Schema::table('package_goods', function (Blueprint $table) {
            $table->dropPrimary(['package_id', 'goods_id', 'admin_id', 'product_id']);
            $table->increments('id')->first();
            $table->unique(['package_id', 'goods_id', 'product_id']);
        });

        Schema::table('plugins', function (Blueprint $table) {
            $table->dropPrimary('code');
            $table->increments('id')->first();
            $table->unique('code');
        });

        Schema::table('reg_extend_info', function (Blueprint $table) {
            $table->renameColumn('Id', 'id');
        });

        Schema::table('searchengine', function (Blueprint $table) {
            $table->dropPrimary(['date', 'searchengine']);
            $table->increments('id')->first();
            $table->unique(['date', 'searchengine']);
        });

        Schema::table('stats', function (Blueprint $table) {
            $table->increments('id')->first();
        });

        Schema::table('template', function (Blueprint $table) {
            $table->increments('idx')->first();
        });

        Schema::table('topic', function (Blueprint $table) {
            $table->unsignedInteger('topic_id')->change();
        });

        Schema::table('volume_price', function (Blueprint $table) {
            $table->dropPrimary(['price_type', 'goods_id', 'volume_number']);
            $table->increments('id')->first();
            $table->unique(['price_type', 'goods_id', 'volume_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // TODO
    }
};
