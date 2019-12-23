<?php


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::group(array('prefix' => 'admin'), function () {
        Route::resource('team', 'MembersController');
        Route::resource('press', 'PressPostsController');
        Route::resource('videos', 'VideosController');
        Route::resource('testimonials', 'TestimonialsController');
    });
});


Auth::routes();






Route::get('/{catchall?}', function () {
    return view('welcome');
})->where('catchall', '[\/\w\.-]*');




