<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;//ホームコントローラー
use App\Http\Controllers\BoardController;//ボードコントローラー
use App\Http\Controllers\ArticleController;//記事のコントローラー


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


// Route::get('/', function () {
//     return view('welcome');
// });

//ホーム
Route::get('/',[HomeController::class, 'show'])->name('home');

//掲示板
Route::get('/board',[BoardController::class, 'show'])->name('board');

//投稿記事
Route::get('/article',[ArticleController::class, 'show'])->name('article');

// Route::get('/board',[BoardController::class, 'show'])->name('board');


