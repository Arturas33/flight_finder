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


Route::group(['prefix' => 'gg'], function () {

    Route::get('/air', [ 'uses' => 'FakerData@getRandomString']);
    Route::get('/fl', [ 'uses' => 'FakerData@generateFlights']);

});
Route::get('/front', ['as' => 'app.search.index', 'uses' => 'FrontEndController@index']);

//Route::group(['prefix' => 'search'], function () {
//
//    Route::get('/', ['as' => 'app.search.index', 'uses' => 'FrontEndController@index']);
//    Route::get('/create', ['as' => 'app.search.create', 'uses' => 'FrontEndController@create']);
//    Route::post('/create', ['uses' => 'FrontEndController@store']);
//
//    Route::group(['prefix' => '{id}'], function () {
//
//        Route::get('/', ['as' => 'app.search.show', 'uses' => 'FrontEndController@show']);
//        Route::get('/edit', ['as' => 'app.search.edit', 'uses' => 'FrontEndController@edit']);
//        Route::post('/edit', ['uses' => 'FrontEndController@update']);
//        Route::delete('/delete', ['as' => 'app.search.destroy', 'uses' => 'FrontEndController@destroy']);
//    });


Route::group(['prefix' => 'flights'], function () {

    Route::get('/', ['as' => 'app.flights.index', 'uses' => 'FFFlightsController@index']);
    Route::get('/create', ['as' => 'app.flights.create', 'uses' => 'FFFlightsController@create']);
    Route::post('/create', ['uses' => 'FFFlightsController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.flights.show', 'uses' => 'FFFlightsController@show']);
        Route::get('/edit', ['as' => 'app.flights.edit', 'uses' => 'FFFlightsController@edit']);
        Route::post('/edit', ['uses' => 'FFFlightsController@update']);
        Route::delete('/delete', ['as' => 'app.flights.destroy', 'uses' => 'FFFlightsController@destroy']);
    });

});
Route::group(['prefix' => 'airline'], function () {

    Route::get('/', ['as' => 'app.airline.index', 'uses' => 'FFAirLineController@index']);
    Route::get('/create', ['as' => 'app.airline.create', 'uses' => 'FFAirLineController@create']);
    Route::post('/create', ['uses' => 'FFAirLineController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.airline.show', 'uses' => 'FFAirLineController@show']);
        Route::get('/edit', ['as' => 'app.airline.edit', 'uses' => 'FFAirLineController@edit']);
        Route::post('/edit', ['uses' => 'FFAirLineController@update']);
        Route::delete('/delete', ['as' => 'app.airline.destroy', 'uses' => 'FFAirLineController@destroy']);
    });

});
Route::group(['prefix' => 'airports'], function () {

    Route::get('/', ['as' => 'app.airports.index', 'uses' => 'FFAirPortsController@index']);
    Route::get('/create', ['as' => 'app.airports.create', 'uses' => 'FFAirPortsController@create']);
    Route::post('/create', ['uses' => 'FFAirPortsController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.airports.show', 'uses' => 'FFAirPortsController@show']);
        Route::get('/edit', ['as' => 'app.airports.edit', 'uses' => 'FFAirPortsController@edit']);
        Route::post('/edit', ['uses' => 'FFAirPortsController@update']);
        Route::delete('/delete', ['as' => 'app.airports.destroy', 'uses' => 'FFAirPortsController@destroy']);
    });

});
Route::group(['prefix' => 'country'], function () {

    Route::get('/', ['as' => 'app.country.index', 'uses' => 'FFCountryController@index']);
    Route::get('/create', ['as' => 'app.country.create', 'uses' => 'FFCountryController@create']);
    Route::post('/create', ['uses' => 'FFCountryController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['as' => 'app.country.show', 'uses' => 'FFCountryController@show']);
        Route::get('/edit', ['as' => 'app.country.edit', 'uses' => 'FFCountryController@edit']);
        Route::post('/edit', ['uses' => 'FFCountryController@update']);
        Route::delete('/delete', ['as' => 'app.country.destroy', 'uses' => 'FFCountryController@destroy']);
    });

});

