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

Route::get('/', 'Front\HomeController@index')->name('front.home');
Route::get('about', 'Front\HomeController@about')->name('front.about');
Route::group(['prefix' => 'restaurants'], function() {
    Route::get('menu', 'Front\HomeController@menu')->name('front.menu');
	Route::get('beverages', 'Front\HomeController@beverages')->name('front.beverages');
});
Route::group(['prefix' => 'accommodation'], function() {
    Route::get('executive', 'Front\HomeController@executive')->name('front.executive');
	Route::get('super-deluxe', 'Front\HomeController@superDelux')->name('front.super-deluxe');
});
Route::group(['prefix' => 'events'], function() {
	Route::get('birthday-celebration', 'Front\HomeController@birthday')->name('front.birthday-celebration');
    Route::get('kitty-party', 'Front\HomeController@kitty')->name('front.kitty-party');
	Route::get('wedding-function', 'Front\HomeController@wedding')->name('front.wedding-function');
	Route::get('anniversary-celebration', 'Front\HomeController@anniversary')->name('front.anniversary-celebration');
	Route::get('business-meeting', 'Front\HomeController@business')->name('front.business-meeting');
	Route::get('gallery', 'Front\HomeController@gallery')->name('front.gallery');
	Route::get('other-evets', 'Front\HomeController@other')->name('front.other-evets');	
});
Route::get('booking', 'Front\BookingController@index')->name('front.booking');
Route::get('booking/check', 'Front\BookingController@index')->name('front.booking.avibility');
Route::post('booking/request', 'Front\BookingController@store')->name('front.booking.request.post');
Route::get('contact', 'Front\ContactController@index')->name('front.contact');
Route::post('contact/mail', 'Front\ContactController@store')->name('front.contact.post');

Route::group(['prefix' => 'd2m-admin'], function() {
    Route::get('/', 'Auth\LoginController@index')->name('admin.home');
	Route::get('auth', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('authenticate', 'Auth\LoginController@login')->name('admin.login.post');
	Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout.get');

   	Route::get('password/forget-password', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.forgot');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.forgetPassword.post');    
    // seller reset password routes
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.reset.post');
    
    });

 
