<?php

use Illuminate\Support\Facades\Route;
use App\Structure\OfsSection\User\Controllers\OfsController;
use App\Structure\OfsSection\Admin\Controllers\AdminOfsController;
use App\Structure\CommunalSection\User\Controllers\CommunalController;
use App\Structure\CommunalSection\Admin\Controllers\AdminCommunalController;
use App\Structure\CommunalSection\Ugkh\Controllers\UgkhCommunalController;
use App\Structure\BuildSection\Admin\Controllers\AdminBuildController;
use App\Structure\BuildSection\User\Controllers\UserBuildController;
use App\Structure\BuildSection\Build\Controllers\BuildController;
use App\Structure\ForecastSection\Admin\Controllers\ForecastController;
use App\Structure\CountSection\Admin\Controllers\AdminCountController;
use App\Structure\CountSection\User\Controllers\CountController;
use App\Structure\TaxSection\Admin\Controllers\TaxController;
use App\Structure\BlockSection\Admin\Controllers\BlockController;

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
    return view('auth.login');
});

// Роут на страницу с контактами
Route::get('/contact', function () {return view('contact');});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль коммунальные услуги)
Route::get('/admin/communal/back', [AdminCommunalController::class, 'index'])->middleware('auth', 'admin');
Route::patch('/admin/communal/updatestatus', [AdminCommunalController::class, 'updatestatus'])->middleware('auth', 'admin');
Route::patch('/admin/communal/updatetarrif', [AdminCommunalController::class, 'updatetarrif'])->middleware('auth', 'admin');
Route::patch('/admin/communal/synchronization', [AdminCommunalController::class, 'synchronization'])->middleware('auth', 'admin');
Route::get('/admin/communal/export', [AdminCommunalController::class, 'export'])->middleware('auth');
Route::get('/admin/communal/email', [AdminCommunalController::class, 'email'])->middleware('auth', 'admin');

Route::get('/user/communal/back', [CommunalController::class, 'index'])->middleware('auth');
Route::patch('/user/communal/update', [CommunalController::class, 'update'])->middleware('auth');
Route::patch('/user/communal/sending', [CommunalController::class, 'sending'])->middleware('auth');
Route::patch('/user/communal/change', [CommunalController::class, 'change'])->middleware('auth');

Route::get('/ugkh/communal/back', [UgkhCommunalController::class, 'index'])->middleware('auth');

//Роуты для Front (Модуль коммунальные услуги)
Route::get('/admin/communal', [AdminCommunalController::class, 'user'])->middleware('auth', 'admin')->name('admincommunal');
Route::get('/user/communal/{year}', [CommunalController::class, 'user'])->middleware('auth')->name('usercommunal');
Route::get('/ugkh/communal', [UgkhCommunalController::class, 'user'])->middleware('auth')->name('ugkh');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль ОФС)
Route::get('/admin/ofs/back', [AdminOfsController::class, 'index'])->middleware('auth', 'admin');
Route::patch('/admin/ofs/status', [AdminOfsController::class, 'status'])->middleware('auth', 'admin');
Route::get('/admin/ofs/export', [AdminOfsController::class, 'export'])->middleware('auth', 'admin');

Route::get('/user/ofs/back', [OfsController::class, 'index'])->middleware('auth');
Route::patch('/user/ofs/update', [OfsController::class, 'update'])->middleware('auth');
Route::patch('/user/ofs/reset', [OfsController::class, 'reset'])->middleware('auth');
Route::patch('/user/ofs/stat', [OfsController::class, 'stat'])->middleware('auth');
Route::patch('/user/ofs/synch', [OfsController::class, 'synch'])->middleware('auth');
Route::get('/user/ofs/export', [OfsController::class, 'export'])->middleware('auth');

//Роуты для Front (Модуль ОФС)
Route::get('/admin/ofs', [AdminOfsController::class, 'user'])->middleware('auth', 'admin')->name('adminofs');
Route::get('/user/ofs', [OfsController::class, 'user'])->middleware('auth')->name('userofs');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль Строительство)
Route::get('/admin/build/back', [AdminBuildController::class, 'index'])->middleware('auth', 'admin');
Route::patch('/admin/build/update', [AdminBuildController::class, 'update'])->middleware('auth', 'admin');
Route::post('/admin/build/add', [AdminBuildController::class, 'add'])->middleware('auth', 'admin');
Route::get('/admin/build/plug', [AdminBuildController::class, 'plug'])->middleware('auth', 'admin');
Route::get('/admin/build/export', [AdminBuildController::class, 'export'])->middleware('auth');

Route::get('/user/build/back', [UserBuildController::class, 'index'])->middleware('auth');
Route::patch('/user/build/update', [UserBuildController::class, 'update'])->middleware('auth');
Route::post('/user/build/add', [UserBuildController::class, 'add'])->middleware('auth');

Route::get('/build/back', [BuildController::class, 'index'])->middleware('auth');

//Роуты для Front (Модуль Строительство)
//Route::get('/admin/build', [AdminBuildController::class, 'user'])->middleware('auth', 'admin')->name('adminbuild');
//Route::get('/user/build', [UserBuildController::class, 'user'])->middleware('auth')->name('userbuild');
//Route::get('/build', [BuildController::class, 'user'])->middleware('auth')->name('build');
Route::get('/admin/build', [BlockController::class, 'index'])->middleware('auth')->name('adminbuild');
Route::get('/user/build', [BlockController::class, 'index'])->middleware('auth')->name('userbuild');
Route::get('/build', [BlockController::class, 'index'])->middleware('auth')->name('build');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль прогноз коммуналки)
Route::get('/forecast/back', [ForecastController::class, 'index'])->middleware('auth', 'admin');
Route::patch('/forecast/updatetarrif', [ForecastController::class, 'update'])->middleware('auth', 'admin');
Route::patch('/forecast/synch', [ForecastController::class, 'synch'])->middleware('auth', 'admin');
Route::get('/forecast/export', [ForecastController::class, 'export'])->middleware('auth');

//Роуты для Front (Модуль прогноз коммуналки)
Route::get('/forecast', [ForecastController::class, 'user'])->middleware('auth', 'admin')->name('forecast');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль смета)
Route::get('/admin/count/back', [AdminCountController::class, 'index'])->middleware('auth', 'admin');
Route::patch('/admin/count/update', [AdminCountController::class, 'update'])->middleware('auth', 'admin');
Route::get('/admin/count/export', [AdminCountController::class, 'export'])->middleware('auth', 'admin');
Route::patch('/admin/count/synch', [AdminCountController::class, 'synch'])->middleware('auth', 'admin');

Route::get('/user/count/back', [CountController::class, 'index'])->middleware('auth');
Route::patch('/user/count/update', [CountController::class, 'update'])->middleware('auth');
Route::patch('/user/count/update/status', [CountController::class, 'status'])->middleware('auth');
Route::get('/user/count/export', [CountController::class, 'export'])->middleware('auth');

//Роуты для Front (Модуль смета)
Route::get('/admin/count', [AdminCountController::class, 'user'])->middleware('auth', 'admin')->name('admincount');
Route::get('/user/count', [CountController::class, 'user'])->middleware('auth')->name('usercount');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * 
 * 
 * 
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Роуты для Back (Модуль налоги)
Route::get('/admin/tax/back', [TaxController::class, 'index'])->middleware('auth', 'admin');
Route::post('/admin/tax/upload', [TaxController::class, 'upload'])->middleware('auth', 'admin');
Route::post('/admin/tax/upload/kbk', [TaxController::class, 'kbk'])->middleware('auth', 'admin');
Route::get('/admin/tax/export', [TaxController::class, 'export'])->middleware('auth', 'admin');


//Роуты для Front (Модуль налоги)
Route::get('/admin/tax', [TaxController::class, 'user'])->middleware('auth', 'admin')->name('admintax');
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
