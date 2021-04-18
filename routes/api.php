<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ApiAuthController;
use App\Http\Controllers\ArticleController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['cors', 'json.response']], function () {
    // public routes
    Route::post('/login', [ApiAuthController::class,'login'])->name('login.api');
    Route::post('/register', [ApiAuthController::class, 'register'])->name('register.api');

});

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');

    Route::post('/articles/store', [ArticleController::class, 'store'])->middleware('api.admin');

    Route::put('/article/{id}/edit', [ArticleController::class, 'update'])->middleware('api.admin');

    Route::delete('/article/{id}/delete', [ArticleController::class, 'destroy'])->middleware('api.admin');
    // Route::get('/articles', 'ArticleController@index')->middleware('api.admin')->name('articles');
    Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout.api');
});