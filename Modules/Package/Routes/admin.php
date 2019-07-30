<?php

/** @var Illuminate\Routing\Router $router */
Route::get('packages', [
    'as' => 'admin.packages.index',
    'uses' => 'PackageController@index',
    'middleware' => 'can:admin.packages.index',
]);

Route::get('packages/create', [
    'as' => 'admin.packages.create',
    'uses' => 'PackageController@create',
    'middleware' => 'can:admin.packages.create',
]);

Route::post('packages', [
    'as' => 'admin.packages.store',
    'uses' => 'PackageController@store',
    'middleware' => 'can:admin.packages.create',
]);

Route::get('packages/{id}/edit', [
    'as' => 'admin.packages.edit',
    'uses' => 'PackageController@edit',
    'middleware' => 'can:admin.packages.edit',
]);

Route::put('packages/{id}/edit', [
    'as' => 'admin.packages.update',
    'uses' => 'PackageController@update',
    'middleware' => 'can:admin.packages.edit',
]);

Route::delete('Packages/{ids?}', [
    'as' => 'admin.packages.destroy',
    'uses' => 'PackageController@destroy',
    'middleware' => 'can:admin.packages.destroy',
]);
