<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// API Routes come first
$api = app('Dingo\Api\Routing\Router');
$api->version('v1',function($api){
  header('Access-Control-Allow-Origin: http://localhost:4200');
  header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
  header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');

  // API
  $api->group(['namespace'=>'App\Http\Controllers'],function($api){

    $api->resource('tasks', 'MissionController');

    // Protected methods (require auth)


    });

    // Public methods


});

// Catchall - Displays Ember app
Route::any('{catchall}',function(){
  return view('index');
})->where('catchall', '(.*)');
