<?php

use Illuminate\Support\Facades\Route;
use App\Structure\OfsSection\User\Controllers\OfsController;
use App\Structure\CommunalSection\User\Controllers\CommunalController;
use App\Structure\CommunalSection\Admin\Controllers\AdminCommunalController;

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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль коммунальные услуги)
Route::get('/admin/communal/back', [AdminCommunalController::class, 'index'])->middleware('auth', 'admin');
Route::patch('/admin/communal/updatestatus', [AdminCommunalController::class, 'updatestatus'])->middleware('auth', 'admin');
Route::get('/admin/communal/export', [AdminCommunalController::class, 'export'])->middleware('auth', 'admin');

Route::get('/user/communal/back', [CommunalController::class, 'index'])->middleware('auth');
Route::patch('/user/communal/update', [CommunalController::class, 'update'])->middleware('auth');
Route::patch('/user/communal/sending', [CommunalController::class, 'sending'])->middleware('auth');
Route::patch('/user/communal/change', [CommunalController::class, 'change'])->middleware('auth');

//Роуты для Front (Модуль коммунальные услуги)
Route::get('/admin/communal', [AdminCommunalController::class, 'user'])->middleware('auth', 'admin')->name('admincommunal');
Route::get('/user/communal/{year}', [CommunalController::class, 'user'])->middleware('auth')->name('usercommunal');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль ОФС)
Route::get('/user/ofs/back', [OfsController::class, 'index'])->middleware('auth');
Route::patch('/user/ofs/update', [OfsController::class, 'update'])->middleware('auth');
Route::patch('/user/ofs/reset', [OfsController::class, 'reset'])->middleware('auth');
Route::patch('/user/ofs/stat', [OfsController::class, 'stat'])->middleware('auth');
Route::patch('/user/ofs/synch', [OfsController::class, 'synch'])->middleware('auth');
Route::get('/user/ofs/export', [OfsController::class, 'export'])->middleware('auth');

//Роуты для Front (Модуль ОФС)
Route::get('/user/ofs', [OfsController::class, 'user'])->middleware('auth')->name('userofs');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
