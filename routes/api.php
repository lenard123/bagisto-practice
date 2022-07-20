<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Process\Process;

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
    $process = new Process(['git', 'pull']);
    $process->run(function($type, $buffer) use ($output) {
        array_push($output, $buffer);
    });
    return $output;
};

Route::get('update-repo', $handler)->middleware('cors');
Route::post('update-repo', $handler)->middleware('cors');
