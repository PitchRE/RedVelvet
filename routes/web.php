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


Route::get('/Joy/Achievements', 'RedVelvetDataController@JoyDataAchiv');


Route::get('/Appearances', 'RedVelvetDataController@RedVelvetTVnative');
Route::get('/Appearances/{who}', 'RedVelvetDataController@RedVelvetTV');



Route::get('/{any}', function () {return view('welcome');})->where('any', '(.*)');