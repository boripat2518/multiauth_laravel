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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin/')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
});

Route::prefix('merchant/')->group(function() {
  Route::get('/login', 'Auth\MerchantLoginController@showLoginForm')->name('merchant.login');
  Route::post('/login', 'Auth\MerchantLoginController@login')->name('merchant.login.submit');
  Route::get('/', 'MerchantController@index')->name('merchant.dashboard');
  Route::get('/logout', 'Auth\MerchantLoginController@merchantLogout')->name('merchant.logout');
});
