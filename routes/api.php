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

$handler = function (Request $request) {
    $output = [];
    $exitCode = Artisan::call('git:pull', [], $output);
	return $output;
};

Route::get('update-repo', $handler)->middleware('cors');
Route::post('update-repo', $handler)->middleware('cors');
