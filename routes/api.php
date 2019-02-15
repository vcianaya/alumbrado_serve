<?php
Route::group(['prefix' => 'auth',], function () {
  Route::post('login', 'AuthController@login');
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::post('me', 'AuthController@me');
});

Route::post('create_user','User\UserController@createUser');