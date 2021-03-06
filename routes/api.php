<?php

use Illuminate\Http\Request;

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

Route::post('auth/login', 'UserController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::post('article/create', 'ArticleController@create');
    Route::get('article/show', 'ArticleController@show');
    Route::put('article/update', 'ArticleController@update');
    Route::delete('article/delete', 'ArticleController@delete');
});
