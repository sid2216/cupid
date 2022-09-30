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

Auth::routes();
Route::group(['middleware' => ['auth','admin']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/user_login','App\Http\Controllers\UserController@user_login')->name('userlogin');
Route::post('/user_reg','App\Http\Controllers\UserController@user_register')->name('userreg');

Route::get('/', function () {
    return view('matindex');
})->name('/');
Route::get('/signout','App\Http\Controllers\UserController@signOut')->name('signout');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/userdashboard', 'App\Http\Controllers\UserController@list_matching')->name('userdashboard');
});
Route::get('/google', 'App\Http\Controllers\UserController@redirectToGoogle')->name('google');

Route::get('/google/callback', 'App\Http\Controllers\UserController@handleGoogleCallback')->name('googlecallback');
//admin section route


