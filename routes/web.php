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

Route::get('/', 'Livros\LivrosController@home')->name('home');
Route::get('/home', 'Livros\LivrosController@home')->name('home');
Route::get('/sobre', 'Livros\LivrosController@sobre')->name('sobre');

Auth::routes();

Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');

Route::resource('/livro', 'Livros\LivrosController');