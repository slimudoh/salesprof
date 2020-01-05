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

;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about-us', 'HomeController@about')->name('about');

Route::get('/our-services', 'HomeController@services')->name('services');

Route::get('/our-logistics', 'HomeController@training')->name('training');

Route::get('/contact-us', 'HomeController@contact')->name('contact');

Route::post('/sent-mail', 'HomeController@mail')->name('sendmail');

Route::get('/success-mail', 'HomeController@success')->name('mailsuccess');

Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
