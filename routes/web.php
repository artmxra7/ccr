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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});
Route::prefix('admin')
    ->as('admin.')
    ->group(function() {

        Route::get('dashboard', 'Web\Admin\DashboardController@index')->name('dashboard');

        Route::get('daftar-artikel/json','Web\Admin\ArtikelController@json')->name('datatable_artikel');
        Route::get('daftar-artikel', 'Web\Admin\ArtikelController@index')->name('daftar.artikel');
        Route::get('buat-artikel', 'Web\Admin\ArtikelController@create')->name('artikel.create');
        Route::resource('buat-artikel', 'Web\Admin\ArtikelController');


        Route::resource('file-uploads', 'Web\Admin\Froala\FileUploadsController');
        Route::post('buat-artikel/file-uploads/uploads', 'Web\Admin\Froala\FileUploadsController@store');

        //artikel-kategori
        Route::get('artikel-kategori/json','Web\Admin\ArtikelCategoryController@json')->name('datatable_newscat');
        Route::resource('artikel-kategori', 'Web\Admin\ArtikelCategoryController');

        Route::get('artikel-kategori/hapus/{news_category}', 'Web\Admin\ArtikelCategoryController@hapus');
        Route::patch('artikel-kategori/confirm/{news_category}', 'Web\Admin\ArtikelCategoryController@confirm')->name('artikel-kategori.delete');


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

Route::get('/artikel', function () {
    return view('artikel');
});




