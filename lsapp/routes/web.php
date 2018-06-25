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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

// Route::post('/register', 'Auth/RegisterController@register');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('google', function () {
    return view('googleAuth');
});
Route::get('auth/google', 'Auth\LoginController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::view('/verified', 'pages.verified');
