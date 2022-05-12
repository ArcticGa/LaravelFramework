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
    return view('formPage');
});
//Примеры
Route::get('my-route', [TestController::class, 'lessonOne']);
Route::get('data', [TestController::class, 'lessonTwo']);

//Первый блок заданий
Route::get('lovechrt', [TestController::class, 'loveChrt']);
Route::get('name', [TestController::class, 'nameIvan']);
Route::get('nameandfruit', [TestController::class, 'nameAndFruits']);
Route::get('suminprog', [TestController::class, 'sumInProg']);
Route::get('summa', [TestController::class, 'sum']);
Route::get('cipher', [TestController::class, 'cipher']);

//Пример
Route::get('template/{detach}', [TestController::class, 'lessonTemplateOne']);

//Второй блок заданий
Route::get('politic', [TestController::class, 'politicConf']);
Route::get('favstring/{favorite}', [TestController::class, 'favoriteString']); //Цитата пишется в адресной строке выше
Route::get('array', [TestController::class, 'array']);
