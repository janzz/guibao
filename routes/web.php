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

Route::namespace('Home')->group(function () {

    Route::get('/', 'LoginController@login')->name('login.login');
    Route::get('/login', 'LoginController@login')->name('login.login');
    Route::post('/register', 'LoginController@register')->name('login.register');
    Route::post('/verifyLogin', 'LoginController@verifyLogin')->name('login.verifyLogin');
    Route::get('/main', 'LoginController@main')->name('login.main');

});
