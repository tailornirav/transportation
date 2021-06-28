<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
  Route::post('login', 'App\Http\Controllers\UserController@login');
  Route::get('logout', 'App\Http\Controllers\UserController@logout');
});


Route::group(['middleware' => ['auth:sanctum']], function () {
  Route::get('areas', 'App\Http\Controllers\AreaController@index');
  Route::get('areas/{area}', 'App\Http\Controllers\AreaController@show');
  Route::post('areas', 'App\Http\Controllers\AreaController@store');
  Route::delete('areas/{area}', 'App\Http\Controllers\AreaController@delete');

  Route::get('trucks', 'App\Http\Controllers\TruckController@index');
  Route::get('trucks/{truck}', 'App\Http\Controllers\TruckController@show');
  Route::post('trucks', 'App\Http\Controllers\TruckController@store');
  Route::put('trucks/{truck}', 'App\Http\Controllers\TruckController@update');
  Route::delete('trucks/{truck}', 'App\Http\Controllers\TruckController@delete');

  Route::get('transporters', 'App\Http\Controllers\TransporterController@index');
  Route::get('transporters/{transporter}', 'App\Http\Controllers\TransporterController@show');
  Route::post('transporters', 'App\Http\Controllers\TransporterController@store');
  Route::put('transporters/{transporter}', 'App\Http\Controllers\TransporterController@update');
  Route::delete('transporters/{transporter}', 'App\Http\Controllers\TransporterController@delete');

  Route::get('documents/{document}', 'App\Http\Controllers\DocumentController@show');
  Route::post('documents/multiple', 'App\Http\Controllers\DocumentController@multiple');
  Route::post('documents', 'App\Http\Controllers\DocumentController@store');
  Route::delete('documents/{document}', 'App\Http\Controllers\DocumentController@delete');
});
