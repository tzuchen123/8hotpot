<?php

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

Route::get('/test', function () {
    return view("test");
});

//前端
Route::get('/', 'FrontController@index');

//加盟表單
Route::get('/join_us', 'FrontController@join_us');
Route::post('/join_us/store', 'FrontController@store');


//聯絡表單
Route::get('/contact_us', 'FrontController@contact_us');
Route::post('/contact_us/store', 'FrontController@contact_store');


//後端
Auth::routes();

Route::get('/admin', 'HomeController@index');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');
    
    //最新消息
    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::post('/store', 'NewsController@store');
        Route::get('/edit/{id}', 'NewsController@edit');
        Route::post('/update/{id}', 'NewsController@update');
        Route::post('/destroy/{id}', 'NewsController@destroy');
        
    });

    //分店地圖
    Route::group(['prefix' => 'shops'], function () {
        Route::get('/', 'ShopsController@index');
        Route::get('/create', 'ShopsController@create');
        Route::post('/store', 'ShopsController@store');
        Route::get('/edit/{id}', 'ShopsController@edit');
        Route::post('/update/{id}', 'ShopsController@update');
        Route::post('/destroy/{id}', 'ShopsController@destroy');
    });

    //加盟專區
    Route::group(['prefix' => 'join_us'], function () {
        Route::get('/', 'Join_usController@index');
    });

    //聯絡我們
    Route::group(['prefix' => 'contact_us'], function () {
        Route::get('/', 'Contact_usController@index');
      
    });

    
});