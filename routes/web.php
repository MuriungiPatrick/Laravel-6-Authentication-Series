<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes(['verify' => true]);

// Profile Avatar
Route::get('/profilepicture', 'ProfileController@getProfileAvatar')->name('profileavatar');
Route::post('/profilepicture', 'ProfileController@profilePictureUpload')->name('profileavatar');
// Change Password
Route::get('/changepassword', 'ProfileController@changePasswordForm')->name('changepassword');
Route::post('/changepassword', 'ProfileController@changePassword')->name('changepassword');
//Profile Settings
Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profileupdate', 'ProfileController@profileUpdate')->name('profileupdate');
//Dashboard Home
Route::get('/home', 'HomeController@index')->name('home');
// RESTFUL CONTROLLER
Route::resource('/dashboard', 'DashboardController');
