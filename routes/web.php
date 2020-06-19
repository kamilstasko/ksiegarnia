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

Auth::routes(['verify' => true]);

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin@index')->name('admin.dashboard');
    Route::get('dashboard', 'Admin@index')->name('admin.dashboard');
    Route::get('show/{slug}', 'Admin@show')->name('admin.show');
    Route::get('edit/{slug}/{slug2}', 'Admin@edit')->name('admin.edit');
    Route::get('add/{slug}', 'Admin@add')->name('admin.add');
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
    Route::post('edit', 'Admin@edit_save')->name('admin.edit');
    Route::post('add', 'Admin@add_save')->name('admin.add');
});

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@index']);

Route::prefix('cart')->group(function () {
    Route::get('view', 'Pages\Cart@index');
    Route::post('summary', 'Pages\Cart@form');
    Route::post('save', 'Pages\Cart@save');
});

Route::prefix('client')->group(function () {
    Route::get('{slug}', 'Pages\Client@index')->middleware('auth');
    Route::post('edit', 'Pages\Client@edit')->name('client.edit')->middleware('auth');
    Route::post('change-password', 'Pages\Client@change_password')->name('client.change_password')->middleware('auth');
    Route::post('updateRate', 'Pages\Client@updateRate')->middleware('auth');
});

Route::prefix('product')->group(function () {
    Route::get('{slug}', 'Pages\Product@index');
    Route::get('{slug}/{slug2?}', 'Pages\Product@index');
    Route::get('{slug}/{slug2}/{slug3}/{slug4?}', 'Pages\Product@item');
    Route::post('item', 'Pages\Product@changeItem');
    Route::post('addToCart', 'Pages\Product@addToCart');
});

Route::get('/statement/{slug}', 'Pages\StatementController@index');

Route::prefix('contact')->group(function () {
    Route::get('/', 'Forms\Contact@create')->name('contact.create');
    Route::post('/', 'Forms\Contact@store')->name('contact.store');
});

Route::get('/', 'Pages\Homepage@index')->name('homepage');
Route::get('/{slug?}', 'Pages\Pages@index');
