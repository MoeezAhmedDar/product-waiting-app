<?php

use App\Http\Controllers\RuleController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/check-product-handle', [RuleController::class, 'checkProductHandle']);
Route::get('/register-customer', [CustomerController::class, 'register']);
Route::get('/login-customer', [CustomerController::class, 'login']);
