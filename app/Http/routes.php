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
Route::get('/chimneys/catalog', 'ChimneysController@index'); 
Route::get('/chimneys/{type}', 'ChimneysController@index'); 



// footer links
Route::get('/docs', 'PagesController@docs'); 
Route::get('/faq', 'PagesController@faq'); 
Route::get('/articles', 'PagesController@articles'); 
Route::get('/prices', 'PagesController@prices'); 
Route::get('/partners', 'PagesController@partners'); 
Route::get('/photos', 'PagesController@photos'); 
