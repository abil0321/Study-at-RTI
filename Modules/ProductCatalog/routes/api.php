<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductCatalog\Http\Controllers\ProductCatalogController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('productcatalogs', ProductCatalogController::class)->names('productcatalog');
});
