<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TxtController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saved', function () {
    return view('savedtxt');
});

Route::post('/', [TxtController::class, 'store']);
Route::get('/saved', [TxtController::class, 'retrieve']);
Route::post('/saved', [TxtController::class, 'manage']);
Route::post('/saved/{id}', [TxtController::class, 'update']);