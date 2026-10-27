<?php

use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PayrollController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/payroll', [HumanResourceController::class, 'payroll']);
Route::post('/payroll/calculate', [HumanResourceController::class, 'calculate']);   
Route::post('/products', [ProductController::class, 'product']);
