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
Route::prefix('login')->group(function (){
   Route::get('/', 'LoginController@showLogin')->name('login.show');
   Route::post('login', 'LoginController@login')->name('user.login');
   Route::get('/blog', 'BlogController@showBlog')->name('show.blog');
   Route::get('/logout', 'LogoutController@logout')->name('user.logout');
});