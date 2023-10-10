<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/mypost/{name}', 'App\Http\Controllers\ApiControllerPost@mypost');
Route::post('/post_item', 'App\Http\Controllers\ApiControllerPost@new_item');

Route::get('/message', function() {
    return "Hello from API.";
});

Route::get('/hello/{name}', 'App\Http\Controllers\ApiControllerGet@myget');
Route::get('/list', 'App\Http\Controllers\ListController@getall');
Route::get('/list/id/{id}', 'App\Http\Controllers\ListController@get_id');
Route::get('/list/price/{price}', 'App\Http\Controllers\ListController@get_max_price');

/*
Route::get('/hello/{name}', function($name) {
    return 'Texto ' . $name;
});
*/

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

