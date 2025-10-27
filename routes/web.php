<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DesaOrdersController;
use App\Http\Controllers\DesaCouponsController;

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/desaOrders', [DesaOrdersController::class, 'index'])->name('desaOrders.index');
Route::get('/coupons', [DesaCouponsController::class, 'index'])->name('coupons.index');
Route::get('/coupons/create', [DesaCouponsController::class, 'create'])->name('coupons.create');
Route::post('/coupons', [DesaCouponsController::class, 'save'])->name('coupons.store');
Route::get('/coupons/{coupon}', [DesaCouponsController::class, 'edit'])->name('coupons.edit');
Route::post('/coupons/{coupon}', [DesaCouponsController::class, 'save'])->name('coupons.update');
Route::delete('/coupons/{coupon}', [DesaCouponsController::class, 'destroy'])->name('coupons.destroy');
Route::get('/', function () {
    return view('welcome');
});
