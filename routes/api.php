<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;//お問い合わせのコントローラー
use App\Http\Controllers\QualificationController;//資格一覧のコントローラー
use App\Http\Resources\Qualification as QualificationResource;//リソースをリネーム
use App\Models\Qualification;//資格一覧のモデル


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/qualis', function () {
    return QualificationResource::collection(Qualification::all());
})->name('qualis');


Route::get('/quali/{id}', function ($id) {
    return new QualificationResource(Qualification::findOrFail($id));
})->name('quali');

Route::post('/contact',[ContactController::class, 'send'])->name('api.contact');
