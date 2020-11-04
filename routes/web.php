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
Route::get('/board/{id}',[BoardController::class, 'show'])->name('board');
//掲示板投稿
Route::post('/boardadd',[BoardController::class, 'add'])->name('boardadd');

//いいね機能
Route::get('/reply/like/{id}', 'RepliesController@like')->name('reply.like');
//言いを外す
Route::get('/reply/unlike/{id}', 'RepliesController@unlike')->name('reply.unlike');

//資格一覧
Route::get('/qualifications',[QualificationController::class, 'show'])->name('qualis');

//資格個別
Route::get('/qualification/{id}',[QualificationController::class,'Individual'])->name('quali');

//体験談一覧
Route::get('/experiences/{id}',[ExperienceController::class, 'showList'])->name('experiences');

//体験談個別
Route::get('/experience/{id}/{qualiexp_id}',[ExperienceController::class, 'show'])->name('experience');

//体験談投稿ページ
Route::get('/postform',[PostformController::class, 'postform'])->name('postform');
//体験談投稿する
Route::post('/postform',[PostformController::class, 'posting'])->name('postform');

//投稿記事
Route::get('/article',[ArticleController::class, 'show'])->name('article');

//認証機能？
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
