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


 // contact

Route::get('contact/create' , 'ContactController@create')->name('admin.contact.create');
Route::post('contact/create' , 'ContactController@store')->name('admin.contact.store');




Route::group(['prefix' => 'admin'], function () {
    Route::get('base', 'panel\PostsController@create')->name('admin.create');
    Route::get('post/create', 'panel\PostsController@form')->name('admin.post');
    Route::post('post/create', 'panel\PostsController@store')->name('admin.store');
    Route::get('post/list', 'panel\PostsController@list')->name('admin.list');
    Route::get('destroy/{post_id}', 'panel\PostsController@delete')->name('admin.delete');
    Route::get('edit/{post_id}', 'panel\PostsController@edit')->name('admin.edit');
    Route::post('edit/{post_id}', 'panel\PostsController@update')->name('admin.update');

    //contacts
    Route::get('contact/list' , 'ContactController@list')->name('admin.contact.list');
    Route::get('contact/delete/{contact_id}' , 'ContactController@destroy')->name('admin.contact.destroy');


});


// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');



Route::get('/home', 'HomeController@index')->name('home');
