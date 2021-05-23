<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ContactsController;


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

Route::get('/', 'TopController@index')->name('top');

Auth::routes();

// 確認ページ
Route::post('/confirm', 'ContactsController@confirm')->name('confirm');

// DB挿入、メール送信
Route::post('/process', 'ContactsController@process')->name('process');

// 完了ページ
Route::get('/complete', 'ContactsController@complete')->name('complete');

// 管理画面
Route::get('/admin', 'AdminTopController@showList')->name('admin');