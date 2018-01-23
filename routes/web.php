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
Route::get('/home2', function () {
    return view('home');
});

Route::get('/events', function () {
    return view('events');
});
Route::get('/events/{id}', function () {
    return view('eventDetails');
});
Route::get('/circulars', function () {
    return view('circulars');
});
Route::get('/circulars/{id}', function () {
    return view('circularDetail');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/blogs/write', function () {
    return view('addblog');
});
Route::get('/blogs/{id}', function () {
    return view('blogDetail');
});
Route::get('/members', function () {
    return view('members');
});
Route::get('/members/{id}', function () {
    return view('memberDetail');
});
Route::get('/register/second', 'Auth\RegisterController@secondForm');
Route::post('/register/second', 'Auth\RegisterController@secondEntry');
Route::get('/register/donation', 'Auth\RegisterController@donationForm');
Route::post('/register/donate', 'Auth\RegisterController@donate');
Route::get('/register/pending', 'Auth\RegisterController@pending');
Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('/admin/dashboard');
    });
    Route::prefix('events')->group(function () {
        Route::get('/', function () {
            return view('/admin/events');
        });
        Route::get('/addEvent', function () {
            return view('/admin/addEvent');
        });
        Route::post('/doAdd','Admin\EventController@create');
    });
    
});




