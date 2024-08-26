<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AppointmentController;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('Vehiculos/{vehiculo}/edit', [VehiculoController::class, 'edit'])->name('Vehiculos.edit');
Route::get('Suppliers/{supplier}/edit', [SupplierController::class, 'edit'])->name('Suppliers.edit');
Route::get('Inventories/{inventory}/edit', [InventoryController::class, 'edit'])->name('Inventories.edit');
route::get('Clientss/{client}/edit', [ClientController::class, 'edit'])->name('clientss.edit');
Route::get('Appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('Appointments.edit');

Route::resource('products', ProductController::class);
Route::resource('Vehiculos', VehiculoController::class);
Route::resource('Suppliers', SupplierController::class);
Route::resource('Inventories', InventoryController::class);
Route::resource('Clientss', ClientController::class);
Route::resource('Appointments', AppointmentController::class);




    