<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;//ホームコントローラー
use App\Http\Controllers\BoardController;//ボードコントローラー
use App\Http\Controllers\ArticleController;//記事のコントローラー
use App\Http\Controllers\QualificationController;//資格一覧のコントローラー
use App\Http\Controllers\ExperienceController;//体験談のコントローラー
use App\Http\Controllers\PostformController;//投稿のコントローラー
use App\Http\Controllers\ContactController;//お問い合わせのコントローラー


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
//掲示板一覧
Route::get('/trial', function () {
    return view('trial');
});

// //いいね機能
// Route::get('/reply/like/{id}', 'RepliesController@like')->name('reply.like');
// //言いを外す
// Route::get('/reply/unlike/{id}', 'RepliesController@unlike')->name('reply.unlike');

//資格一覧
Route::get('/qualifications',[QualificationController::class, 'show'])->name('qualis');

//資格個別 多分いらない気がする・・・
Route::get('/qualification/{id}',[QualificationController::class,'Individual'])->name('quali');

//体験談
Route::get('/experiences',[ExperienceController::class, 'Reports'])->name('reports');
//体験談個別一覧
Route::get('/experiences/{id}',[ExperienceController::class, 'showList'])->name('experiences');
//体験談個別
Route::get('/experience/{id}/{qualiexp_id}',[ExperienceController::class, 'show'])->name('experience');

//体験談投稿ページ
Route::get('/postform',[PostformController::class, 'postform'])->name('postform');
//体験談投稿する
Route::post('/postform',[PostformController::class, 'posting'])->name('postform');

//投稿記事
Route::get('/article',[ArticleController::class, 'show'])->name('article');

//お問い合わせ
Route::get('/contact',[ContactController::class, 'form'])->name('contact');
//送信
Route::post('/contact/done',[ContactController::class, 'send'])->name('contact.send');

//認証機能？
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('mypage');
})->name('mypage');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
