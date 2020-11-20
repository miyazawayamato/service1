<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;//ホームコントローラー
use App\Http\Controllers\BoardController;//ボードコントローラー
use App\Http\Controllers\ArticleController;//記事のコントローラー
use App\Http\Controllers\QualificationController;//資格一覧のコントローラー
use App\Http\Controllers\ExperienceController;//体験談のコントローラー
use App\Http\Controllers\PostformController;//投稿のコントローラー
use App\Http\Controllers\ContactController;//お問い合わせのコントローラー
use App\Http\Controllers\RepliesController;//いいねのコントローラー
use App\Http\Controllers\ExpLikesController;//いいねのコントローラー
use App\Http\Controllers\MypageController;//編集のコントローラー


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
Route::get('/reply/like/{id}', [RepliesController::class, 'like'])->name('reply.like');
// //言いを外す
Route::get('/reply/unlike/{id}', [RepliesController::class, 'unlike'])->name('reply.unlike');
// //体験いいね機能
Route::get('/exp/like/{id}', [ExpLikesController::class, 'like'])->name('exp.like');
// //体験言いを外す
Route::get('/exp/unlike/{id}', [ExpLikesController::class, 'unlike'])->name('exp.unlike');

//資格一覧
Route::get('/qualifications',[QualificationController::class, 'show'])->name('qualis');

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

//認証機能 マイページへ
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[MypageController::class, 'show'])->name('dashboard');
    //編集ページ
    Route::get('/dashboard/edit/{id}',[MypageController::class, 'edit'])->name('edit');
    //編集実行メソッド
    Route::post('/dashboard/edit/{id}/update',[MypageController::class, 'update'])->name('edit.update');
    //削除
    Route::post('/dashboard/edit/{id}/delete',[MypageController::class, 'delete'])->name('edit.delete');
});



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');