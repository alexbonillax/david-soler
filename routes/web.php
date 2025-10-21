<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DesaOrdersController;

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/desaOrders', [DesaOrdersController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
