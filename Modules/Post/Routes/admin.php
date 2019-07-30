<?php

/** @var Illuminate\Routing\Router $router */
Route::get('posts', [
    'as' => 'admin.posts.index',
    'uses' => 'PostController@index',
    'middleware' => 'can:admin.posts.index',
]);

Route::get('posts/create', [
    'as' => 'admin.posts.create',
    'uses' => 'PostController@create',
    'middleware' => 'can:admin.posts.create',
]);

Route::post('posts', [
    'as' => 'admin.posts.store',
    'uses' => 'PostController@store',
    'middleware' => 'can:admin.posts.create',
]);

Route::get('posts/{id}/edit', [
    'as' => 'admin.posts.edit',
    'uses' => 'PostController@edit',
    'middleware' => 'can:admin.posts.edit',
]);

Route::put('posts/{id}/edit', [
    'as' => 'admin.posts.update',
    'uses' => 'PostController@update',
    'middleware' => 'can:admin.posts.edit',
]);

Route::delete('Posts/{ids?}', [
    'as' => 'admin.posts.destroy',
    'uses' => 'PostController@destroy',
    'middleware' => 'can:admin.posts.destroy',
]);
