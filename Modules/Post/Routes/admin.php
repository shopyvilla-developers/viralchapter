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





Route::get('withdraw', [
    'as' => 'admin.withdraw.index',
    'uses' => 'WithdrawController@index',
    'middleware' => 'can:admin.withdraw.index',
]);

Route::get('withdraw/create', [
    'as' => 'admin.withdraw.create',
    'uses' => 'WithdrawController@create',
    'middleware' => 'can:admin.withdraw.create',
]);

Route::post('withdraw', [
    'as' => 'admin.withdraw.store',
    'uses' => 'WithdrawController@store',
    'middleware' => 'can:admin.withdraw.create',
]);

Route::get('withdraw/{id}/edit', [
    'as' => 'admin.withdraw.edit',
    'uses' => 'WithdrawController@edit',
    'middleware' => 'can:admin.withdraw.edit',
]);

Route::put('withdraw/{id}/edit', [
    'as' => 'admin.withdraw.update',
    'uses' => 'WithdrawController@update',
    'middleware' => 'can:admin.withdraw.edit',
]);

Route::delete('withdraw/{ids?}', [
    'as' => 'admin.withdraw.destroy',
    'uses' => 'WithdrawController@destroy',
    'middleware' => 'can:admin.withdraw.destroy',
]);