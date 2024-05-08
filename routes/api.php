<?php

use App\Http\Controllers\Api\ProductControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// products
Route::prefix('v1')->group(function(){
    Route::get('/products', [ProductControllerApi::class, 'index']);
});
