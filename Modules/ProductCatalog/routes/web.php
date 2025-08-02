<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductCatalog\Http\Controllers\ProductCatalogController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('productcatalogs', ProductCatalogController::class)->names('productcatalog');
});
