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


Route::get('/profile/{id}', 'Web\User\DashboardController@index');



Auth::routes();

Route::group(['middleware' => ['auth']], function () {

Route::get('/profile/{id}', 'Web\User\DashboardController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

});

// ADMIN


Route::prefix('admin')
    ->as('admin.')
    ->group(function() {

        Route::get('dashboard', 'Web\Admin\DashboardController@index')->name('dashboard');
        Route::namespace('Web\Admin')
            ->group(function() {
                Route::get('login', 'AdminAuthController@showLoginAdmin')->name('login');
                Route::post('login', 'AdminAuthController@login')->name('login');
                Route::get('logout', 'AdminAuthController@logout')->name('logout');
        });

});

Route::get('/pengaduan', function () {
    return view('pengaduan');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




