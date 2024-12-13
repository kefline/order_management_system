<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

Route::get('/order/index', [OrdersController::class, 'orderslist'])->name('order.index');
Route::get('/order/add', [OrdersController::class, 'Addorders'])->name('order.add');

Route::get('/order-details/{id?}', [OrdersController::class, 'orderdetails'])->name('order.order-details');
// routes/web.php or api.php
Route::get('/order-details/{orderId}', [OrdersController::class, 'getOrderDetails']);


Route::post('/orders', [OrdersController::class, 'store'])->name('order.store');
// Route::get('/order/edit/{id}', [OrdersController::class, 'editorders'])->name('order.edit');
// Route::post('/order/update/{id}', [OrdersController::class, 'update'])->name('order.update');

Route::get('/order/edit/{id}', [OrdersController::class, 'orders_edit'])->name('order.edit');
// Route::post('/order/edit/{id}', [OrdersController::class, 'orders_update'])->name('order.update');
Route::post('/order/edit/{id}', [OrdersController::class, 'orders_update'])->name('order.update');




Route::get('/index', [CustomerController::class, 'customerlist'])->name('customer.index');
Route::post('/add-customer', [CustomerController::class, 'store'])->name('add.customer');
Route::get('/customer/edit/{id}',[CustomerController::class, 'editCustomers'])->name('customers.edit');
Route::post('/customer/update/{id}',[CustomerController::class, 'update'])->name('customer.update');

Route::get('/customer/delete/{id}', [CustomerController::class, 'deletecustomer'])->name('customer.delete');
Route::get('/order/delete/{id}', [OrdersController::class, 'deleteorder'])->name('order.delete');


