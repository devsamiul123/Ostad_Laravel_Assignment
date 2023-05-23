<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('/form_data', [MyController::class, 'myFunction']);

Route::get('/page', [MyController::class, 'myFunction2']);

Route::post('/json_response', [MyController::class, 'myFunction3']);

Route::post('/avatar', [MyController::class, 'uploadFile']);

Route::post('/cookie', [MyController::class, 'getCookie']);

Route::post('/submit/{email}', [MyController::class, 'myFunction4']);

