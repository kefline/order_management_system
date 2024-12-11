<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'loginPage'])->name('auth.login');

Route::get('/admin/index',[AdminController::class, 'index'])->name('admin.index');

Route::get('/order/index',[OrdersController::class, 'orderslist'])->name('order.index');
Route::get('/order/add',[OrdersController::class, 'Addorders'])->name('order.add');

Route::get('/order-details',[OrdersController::class, 'orderdetails'])->name('order.order-details');

Route::get('/index',[CustomerController::class, 'customerlist'])->name('customer.index');
