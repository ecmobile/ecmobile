<?php

// ==========================================================================
// Code generated by gen:route CLI tool. DO NOT EDIT.
// ==========================================================================

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Route start
Route::prefix('admin')->group(function () {
    // 首页
    Route::get('', [\App\Api\Admin\Controllers\IndexController::class, 'index']);
});
// end
