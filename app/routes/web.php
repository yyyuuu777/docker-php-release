<?php

use Illuminate\Http\Request;
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


Route::get('/test',function(Request $request) {
  // print and interrupt
  dump($request);
});

/**
 * signup
 * @var [type]
 */
Route::any('/signup','UserController@user_token');
Route::any('/test',function(Request $request){
    echo "Hello";
});
