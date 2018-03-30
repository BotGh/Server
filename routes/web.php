<?php

use App\Restaurants;
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
Route::get('/ResNames', 'RestaurantsController@index');
Route::get('/menu', 'MenuController@index');
Route::get('/availableTables', 'TablesController@index');

/*Route::get('/', function (){

    $restaurant = Restaurants::all();

    return view('welcome', compact('restaurant'));

});*/