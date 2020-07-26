<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/php-limit', 'DataController@phpLimit')->name('php-limit');
Route::get('/hosting-bundles', 'DataController@bundles')->name('hosting-bundles');
Route::get('/hosting-niaga', 'DataController@niagaHosting')->name('hosting-niaga');
Route::get('/hero-feature', 'DataController@heroFeature')->name('hero-feature');
Route::get('/hosting-packages', 'DataController@hostingPackages')->name('hosting-packages');
Route::get('/laravel-support', 'DataController@laravelSupport')->name('laravel-support');
Route::get('/php-modules', 'DataController@phpModules')->name('php-modules');
Route::get('/payment-list', 'DataController@paymentList')->name('payment-list');
Route::get('/hosting-services', 'DataController@hostingServices')->name('hosting-services');
Route::get('/niaga-services', 'DataController@niagaServices')->name('niaga-services');
