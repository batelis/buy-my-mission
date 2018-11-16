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

//
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;
//
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::resource('/mission', 'MissionController');
//
//Route::get("{data?}", function()
//{
//    return View::make("app");
//})->where("data", ".*");
