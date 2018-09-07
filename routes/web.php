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

Route::get('/', 'IndexController@index');
Route::get('layout', function () {
    return view('admin/layout');
});
Auth::routes();

Route::post('/message', 'IndexController@message');
Route::get('/index', 'IndexController@index')->name('index');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/login', 'AdminController@login')->name('login');
Route::get('/exit', 'AdminController@exit')->name('exit');
Route::get('/example', 'AdminController@example')->name('example');
Route::get('/message', 'AdminController@message')->name('message');
Route::get('/insert', 'AdminController@insert')->name('insert');
Route::get('/detail', 'AdminController@detail')->name('detail');
Route::get('/delete', 'AdminController@delete')->name('delete');
Route::get('/recovery', 'AdminController@recovery')->name('recovery');
Route::get('/edit', 'AdminController@edit')->name('edit');

Route::post('/insert', 'AdminController@insert')->name('insert_p');
Route::post('/login', 'AdminController@login')->name('login_ext');
Route::post('/info_ed', 'AdminController@info_ed')->name('info_ed');
Route::post('/edit', 'AdminController@edit');
