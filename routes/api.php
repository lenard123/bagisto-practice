<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
Route::get('update-repo', function (Request $request) {
    $exitCode = Artisan::call('git:pull');
	return "Status: $exitCode";
})->middleware('cors');

Route::post('update-repo', function (Request $request) {
    $exitCode = Artisan::call('git:pull');
	return "Status: $exitCode";
})->middleware('cors');
