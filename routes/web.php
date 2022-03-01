<?php

use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\MetaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\HomeController;

Route::get('/login', function () {
    return view('backend.home.login');
});

Route::post('/login',[LoginController::class, 'store'])->name('login');

Route::get('/mycv', [HomeController::class, 'index'])->name('mycv');
Route::get('/', [HomeController::class, 'home']);
Route::get('/achivement', [HomeController::class, 'achivement'])->name('achivement');
Route::get('/whatToDo', [HomeController::class, 'whatToDo'])->name('whatToDo');
Route::get('/how-to-do', [HomeController::class, 'howToDo'])->name('howToDo');

/**
 * Backend Code
 */
Route::group(['middleware'=>'auth'], function(){
Route::get('/dashboard', function () {
    return view('backend.home.home');
});
Route::get('/setting',[SettingController::class, 'index'])->name('setting');
Route::post('/setting',[SettingController::class, 'store'] )->name('web.setting');


Route::get('/setting/view',[SettingController::class, 'show']);

Route::get('/setting/view/{id}',[SettingController::class, 'edit']);
Route::put('/setting/update/{id}',[SettingController::class, 'update'])->name('web.setting.update');

Route::get('/meta/tag', [MetaController::class, 'index'])->name('meta.tag');
Route::post('/meta/tags', [MetaController::class, 'store'])->name('web.tag');

Route::get('/meta/tag/edit', [MetaController::class, 'show']);
Route::get('/meta/tag/edit/{id}', [MetaController::class, 'edit'])->name('meta.edit');
Route::post('/meta/tag/edit/{id}', [MetaController::class, 'update'])->name('update.tag');
Route::get('/meta/tag/delete/{id}', [MetaController::class, 'destroy'])->name('meta.delete');
});