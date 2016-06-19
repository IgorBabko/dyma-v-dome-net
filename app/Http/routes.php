<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index'); 
Route::get('/contact', 'PagesController@contact'); 

Route::get('/chimneys', 'ChimneysController@index'); 
Route::get('/chimneys/catalog', 'ChimneysController@catalog'); 
Route::get('/chimneys/search', 'ChimneysController@search'); 
Route::get('/chimneys/{type}', 'ChimneysController@showByType'); 

// articles
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/search', 'ArticlesController@search');
Route::get('/articles/{article}', 'ArticlesController@show');


// photos
Route::get('/photos', 'PhotosController@index');
Route::get('/photos/search', 'PhotosController@search');
Route::get('/photos/{photo}', 'PhotosController@show');



// footer links
Route::get('/docs', 'PagesController@docs'); 
Route::get('/faq', 'PagesController@faq'); 
Route::get('/prices', 'PagesController@prices'); 
Route::get('/partners', 'PagesController@partners'); 
Route::get('/order', 'PagesController@order'); 
Route::post('/order', 'PagesController@saveOrder'); 


// admin
Route::get('/admin/login', 'Auth\AuthController@getLogin');
Route::post('/admin/login', 'Auth\AuthController@postLogin');
Route::get('/admin/logout', 'Auth\AuthController@logout');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {        

    Route::get('/', 'ChimneysController@index');
    Route::get('/chimneys/search', 'ChimneysController@search');
    Route::resource('chimneys', 'ChimneysController', [
        'parameters' => 'singular'
    ]);

    Route::get('/articles/search', 'ArticlesController@search');
    Route::resource('articles', 'ArticlesController', [
        'parameters' => 'singular'
    ]);
    
    Route::get('/photos/search', 'PhotosController@search');
    Route::resource('photos', 'PhotosController', [
        'parameters' => 'singular'
    ]);

    Route::get('/orders', 'OrdersController@index');
    Route::get('/orders/search', 'OrdersController@search');
    Route::delete('/orders/{id}', 'OrdersController@destroy');
});

// prices
Route::get('/prices/{name}/{width}', 'PricesController@getPrice');

