<?php

use App\Http\Controllers\JornalistaController;
use Illuminate\Support\Facades\Route;

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

Route::get('api/register','App\Http\Controllers\JornalistaController@create');

Route::resource('api', JornalistaController::class);



//::post('api/register','App\Http\Controllers\JornalistaController@store');
//Route::resource('api', JornalistaController::class)->parameters([
 //   'create' => 'register'
//]);
