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
    return view('home');
})->name('home');
Route::get('/events', "EventController@index")->name('events');
Route::get('/events/{id}', function () {
    return view('events.details');
})->name('eventDetail');
Route::get('/circulars', 'CircularController@index')->name('circulars');
Route::get('/circulars/{id}','CircularController@detail' )->name('circulars.detail');
Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');
// Route::get('/home2', function () {
//     return view('welcome');
// });
//Ristricted For Login
Route::group(['middleware' => ['auth','checkUserStatus','IsMember']],function ()
{
        //blogs
        Route::get('/blogs/write', function () {
            return view('addblog');
        })->name('blogs.write');
        Route::post('/blogs/api', 'BlogController@ApiIndex')->name('blog.show.api');
        Route::post('/blogs/doAdd', 'BlogController@create')->name('blog.add.post');
        Route::get('/blogs/{id}', function () {
            return view('blogDetail');
        })->name('blogs.detail');

        //members
        Route::get('/members', function () {
            return view('members');
        })->name('members');
        Route::get('/members/{id}', 'MemberController@index')->name('members.detail');

        //After Basic Register
        Route::get('/register/second', 'Auth\RegisterController@secondForm')->name('register.second');
        Route::post('/register/second', 'Auth\RegisterController@secondEntry')->name('register.second.post');
        Route::get('/register/donation', 'Auth\RegisterController@donationForm')->name('register.donation');
        Route::post('/register/donate', 'Auth\RegisterController@donate')->name('register.donate.post');
        Route::get('/register/pending', 'Auth\RegisterController@pending')->name('register.pending');

});

Auth::routes();


Route::group(['middleware' => ['auth','IsAdmin']],function ()
{
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return view('/admin/dashboard');
        })->name('dashboard');

        Route::prefix('events')->name('events.')->group(function () {
            Route::get('/', 'Admin\EventController@index')->name('show');
            Route::get('/addEvent', function () {
                return view('/admin/addEvent');
            })->name('add');
            Route::post('/doAdd','Admin\EventController@create')->name('add.post');
        });

        Route::prefix('circulars')->name('events.')->group(function () {
            Route::get('/', 'Admin\CircularController@index')->name('show');
            Route::get('/addCircular', function () {
                return view('/admin/addCircular');
            })->name('add');
            Route::post('/doAdd','Admin\CircularController@create')->name('add.post');
        });

        Route::prefix('blogs')->name('blogs.')->group(function () {
            Route::get('/', 'Admin\BlogController@index')->name('show');
            Route::get('/pending', 'Admin\BlogController@pendingIndex')->name('pending');
            Route::get('/preview/{bid}', 'Admin\BlogController@pendingBlogDetails')->name('preview');
            Route::post('/approve','Admin\BlogController@approve')->name('approve.post');
            Route::post('/reject','Admin\BlogController@reject')->name('reject.post');
        });

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/','Admin\adminRootController@index')->name('show');
            Route::get('/preview/{uid}', 'Admin\adminRootController@pendingUserDetails')->name('preview');
            Route::get('/pending','Admin\adminRootController@pendingIndex')->name('pending');
            Route::post('/approve','Admin\adminRootController@approve');
            Route::post('/reject','Admin\adminRootController@reject');
            Route::post('/block','Admin\adminRootController@block');
        });
    });
});






