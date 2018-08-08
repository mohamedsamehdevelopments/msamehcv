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

Route::get('/', 'DisplayController@show');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin-login', 'AdminAccountController@admin_login')->name('admin-login');
Route::post('/admin-login', 'AdminAccountController@admin_auth');

Route::get('/admin-register', 'AdminAccountController@admin_register')->name('admin-register');
Route::post('/admin-register', 'AdminAccountController@store_admin_data');

Route::get('/dashboard', 'AdminAccountController@dashboard');
Route::post('/dashboard', 'AdminAccountController@admin_personal_data');

Route::get('/logout', 'AdminAccountController@logout');