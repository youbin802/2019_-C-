<?php
use src\App\Route;

Route::get('/','ViewController@index');
Route::get('/blog/admin','ViewController@admin');
Route::get('/blog/myblog','ViewController@myblog');

if(user()) {
    Route::get('/user/logout', 'UserController@logout');

    Route::post('/menu/create', 'MenuController@create');
    Route::post('/menu/add', 'MenuController@add');
    Route::get('/menu/delete/{idx}', 'MenuController@delete');

    Route::post('/board/create', 'BoardController@create');
    Route::get('/board/delete/{idx}', 'BoardController@delete');

    Route::post('/content/create', 'ContentController@create');
    Route::post('/content/reply', 'ContentController@reply');
    Route::get('/content/delete/{idx}', 'ContentController@delete');
    Route::post('/content/update', 'ContentController@update');

    Route::post('/comment/create', 'CommentController@create');
    Route::post('/comment/update', 'CommentController@update');
    Route::get('/comment/delete/{idx}', 'CommentController@delete');

    // admin
    Route::get('/user/delete/{idx}', 'UserController@delete');
} else {
    Route::get('/user/login','ViewController@login');
    Route::get('/user/join','ViewController@join');

    Route::post('/user/login','UserController@login');
    Route::post('/user/join','UserController@join');
}

Route::get('/{email}','ViewController@blog');
Route::get('/blog/menu/{idx}','ViewController@menu');
Route::get('/blog/write/{idx}','ViewController@write');
Route::get('/blog/view/{idx}','ViewController@content');
Route::get('/blog/reply/{idx}','ViewController@reply');
Route::get('/blog/update/{idx}','ViewController@update');