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

Route::get('register', [
    'uses' => 'AuthController@getRegister',
    'as' => 'admin.auth.register',
]);

Route::post('register', [
    'uses' => 'AuthController@postRegister',
    'as' => 'admin.auth.register',
]);

Route::get('password/reset/{token?}', [
    'uses' => 'PasswordController@showResetForm',
    'as' => 'admin.password.reset',
]);

Route::post('password/reset', [
    'uses' => 'PasswordController@reset',
    'as' => 'admin.password.reset',
]);

Route::post('password/email', [
    'uses' => 'PasswordController@sendResetLinkEmail',
    'as' => 'admin.password.email',
]);
