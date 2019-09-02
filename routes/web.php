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


Route::get('/','PageController@dashboard')->name('pages.home');
Route::get('detail/{id}','PageController@detailRoom')->name('room.detail');
Route::post('bookroom','BookRoomController@addBookRoom')->name('room.book_room');

Route::get('detail-post/{id}','PageController@detailPost')->name('post.detail');

Route::get('list-post','PageController@listPost')->name('list.post');
Route::get('list-rooms','PageController@listRoom')->name('list.rooms');

Route::post('comment/{id}','CommentController@addComment')->name('room.comment');

Route::get('infor-account','PageController@infoAccount')->name('account.infor');
Route::post('change-pass','PageController@postChangePass')->name('pass.change');

Route::get('search','PageController@postSearch')->name('search');

Route::get('cancel-room/{id}','PageController@cancelRoom')->name('cancel.room');


Route::get('list-book-room','PageController@listBookRoom')->name('user.list_book_room');

Route::group(['prefix' => 'admins', 'middleware' => ['admin']], function(){
    Route::get('/','DashboardController@index')->name('admin.dashboard');

    Route::prefix('bookrooms')->group(function () {
        Route::get('/','BookRoomController@getList')->name('bookrooms.list');

        Route::get('retun-book/{id}','BookRoomController@returnRoom')->name('bookrooms.return');

        Route::get('delete/{id}','BookRoomController@delete')->name('bookrooms.delete');

    });

    Route::prefix('rooms')->group(function () {
        Route::get('/','RoomController@index')->name('rooms.list');

        Route::get('add','RoomController@getAdd')->name('rooms.get_add');
        Route::post('add','RoomController@postAdd')->name('rooms.post_add');

        Route::get('edit/{id}','RoomController@getEdit')->name('rooms.get_edit');
        Route::post('edit/{id}','RoomController@postEdit')->name('rooms.post_edit');

        Route::get('delete/{id}','RoomController@delete')->name('rooms.delete');
    });

    Route::prefix('comment')->group(function () {
        Route::get('comment-room','CommentController@listCommentRooms')->name('comments.room_list');
        Route::get('delete/{id}','CommentController@delete')->name('comments.delete');
    });

    Route::prefix('post')->group(function () {
        Route::get('/','PostController@index')->name('post.list');

        Route::get('/add','PostController@getAdd')->name('post.get_add');
        Route::post('/add','PostController@postAdd')->name('post.post_add');

        Route::get('edit/{id}','PostController@getEdit')->name('posts.get_edit');

        Route::post('edit/{id}','PostController@postEdit')->name('posts.post_edit');

        Route::get('delete/{id}','PostController@delete')->name('posts.delete');

    });

    Route::prefix('customer')->group(function () {
        Route::get('/','UserController@index')->name('customer.list');
        Route::get('delete/{id}','UserController@delete')->name('customer.delete');
    });

    Route::prefix('slides')->group(function () {
        Route::get('/','SlideController@index')->name('slides.list');

        Route::get('/add','SlideController@getAdd')->name('slides.get_add');
        Route::post('/add','SlideController@postAdd')->name('slides.post_add');

        Route::get('edit/{id}','SlideController@getEdit')->name('slides.get_edit');

        Route::post('edit/{id}','SlideController@postEdit')->name('slides.post_edit');

        Route::get('delete/{id}','SlideController@delete')->name('slides.delete');

    });


    Route::prefix('report')->group(function () {
        Route::get('/','ReportController@index')->name('report');

    });

    Route::get('export/{id}','BookRoomController@generatePDF')->name('export');
});


Auth::routes();
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);
//Route::get('admin-logout', ['as'=>'admin.logout','uses'=>'Auth\AdminLoginController@logout']);

Route::get('logout-admin', 'Auth\AdminLoginController@logout')->name('admin.logout');


Route::get('/home', 'HomeController@index')->name('home');




