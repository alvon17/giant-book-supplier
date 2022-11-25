<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'show']);

Route::get('/bookDetail/{id}', [BookController::class, 'findDetail']);

Route::get('/category/{id}', [BookController::class, 'findCategory']);

Route::get('/contact', [BookController::class, 'sendCategories']);

Route::get('/publisher', [BookController::class, 'showPublishers']);
