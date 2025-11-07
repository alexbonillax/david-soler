<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DesaOrdersController;
use App\Http\Controllers\DesaCouponsController;
use App\Http\Controllers\DesaProductsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/down2', function () {
    return view('down2');
})->name('down2');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('/empleados', [EmpleadoController::class, 'index']);
    Route::get('/desaOrders', [DesaOrdersController::class, 'index'])->name('desaOrders.index');
    Route::get('/coupons', [DesaCouponsController::class, 'index'])->name('coupons.index');
    Route::get('/coupons/create', [DesaCouponsController::class, 'create'])->name('coupons.create');
    Route::post('/coupons', [DesaCouponsController::class, 'save'])->name('coupons.store');
    Route::get('/coupons/{coupon}', [DesaCouponsController::class, 'edit'])->name('coupons.edit');
    Route::post('/coupons/{coupon}', [DesaCouponsController::class, 'save'])->name('coupons.update');
    Route::delete('/coupons/{coupon}', [DesaCouponsController::class, 'destroy'])->name('coupons.destroy');
    Route::get('/desaorders2', [DesaOrdersController::class, 'index2'])->name('desaorders2');
    Route::get('/products', [DesaProductsController::class, 'index'])->name('products.index');
    Route::get('/products/create', [DesaProductsController::class, 'create'])->name('products.create');
    Route::post('/products', [DesaProductsController::class, 'save'])->name('products.store');
    Route::get('/products/{product}', [DesaProductsController::class, 'edit'])->name('products.edit');
    Route::post('/products/{product}', [DesaProductsController::class, 'save'])->name('products.update');
    Route::delete('/products/{product}', [DesaProductsController::class, 'destroy'])->name('products.destroy');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
