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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('news')->group(function(){
Route::get('create','newscontroller@create');
Route::post('store','newscontroller@store');
Route::get('/','newscontroller@index');
Route::get('edit/{id}','newscontroller@edit');
Route::post('update/{id}','newscontroller@update');
Route::get('del/{id}','newscontroller@destroy');
Route::post('do_login', 'newscontroller@do_login' );
Route::get('loginout', 'newscontroller@loginout' );
});

Route::prefix('admin_news')->group(function(){
Route::get('create','newsadmin@create');
Route::post('store','newsadmin@store');
Route::get('top','newsadmin@top');
Route::get('left','newsadmin@left');
Route::get('admin','newsadmin@admin');
Route::get('admin_add','newsadmin@admin_add');
Route::get('admin_list','newsadmin@admin_list');
Route::get('cate_add','newsadmin@cate_add');
Route::get('cate_list','newsadmin@cate_list');
Route::get('news_add','newsadmin@news_add');
Route::get('news_list','newsadmin@news_list');



Route::get('/','newsadmin@index');
Route::get('edit/{id}','newsadmin@edit');
Route::post('update/{id}','newsadmin@update');
Route::get('del/{id}','newsadmin@destroy');
Route::post('do_login', 'newsadmin@do_login' );
Route::get('loginout', 'newsadmin@loginout' );
});

Route::prefix('login')->group(function(){
Route::get('register','login@register');
Route::get('login','login@login');
Route::post('store','newscontroller@store');
});

