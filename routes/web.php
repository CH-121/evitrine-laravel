<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'VitrineController@index' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/categorie/save','CategorieController@save')->name('save');
Route::get('/categorie/edit/{id}','CategorieController@edit')->name('categorie.edit');
Route::put('/categorie/update/{id}','CategorieController@update')->name('categorie.update');
Route::get('/categories','CategorieController@index');
Route::get('/categories','CategorieController@list');
Route::get('categorie/delete/{id}','CategorieController@delete')->name('categorie.delete');


Route::get('article/edit/{id}','ArticleController@edit')->name('article.edit');
Route::post('/save','ArticleController@save')->name('article.save');
Route::get('/articles','ArticleController@index');
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles','ArticleController@list');
Route::put('/update/{id}','ArticleController@update')->name('article.update');
Route::get('/delete/{id}', 'ArticleController@delete')->name('article.delete');


Route::get('/vitrine', 'VitrineController@index')->name('vitrine');

Route::get('/article/{id}/detail','VitrineController@detail');

Route::get('/articles/categorie/{id}','VitrineController@articles');


