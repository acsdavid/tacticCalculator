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

Route::get('/tactic', 'TacticalCalculatorController@index')->name('tactic');
//Route::get('/statistic', 'StatisticController@index')->name('statistic')->middleware('cors');

Route::group(['middleware' => 'cors', 'frameheader'], function () {
    Route::get('/statistic', 'StatisticController@index')->name('statistic');
});