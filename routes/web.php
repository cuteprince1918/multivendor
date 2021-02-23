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

Route::get('/', function () {
return view('welcome');
});
//Admin Login
Route::match(['get', 'post'], 'admin-login', ['as' => 'admin-login', 'uses' => 'App\Http\Controllers\admin\LoginController@adminlogin']);
Route::match(['get', 'post'], 'admin-logout', ['as' => 'admin-logout', 'uses' => 'App\Http\Controllers\admin\LoginController@getLogout']);

$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'App\Http\Controllers\admin\DashboardController@dashboard']);
});
