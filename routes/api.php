<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycartController;
use App\Http\Controllers\Myusercontroller;



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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/addcart', [mycartController::class, 'createCart']);

Route::get('/removecart/{id}', [mycartController::class, 'destroyCart']);

Route::post('/addproduct', [mycartController::class, 'createProduct']);

Route::get('/getproduct', [mycartController::class, 'readProduct']); 


Route::post('/sendsms', [mycartController::class, 'createSms']);

Route::get('/deletesms/{id}', [mycartController::class, 'destroySMS']);

Route::post('/sendorder/{id}', [mycartController::class, 'createOrder']);


Route::post('/register', [Myusercontroller::class, 'registration']);

Route::post('/login', [Myusercontroller::class, 'login']);

Route::get('/login', [Myusercontroller::class, 'login']);




