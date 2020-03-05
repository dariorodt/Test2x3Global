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

Route::get('test', function() {
	$handle = curl_init();
 
	$url = "https://mindicador.cl/api/dolar";
	 
	// Set the url
	curl_setopt($handle, CURLOPT_URL, $url);
	// Set the result output to be a string.
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	 
	$output = json_decode(curl_exec($handle));
	 
	curl_close($handle);
	 
	var_dump((integer)$output->serie[0]->valor);
});

Route::get('uuid', function() {
    return (string) Str::uuid();
});

Route::view('/', 'welcome');
Route::view('home', 'home');