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


Route::get('/Achievements/{who}', 'RedVelvetDataController@RVDataAchiv');
Route::get('/Achievements', 'RedVelvetDataController@RVDataAchivnative');


Route::get('/Appearances', 'RedVelvetDataController@RedVelvetTVnative');
Route::get('/Appearances/{who}', 'RedVelvetDataController@RedVelvetTV');

Route::POST('/api/twitter/store', 'TwitterUpdatesController@store');
Route::get('/api/twitter/return', 'TwitterUpdatesController@index');

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '(.*)');
