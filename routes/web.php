<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', 'ArticleController@showArticle')->name('home');

Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::get('/read/{id}','ArticleController@readArticle')->name('readArticle');
Route::get('/article', 'ArticleController@index')->name('article');

Route::get('/article/edit/{id}', 'ArticleController@editArticle')->name('editArticle');

Route::post('/updateArticle', 'ArticleController@updateArticle')->name('updateArticle');


Route::get('/article/add', 'ArticleController@addArticle')->name('addArticle');
Route::post('/article/addArticleProses', 'ArticleController@addArticleProses')->name('addArticleProses');

Route::get('/article/delete/{id}', 'ArticleController@deleteArticle')->name('deleteArticle');


