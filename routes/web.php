<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/', [FrontendController::class, 'home']);

Route::get('/', [FrontendController::class, 'accessForm']);
Route::get('/access-token', [FrontendController::class, 'accessToken']);
Route::get('/grant-token', [FrontendController::class, 'grantToken']);
Route::get('/get-the-question', [FrontendController::class, 'question']);
Route::get('/shortened-question', [FrontendController::class, 'shortenedQuestion']);
