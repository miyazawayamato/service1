<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;//ホームコントローラー
use App\Http\Controllers\BoardController;//ボードコントローラー
use App\Http\Controllers\ArticleController;//記事のコントローラー
use App\Http\Controllers\QualificationController;//資格一覧のコントローラー
use App\Http\Controllers\ExperienceController;//体験談のコントローラー
use App\Http\Controllers\PostformController;//投稿のコントローラー


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
//     return view('trial');
// });

//ホーム
Route::get('/',[HomeController::class, 'show'])->name('home');

//掲示板
Route::get('/board',[BoardController::class, 'show'])->name('board');

Route::get('/boardadd',[BoardController::class, 'add'])->name('boardadd');

//投稿記事
Route::get('/article',[ArticleController::class, 'show'])->name('article');

//資格一覧
Route::get('/qualifications',[QualificationController::class, 'show'])->name('qualis');

//資格個別
Route::get('/qualification',[QualificationController::class,
'Individual'])->name('quali');

//体験談
Route::get('/experience',[ExperienceController::class, 'show'])->name('experience');


Route::get('/postform',[PostformController::class, 'postform'])->name('postform');



