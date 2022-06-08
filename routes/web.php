<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\DB;

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
//$articles = Article::all();

/* List of all posts */
Route::get('/posts', [ArticlesController::class, 'articlesList']);

Route::get('/posts/{code}', [ArticlesController::class, 'articleCode']);


Route::get('/', function () {
    return view('welcome');
});