<?php

use App\Http\Controllers\AccomodationController;
use App\Http\Controllers\DealsController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TransportationController;

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

// Route::get('/', function () {
//     return view('tampilan');
// });
Route::get('/', 'App\Http\Controllers\HomeController@print_home_page');
Route::get('/accomodation', [AccomodationController::class, "index"]);
Route::get('/transportation', [TransportationController::class, "index"]);
Route::get('/tour', [TourController::class, "index"]);
Route::get('/deals', [DealsController::class, "index"]);
Route::get('/service', [ServiceController::class, "index"]);
Route::get('/login', [LoginController::class, "index"]);
Route::get('/register', [RegisterController::class, "index"]);
