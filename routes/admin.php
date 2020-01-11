<?php

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
// Route::get('booking', 'BookingController@index')->name('admin.booking');
Route::group(['prefix' => 'booking'], function() {
    Route::get('/', 'BookingRequestController@index')->name('admin.booking.list');
	Route::get('{bookingRequest}/view', 'BookingRequestController@show')->name('admin.booking.view');
	Route::get('{bookingRequest}/delete', 'BookingRequestController@destroy')->name('admin.booking.delete');
});
Route::group(['prefix' => 'contact'], function() {
    Route::get('/', 'ContactController@index')->name('admin.contact.list');
    Route::get('{contact}/view', 'ContactController@show')->name('admin.contact.view');
	Route::get('{contact}/delete', 'ContactController@destroy')->name('admin.contact.delete');
});
 Route::group(['prefix' => 'password'], function() {         
        Route::get('/', 'ProfileController@index')->name('admin.password.change');
        Route::put('/update', 'ProfileController@update')->name('admin.changepassword.update');
});
Route::group(['prefix' => 'news'], function() {  
    Route::get('list', 'NewsController@index')->name('admin.news.list');        
    Route::post('new', 'NewsController@store')->name('admin.news.post');        
    Route::get('edit/{news}', 'NewsController@edit')->name('admin.news.edit');
    Route::put('update/{news}', 'NewsController@update')->name('admin.news.update');
    Route::delete('delete/{news}', 'NewsController@destroy')->name('admin.news.delete'); 
  }); 

Route::group(['prefix' => 'gallery'], function() {
        Route::get('home', 'GalleryController@index')->name('admin.gallery.list');
        Route::post('gallery', 'GalleryController@store')->name('admin.gallery.post');
        Route::post('gallery', 'GalleryController@upload')->name('admin.gallery.post');
        Route::delete('delete/{gallery}', 'GalleryController@destroy')->name('admin.gallery.delete');
     
     }); 

