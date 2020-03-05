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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Returns a JSON array with the whole list of registered Clients
Route::get('clients', 'UserController@index');

// Return a JSON object that is an array of payments related to the given Client
// If no Client is given, the controller returns an empty JSON
Route::get('payments/{user?}', 'PaymentController@index');

// Register a payment
Route::post('payment/store', 'PaymentController@store');