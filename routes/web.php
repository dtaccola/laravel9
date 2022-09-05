<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AveController;

Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AveController::class)->group(function () {
    Route::delete('/aves/{uuid}', 'destroy')->name('aves.destroy');
    Route::put('/aves/{uuid}', 'update')->name('aves.update');
    Route::get('/aves/{uuid}/edit', 'edit')->name('aves.edit');
    Route::get('/aves', 'index')->name('aves.index');
    Route::get('/aves/create', 'create')->name('aves.create');
    Route::post('/aves/store', 'store')->name('aves.store');
    Route::get('/aves/{uuid}', 'show')->name('aves.show');
});
