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
Route::get('/chimneys/{type}', 'ChimneysController@showByType'); 
Route::get('/chimneys/search', 'ChimneysController@search'); 

// articles
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/search', 'ArticlesController@search');


// photos
Route::get('/photos', 'PhotosController@index');
Route::get('/photos/{photo}', 'PhotosController@show');
Route::get('/photos/search', 'PhotosController@search');


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
    Route::resource('chimneys', 'ChimneysController', [
        'parameters' => 'singular'
    ]);

    Route::resource('articles', 'ArticlesController', [
        'parameters' => 'singular'
    ]);
    
    Route::resource('photos', 'PhotosController', [
        'parameters' => 'singular'
    ]);

});

// prices
Route::get('/prices/{name}/{width}', 'PricesController@getPrice');

