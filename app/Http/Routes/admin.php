<?php

Route::group(['middleware' => ['auth:admin']], function ($router) {
    Route::get('/', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index',
    ]);
});

Route::get('login', [
    'uses' => 'AuthController@index',
    'as' => 'admin.auth.index',
]);

Route::post('login', [
    'uses' => 'AuthController@login',
    'as' => 'admin.auth.login',
]);

Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'admin.auth.logout',
]);
