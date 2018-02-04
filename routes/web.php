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

//Routes For Guest And Member Only
Route::group(['middleware' => ['IsNotAdmin']],function ()
{
    Route::get('/', 'RootController@index')->name('home');
    Route::get('/events', "EventController@index")->name('events');
    Route::get('/events/{id}','EventController@detail')->name('eventDetail');
    Route::get('/circulars', 'CircularController@index')->name('circulars');
    Route::get('/circulars/{id}','CircularController@detail' )->name('circulars.detail');
    Route::get('/blogs', 'BlogController@index')->name('blogs');
});

Route::get('/about','RootController@about')->name('about');
//Ristricted For Login
Route::group(['middleware' => ['auth','checkUserStatus','IsMember']],function ()
{
        Route::get('/account/edit' , 'Auth\RegisterController@edit');
        Route::post('/account/edit','Auth\RegisterController@update');
        //blogs
        Route::get('/blogs/write', 'BlogController@write')->name('blogs.write');
        Route::post('/blogs/api', 'BlogController@ApiIndex')->name('blog.show.api');
        Route::post('/blogs/doAdd', 'BlogController@create')->name('blog.add.post');
        Route::get('/blogs/{id}', 'BlogController@detail')->name('blogs.detail');
        Route::post('/blogs/delete', 'BlogController@delete')->name('blogs.delete.post');

        //members
        Route::get('/members','MemberController@index')->name('members');
        Route::get('/members/{id}', 'MemberController@detail')->name('members.detail');
        Route::post('/members/api', 'MemberController@api')->name('members.api');

        //After Basic Register
        Route::get('/register/second', 'Auth\RegisterController@secondForm')->name('register.second');
        Route::post('/register/second', 'Auth\RegisterController@secondEntry')->name('register.second.post');
        Route::get('/register/donation', 'Auth\RegisterController@donationForm')->name('register.donation');
        Route::post('/register/donation', 'Auth\RegisterController@donate')->name('register.donation.post');
        Route::get('/register/pending', 'RootController@pending')->name('register.pending');
        Route::get('/register/reject', 'RootController@reject')->name('register.reject');
        Route::get('/register/block', 'RootController@block')->name('register.block');

});

Auth::routes();
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::group(['middleware' => ['auth','IsAdmin']],function ()
{
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', 'adminRootController@dashboard')->name('dashboard');

        Route::prefix('events')->name('events.')->group(function () {
            Route::get('/', 'Admin\EventController@index')->name('show');
            Route::get('/addEvent', 'Admin\EventController@addEvent')->name('add');
            Route::post('/doAdd','Admin\EventController@create')->name('add.post');
        });

        Route::prefix('circulars')->name('events.')->group(function () {
            Route::get('/', 'Admin\CircularController@index')->name('show');
            Route::get('/addCircular', 'Admin\CircularController@addCircular')->name('add');
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






