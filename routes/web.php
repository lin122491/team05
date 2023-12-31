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

    Route::delete('school/delete/{id}', [SchoolController::class, 'destroy'])->where('id', '[0-9]+')->name('school.destroy');

    Route::get('school/create', [SchoolController::class, 'create'])->name('school.create');

    Route::get('school/{id}/edit', [SchoolController::class, 'edit'])->where('id', '[0-9]+')->name('school.edit');

    Route::patch('school/update/{id}', [SchoolController::class, 'update'])->where('id', '[0-9]+')->name('school.update');
// 儲存新學校資料
    Route::post('school/store', [SchoolController::class, 'store'])->where('id', '[0-9]+')->name('school.store');

    Route::get('mes', [MesController::class, 'index'])->name('mes.index');

    Route::get('mes/{id}', [MesController::class, 'show'])->where('id', '[0-9]+')->name('mes.show');

    Route::get('mes/{id}/edit', [MesController::class, 'edit'])->where('id', '[0-9]+')->name('mes.edit');

    Route::delete('mes/delete/{id}', [MesController::class, 'destroy'])->where('id', '[0-9]+')->name('mes.destroy');

    Route::get('mes/create', [MesController::class, 'create'])->name('mes.create');

    Route::get('mes/{id}/edit', [MesController::class, 'edit'])->where('id', '[0-9]+')->name('mes.edit');
    Route::patch('mes/update/{id}', [MesController::class, 'update'])->where('id', '[0-9]+')->name('mes.update');