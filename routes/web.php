<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DesaOrdersController;
use App\Http\Controllers\DesaCouponsController;

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/desaOrders', [DesaOrdersController::class, 'index'])->name('desaOrders.index');
Route::get('/coupons', [DesaCouponsController::class, 'index'])->name('coupons.index');
Route::get('/coupons/create', [DesaCouponsController::class, 'create'])->name('coupons.create');
Route::post('/coupons', [DesaCouponsController::class, 'store'])->name('coupons.store');
Route::get('/coupons/{id}/edit', [DesaCouponsController::class, 'edit'])->name('coupons.edit');
Route::put('/coupons/{id}', [DesaCouponsController::class, 'update'])->name('coupons.update');
Route::delete('/coupons/{id}', [DesaCouponsController::class, 'destroy'])->name('coupons.destroy');
Route::get('/', function () {
    return view('welcome');
});
