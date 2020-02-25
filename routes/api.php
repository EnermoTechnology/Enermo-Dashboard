<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dashboard-data', 'ApiController@getDashboardData')->name('api.dashboard-data');
Route::get('historical-avg-data', 'ApiController@getHistoricalAverageData')->name('api.historical-avg-data');
Route::get('historical-graph-data', 'ApiController@getHistoricalGraphData')->name('api.historical-graph-data');
