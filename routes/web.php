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
//root
Route::get('/', 'PagesController@root')->name('root');
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
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//Users pages
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
//topic
Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);
//categories
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);
//upload image for create topic
Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');
//topic:slug figure
Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');
//replies
Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]);

Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);

Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');

Route::get('/info','AppointmentsController@info')->name('info');
Route::post('/appointment','AppointmentsController@appoint')->name('appointment');
Route::get('/appointment_finish','AppointmentsController@show')->name('appointment_finish');

