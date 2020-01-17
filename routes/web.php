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

Route::prefix('news')->middleware('dologin')->group(function(){
Route::get('commit/{id}','newscontroller@commit');
Route::get('create','newscontroller@create');
Route::post('store','newscontroller@store');
Route::get('/','newscontroller@index');
Route::get('edit/{id}','newscontroller@edit');
Route::post('update/{id}','newscontroller@update');
Route::get('del/{id}','newscontroller@destroy');
Route::post('do_login', 'newscontroller@do_login' );
Route::get('loginout', 'newscontroller@loginout' );
});

Route::prefix('admin_news')->middleware('checklogin')->group(function(){
Route::get('create','newsadmin@create');
Route::post('store','newsadmin@store');
Route::get('top','newsadmin@top');
Route::get('left','newsadmin@left');
Route::get('admin','newsadmin@admin');
Route::get('admin_add','newsadmin@admin_add');
Route::post('admin_add_do','newsadmin@admin_add_do');
Route::get('admin_del/{id}','newsadmin@admin_destroy');
Route::get('admin_edit/{id}','newsadmin@admin_edit');
Route::post('admin_update/{id}','newsadmin@admin_update');
Route::get('admin_list','newsadmin@admin_list');
Route::get('cate_add','newsadmin@cate_add');
Route::post('cate_add_do','newsadmin@cate_add_do');
Route::get('cate_list','newsadmin@cate_list');
Route::get('cate_del/{id}','newsadmin@cate_destroy');
Route::get('cate_edit/{id}','newsadmin@cate_edit');
Route::post('cate_update/{id}','newsadmin@cate_update');
Route::get('news_add','newsadmin@news_add');
Route::get('news_list','newsadmin@news_list');
Route::post('news_add_do','newsadmin@news_store');
Route::get('news_del/{id}','newsadmin@news_destroy');
Route::get('news_edit/{id}','newsadmin@news_edit');
Route::post('news_update/{id}','newsadmin@news_update');
Route::get('/','newsadmin@index');
Route::get('edit/{id}','newsadmin@edit');
Route::post('update/{id}','newsadmin@update');
Route::get('del/{id}','newsadmin@destroy');
});
Route::prefix('admin_login')->group(function(){
Route::get('login','newsadmin@login');
Route::post('do_login', 'newsadmin@do_login' );
Route::get('loginout', 'newsadmin@loginout' );

});

Route::prefix('login')->group(function(){
Route::get('register','login@register');
Route::post('register_do','login@register_do');
Route::get('login','login@login');
Route::post('do_login','login@do_login');
Route::get('login','login@login');

Route::post('store','newscontroller@store');
});

