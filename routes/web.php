<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [SiteController::class, 'index']);
Route::get('/article', [SiteController::class, 'article']);
Route::get('/article/{slug}', [SiteController::class, 'singleArticle']);
Route::get('/about', [SiteController::class, 'about']);

Route::get('/dashboard', [DashboardController::class, 'index']);
