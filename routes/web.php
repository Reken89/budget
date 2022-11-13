<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Communal\CommunalController;

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

//Роуты для Back
Route::get('/user/communal/back', [CommunalController::class, 'index'])->middleware('auth');
Route::patch('/user/communal/update', [CommunalController::class, 'update'])->middleware('auth');

//Роуты для Front
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/test', [ContactController::class, 'test'])->middleware('auth');
Route::get('/user/communal/{year}', [CommunalController::class, 'user'])->middleware('auth')->name('usercommunal');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
