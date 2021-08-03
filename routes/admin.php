<?php

Route::get('/','HomeController@index')->name('home.index');
Route::get('/setting','SettingController@index')->name('setting.index');
Route::post('/setting','SettingController@update')->name('setting.update');
