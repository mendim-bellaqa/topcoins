<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopGainersController;
use GuzzleHttp\Client;


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



use App\Http\Controllers\UserController;


Route::get('/topgainers', [TopGainersController::class, 'index']);

// Route::get('/topgainers', function () {
//     return view('TopGainers');
// });