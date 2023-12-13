<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\MesController;
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
    return redirect('school');

});
    Route::get('school', [SchoolController::class, 'index'])->name('school.index');
    Route::get('school/{id}', [SchoolController::class, 'show'])->where('id', '[0-9]+')->name('school.show');
    Route::get('school/{id}/edit', [SchoolController::class, 'edit'])->where('id', '[0-9]+')->name('school.edit');
    Route::delete('school/delete/{id}', [SchoolController::class, 'destroy'])->where('id', '[0-9]+')->name('schoool.destroy');

    Route::get('mes', [MesController::class, 'index'])->name('mes.index');
    Route::get('mes/{id}', [MesController::class, 'show'])->where('id', '[0-9]+')->name('mes.show');
    Route::get('mes/{id}/edit', [MesController::class, 'edit'])->where('id', '[0-9]+')->name('mes.edit');
    Route::get('mes/{id}/edit', [MesController::class, 'edit'])->where('id', '[0-9]+')->name('mes.edit');
    Route::delete('mes/delete/{id}', [MessController::class, 'destroy'])->where('id', '[0-9]+')->name('mes.destroy');