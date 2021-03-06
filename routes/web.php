<?php

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

Auth::routes();

Route::middleware(['auth', 'user.status', 'only.ajax'])->group(function () {
    Route::apiResource('users', 'UserController');
    Route::apiResource('marital-states', 'MaritalStatusController', ['names' => 'marital.states']);
    Route::apiResource('continents', 'ContinentController')->only('index');
    Route::apiResource('countries', 'CountryController');
    Route::apiResource('states', 'StateController');
});
