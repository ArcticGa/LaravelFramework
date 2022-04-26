<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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
Route::get('my-route', [TestController::class, 'lessonOne']);
Route::get('data', [TestController::class, 'lessonTwo']);
Route::get('lovechrt', [TestController::class, 'loveChrt']);
Route::get('name', [TestController::class, 'nameIvan']);
Route::get('nameandfruit', [TestController::class, 'nameAndFruits']);
Route::get('suminprog', [TestController::class, 'sumInProg']);
Route::get('summa', [TestController::class, 'sum']);
Route::get('cipher', [TestController::class, 'cipher']);
