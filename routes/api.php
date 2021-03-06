<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/allfetch',[QualificationController::class, 'allfetch'])->name('apiall');

Route::get('/qualis', function () {
    return new QualificationResource(Qualification::all());
})->name('qualis');


Route::get('/qualis/{id}', function ($id) {
    return new QualificationResource(Qualification::findOrFail($id));
})->name('quali');
