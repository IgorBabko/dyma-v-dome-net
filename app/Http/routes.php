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

// chimneys
Route::get('/chimneys', 'ChimneysController@index'); 
Route::get('/chimneys/search', 'ChimneysController@search'); 
Route::get('/chimneys/catalog', 'ChimneysController@catalog'); 
Route::get('/chimneys/catalog/{type}', 'ChimneysController@showByType'); 
Route::get('/chimneys/catalog/{type}/{chimney}', 'ChimneysController@show'); 

// briquettes
Route::get('/briquettes', 'BriquettesController@index'); 
Route::get('/briquettes/catalog', 'BriquettesController@catalog'); 
Route::get('/briquettes/search', 'BriquettesController@search'); 
//Route::get('/briquettes/{type}', 'BriquettesController@showByType'); 
Route::get('/briquettes/{briquette}', 'BriquettesController@show'); 

// boilers
Route::get('/boilers', 'BoilersController@index'); 
Route::get('/boilers/catalog', 'BoilersController@catalog'); 
Route::get('/boilers/search', 'BoilersController@search'); 
//Route::get('/boilers/{type}', 'BoilersController@showByType'); 
Route::get('/boilers/{boiler}', 'BoilersController@show'); 

// articles
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/search', 'ArticlesController@search');
Route::get('/articles/{article}', 'ArticlesController@show');


// photos
Route::get('/photos', 'PhotosController@index');
Route::get('/photos/search', 'PhotosController@search');
Route::get('/photos/{photo}', 'PhotosController@show');

// prices
Route::get('/prices/{name}/{width}', 'PricesController@getPrice');

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

    Route::get('/briquettes/search', 'BriquettesController@search');
    Route::resource('briquettes', 'BriquettesController', [
        'parameters' => 'singular'
    ]);

    Route::get('/boilers/search', 'BoilersController@search');
    Route::resource('boilers', 'BoilersController', [
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
