<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('joe/{order_id}/{other_id}', 'RostersController@specific');
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//Route::get('rosters/{sport_id}/edit/{id}', 'RostersController@loadModal');


Route::group(['middleware' => ['web']], function () {
	Route::get('rosters/filter/{sport_id}/{level_id}', 'RostersController@filter');
	Route::post('rosters/{sport_id}', 'RostersController@update');
	Route::resource('rosters', 'RostersController');


	Route::get('rosters/{sport_id}/filter/{level_id}', 'RostersController@filter');


    //
});
