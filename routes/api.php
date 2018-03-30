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
 * Tables Routes
 */
Route::get('/allTables', 'TablesController@allTables');
Route::get('/tableId/{id}', 'TablesController@unreservedTables');
Route::get('/reservedTables', 'TablesController@reservedTables');
Route::get('/unreservedTables', 'TablesController@unreservedTables');
/*
 * Menu Routes
 */
Route::get('/menuDishes/{id}', 'MenuController@menuDishes');
Route::get('/allMenus', 'MenuController@allMenus');
/*
 * Restaurant Routes
 */
Route::get('/ResNames', 'RestaurantsController@resNames');
Route::get('/resStatus/{id}', 'ResWorkingHoursController@index');
