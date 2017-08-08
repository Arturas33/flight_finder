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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => '/'], function () {

    Route::get('/', ['as' => 'app.menu.index', 'uses' => 'FFFlightsController@index']);
    Route::get('/create', ['as' => 'app.menu.create', 'uses' => 'FFFlightsController@create']);
    Route::post('/create', ['uses' => 'FFFlightsController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.menu.show', 'uses' => 'FFFlightsController@show']);
        Route::get('/edit', ['as' => 'app.menu.edit', 'uses' => 'FFFlightsController@edit']);
        Route::post('/edit', ['uses' => 'FFFlightsController@update']);
        Route::delete('/delete', ['as' => 'app.menu.destroy', 'uses' => 'FFFlightsController@destroy']);
    });

});
Route::group(['prefix' => 'airline'], function () {

    Route::get('/', ['as' => 'app.menu.index', 'uses' => 'FFAirLineController@index']);
    Route::get('/create', ['as' => 'app.menu.create', 'uses' => 'FFAirLineController@create']);
    Route::post('/create', ['uses' => 'FFAirLineController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.menu.show', 'uses' => 'FFAirLineController@show']);
        Route::get('/edit', ['as' => 'app.menu.edit', 'uses' => 'FFAirLineController@edit']);
        Route::post('/edit', ['uses' => 'FFAirLineController@update']);
        Route::delete('/delete', ['as' => 'app.menu.destroy', 'uses' => 'FFAirLineController@destroy']);
    });

});
Route::group(['prefix' => 'airports'], function () {

    Route::get('/', ['as' => 'app.menu.index', 'uses' => 'FFAirPortsController@index']);
    Route::get('/create', ['as' => 'app.menu.create', 'uses' => 'FFAirPortsController@create']);
    Route::post('/create', ['uses' => 'FFAirPortsController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.menu.show', 'uses' => 'FFAirPortsController@show']);
        Route::get('/edit', ['as' => 'app.menu.edit', 'uses' => 'FFAirPortsController@edit']);
        Route::post('/edit', ['uses' => 'FFAirPortsController@update']);
        Route::delete('/delete', ['as' => 'app.menu.destroy', 'uses' => 'FFAirPortsController@destroy']);
    });

});
Route::group(['prefix' => 'country'], function () {

    Route::get('/', ['as' => 'app.menu.index', 'uses' => 'FFCountryController@index']);
    Route::get('/create', ['as' => 'app.menu.create', 'uses' => 'FFCountryController@create']);
    Route::post('/create', ['uses' => 'FFCountryController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.menu.show', 'uses' => 'FFCountryController@show']);
        Route::get('/edit', ['as' => 'app.menu.edit', 'uses' => 'FFCountryController@edit']);
        Route::post('/edit', ['uses' => 'FFCountryController@update']);
        Route::delete('/delete', ['as' => 'app.menu.destroy', 'uses' => 'FFCountryController@destroy']);
    });

});

