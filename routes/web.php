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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/onlogin/{userId}', 'HomeController@getUser');


//Status

Route::get('/home/status', 'StatusController@getStatusUser');
Route::get('/status', 'StatusController@getStatus');
Route::get('/status/{userId}', 'StatusController@userStatus');

Route::post('/status', 'StatusController@postStatus');


//Friend

Route::post('/addfriend/{userId}', 'HomeController@addFriend');
Route::post('/endfriend/{userId}', 'HomeController@endFriend');

Route::get('/friend/{userId}', 'HomeController@getFriendDetail');


//Comment

Route::get('/home/comment', 'CommentController@getCommentUser');

Route::post('/comment', 'CommentController@addComment');


