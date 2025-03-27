<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('auction_log', 'activity_auction');
        Schema::rename('bonus_type', 'activity_bonus');
        Schema::rename('exchange_goods', 'activity_exchange');
        Schema::rename('group_goods', 'activity_group');
        Schema::rename('package_goods', 'activity_package');
        Schema::rename('snatch_log', 'activity_snatch');
        Schema::rename('favourable_activity', 'activity');
        Schema::rename('topic', 'activity_topic');
        Schema::rename('wholesale', 'activity_wholesale');
        Schema::rename('adsense', 'ad_adsense');
        Schema::rename('email_list', 'email_subscriber');
        Schema::rename('email_sendlist', 'email_send');
        Schema::rename('mail_templates', 'email_template');
        Schema::rename('brand', 'goods_brand');
        Schema::rename('cat_recommend', 'goods_cat_recommend');
        Schema::rename('category', 'goods_category');
        Schema::rename('link_goods', 'goods_link_goods');
        Schema::rename('member_price', 'goods_member_price');
        Schema::rename('products', 'goods_product');
        Schema::rename('attribute', 'goods_type_attribute');
        Schema::rename('virtual_card', 'goods_virtual_card');
        Schema::rename('volume_price', 'goods_volume_price');
        Schema::rename('back_goods', 'order_back_goods');
        Schema::rename('back_order', 'order_back_order');
        Schema::rename('delivery_goods', 'order_delivery_goods');
        Schema::rename('delivery_order', 'order_delivery_order');
        Schema::rename('pay_log', 'order_pay');
        Schema::rename('searchengine', 'search_engine');
        Schema::rename('keywords', 'search_keywords');
        Schema::rename('area_region', 'shipping_area_region');
        Schema::rename('agency', 'shop_agency');
        Schema::rename('card', 'shop_card');
        Schema::rename('crons', 'shop_cron');
        Schema::rename('error_log', 'shop_error_log');
        Schema::rename('friend_link', 'shop_friend_link');
        Schema::rename('nav', 'shop_nav');
        Schema::rename('pack', 'shop_pack');
        Schema::rename('plugins', 'shop_plugins');
        Schema::rename('region', 'shop_region');
        Schema::rename('stats', 'shop_stats');
        Schema::rename('auto_manage', 'shop_auto_manage');
        Schema::rename('suppliers', 'supplier');
        Schema::rename('users', 'user');
        Schema::rename('reg_extend_info', 'user_extend_info');
        Schema::rename('reg_fields', 'user_extend_fields');
        Schema::rename('affiliate_log', 'user_affiliate');
        Schema::rename('booking_goods', 'user_booking');
        Schema::rename('cart', 'user_cart');
        Schema::rename('collect_goods', 'user_collect');
        Schema::rename('tag', 'user_tag');
        Schema::rename('account_log', 'user_account_log');
        Schema::rename('role', 'admin_role');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // TODO
    }
};
