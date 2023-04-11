<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Customer\CustomerController;
use App\Http\Controllers\Admin\Warehouse\WarehouseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::middleware('auth:admin')->group( function(){
Route::get('admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
// });
Route::get('/',[AuthController::class,'index'])->name('login');
Route::get('logout', [AuthController::class, 'signOut'])->name('signout');
Route::post('admin/login',[AuthController::class,'authenticate'])->name('admin.login');
Route::resource('/customer',CustomerController::class)->names('admin.customer');

//Add Warehouse
Route::get('warehouse',[WarehouseController::class,'index'])->name('admin.warehouse.index');
Route::get('warehouse/create',[WarehouseController::class,'create'])->name('admin.warehouse.create');
Route::post('warehouse/store',[WarehouseController::class,'store'])->name('admin.warehouse.store');
// });

