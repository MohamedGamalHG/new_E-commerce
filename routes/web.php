<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

/*Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    // ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP
    Route::get('/', function()
    {
        return View::make('hello');
    });

    Route::get('test',function(){
        return View::make('test');
    });
});*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

      Route::group(['middleware'=>'IsAdmin','namespace'=>'Admin'],function (){
            require_once __DIR__.'/admin.php';
      });


        require_once __DIR__.'/user.php';


});
