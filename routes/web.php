<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SettingController;

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
    return view('backend.home.home');
});

Route::get('/setting',[SettingController::class, 'index'])->name('setting');
Route::post('/setting',[SettingController::class, 'store'] )->name('web.setting');


Route::get('/setting/view',[SettingController::class, 'show']);
