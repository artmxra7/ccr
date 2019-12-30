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

if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}






    Route::get('/', 'Web\Admin\DefaultWebController@dashboard')->name('dashboard.guest');


    Route::get('/semua-artikel', 'Web\ArtikelController@index')->name('all_artikel');
    Route::get('/artikel_cek', 'Web\ArtikelController@artikelJson')->name('artikel_json');
    Route::get('/semua-artikel/load_data', 'Web\ArtikelController@index')->name('loadmore.load_data');



    Route::get('/artikel/bumn', 'Web\ArtikelController@bumn')->name('artikel.bumn');
    Route::get('/artikel/bumn/{id}', 'Web\ArtikelController@bumnShow');
    Route::get('/artikel/kampus', 'Web\ArtikelController@kampus')->name('artikel.kampus');
    Route::get('/artikel/kampus/{id}', 'Web\ArtikelController@kampusShow');






    Route::get('/artikel', 'Web\Admin\DefaultWebController@artikel')->name('artikel.guest');



    Route::get('/kontak-kami', 'Web\Admin\DefaultWebController@kontakKami');
    Route::get('/tentang-kami', 'Web\Admin\DefaultWebController@tentangKami');
    Route::get('/semua-pengaduan', 'Web\Admin\DefaultWebController@pengaduan');






    Route::post('/buat-laporan', 'Web\User\LaporanController@buatLaporan')->name('buatlaporan');
    Route::get('/buat-laporan/daftar', 'Web\User\LaporanController@register')->name('guest-daftar');
    Route::post('/buat-laporan/daftar', 'Web\User\LaporanController@postRegister')->name('guest-daftar.post');




Auth::routes();

Route::group(['middleware' => ['auth']], function () {



    // Route::get('/profile/{id}', 'Web\User\DashboardController@index')->name('home');
    // Route::resource('/profile', 'Web\User\ProfileController');
    Route::get('/profile', 'Web\User\ProfileController@index')->name('profile.users');
    Route::get('/profile/laporan/belum', 'Web\User\ProfileController@belum')->name('laporan.belum');
    Route::get('/profile/laporan/selesai', 'Web\User\ProfileController@selesai')->name('laporan.selesai');
    Route::post('/laporan', 'Web\User\LaporanController@postLaporan')->name('laporan');
    Route::get('/profile/{id}', 'Web\User\ProfileController@editProfile')->name('profile.edit');
    Route::get('/profile/update/{id}', 'Web\User\ProfileController@editPassword')->name('profile.password');
    Route::patch('/profile/update/password/{id}', 'Web\User\ProfileController@updatePassword')->name('profile.password.update');
    Route::patch('/profile/update/{id}', 'Web\User\ProfileController@updateProfile')->name('profile.update');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});


Route::prefix('admin')
    ->as('admin.')

    ->group(function () {

        //DASHBOARD
        Route::get('dashboard', 'Web\Admin\DashboardController@index')->name('dashboard');

        //AUTH
        Route::namespace('Web\Admin')
            ->group(function () {
                Route::get('login', 'AdminAuthController@showLoginAdmin')->name('login');
                Route::post('login', 'AdminAuthController@login')->name('login');
                Route::get('logout', 'AdminAuthController@logout')->name('logout');
            });

        Route::get('daftar-artikel/json', 'Web\Admin\ArtikelController@json')->name('datatable_artikel');
        Route::get('daftar-artikel', 'Web\Admin\ArtikelController@index')->name('daftar.artikel');
        Route::resource('buat-artikel', 'Web\Admin\ArtikelController');


        Route::resource('file-uploads', 'Web\Admin\Froala\FileUploadsController');
        Route::post('buat-artikel/file-uploads/uploads', 'Web\Admin\Froala\FileUploadsController@store');

        //artikel-kategori
        Route::get('artikel-kategori/json', 'Web\Admin\ArtikelCategoryController@json')->name('datatable_newscat');
        Route::resource('artikel-kategori', 'Web\Admin\ArtikelCategoryController');

        Route::get('artikel-kategori/hapus/{news_category}', 'Web\Admin\ArtikelCategoryController@hapus');
        Route::patch('artikel-kategori/confirm/{news_category}', 'Web\Admin\ArtikelCategoryController@confirm')->name('artikel-kategori.delete');


        //LAPORAN
        Route::get('laporan/json', 'Web\Admin\LaporanController@json')->name('datatable_laporan');

        Route::post('laporan/tanggapi-laporan/', 'Web\Admin\LaporanController@tanggapiLaporan')->name('tanggapi.laporan');

        Route::get('laporan/lihat-tanggapan/{id}', 'Web\Admin\LaporanController@lihatTanggapan')->name('laporan.selesai');


        Route::resource('laporan', 'Web\Admin\LaporanController');

        //LAPORAN KAMPUS
        Route::get('laporan-kampus/json', 'Web\Admin\LaporanKampusController@json')->name('datatable_laporan_kampus');
        Route::resource('laporan-kampus', 'Web\Admin\LaporanKampusController');

        //LAPORAN BUMN
        Route::get('laporan-bumn/json', 'Web\Admin\LaporanBumnController@json')->name('datatable_laporan_bumn');
        Route::resource('laporan-bumn', 'Web\Admin\LaporanBumnController');

        //USERS
        Route::get('data-users/json', 'Web\Admin\UserController@json')->name('datatable_users_data');
        Route::resource('data-users', 'Web\Admin\UserController');


        //ADMIN
        Route::get('data-admin/json', 'Web\Admin\AdminController@json')->name('datatable_admin_data');
        Route::resource('data-admin', 'Web\Admin\AdminController');
        Route::get('data-admin/hapus/', 'Web\Admin\AdminController@hapus');

        Route::resource('roles', 'Web\Admin\RoleController');

        Route::resource('web-settings', 'Web\Admin\WebsiteController');

        Route::resource('my-profile', 'Web\Admin\ProfilAdminController');
    });
