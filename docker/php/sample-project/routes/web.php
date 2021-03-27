<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

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


Route::get('/', [MathController::class, 'index']);
Route::get('/add', [MathController::class, 'add_index']);
Route::post('/add', [MathController::class, 'add_result']);