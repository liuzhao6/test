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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signUp', 'UsersController@create')->name('signUp');//注册view

//show =>[get,个人中心] store=>[post,注册post]
// edit[get,编辑个人信息] update => [post,更新个人信息post]
Route::resource('users', 'UsersController');


Route::get('/login', 'SessionController@create')->name('login');//登录view
Route::post('/login', 'SessionController@store')->name('login');//登录post请求
Route::delete('/logout', 'SessionController@destroy')->name('logout');//退出
