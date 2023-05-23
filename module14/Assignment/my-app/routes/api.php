<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/form_data', [MyController::class, 'myFunction']);

Route::get('/page', [MyController::class, 'myFunction2']);

Route::post('/json_response', [MyController::class, 'myFunction3']);

Route::post('/avatar', [MyController::class, 'uploadFile']);

Route::post('/cookie', [MyController::class, 'getCookie']);

Route::post('/submit/{email}', [MyController::class, 'myFunction4']);

