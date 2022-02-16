<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
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

Route::get('/', [ContactsController::class, 'index']);
Route::post('/', [ContactsController::class, 'index']);
Route::get('/confirm', [ContactsController::class, 'confirm']);
Route::post('/confirm', [ContactsController::class, 'confirm']);
//Route::get('/complete', [ContactsController::class, 'complete']);
Route::post('/complete', [ContactsController::class, 'complete']);
Route::get('/find', [ContactsController::class, 'find']);
Route::post('/find', [ContactsController::class, 'find']);
