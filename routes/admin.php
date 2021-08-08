<?php

Route::get('/','HomeController@index')->name('home.index');
Route::get('/setting','SettingController@index')->name('setting.index');
Route::post('/setting','SettingController@update')->name('setting.update');


// Data of User in Admin Panel

Route::resource('/user','UserController');
Route::get('user/{id}/delete','UserController@confirmation')->name('user.delete');
Route::get('/LoadUserData','UserController@loadData')->name('admin.user.loadData');
