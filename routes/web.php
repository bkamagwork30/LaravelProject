<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index']);

Auth::routes();

Route::get('/home', function () {
    return redirect('/employee');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('index');
Route::resource('/employee', EmployeeController::class);

Route::resource('/department', DepartmentController::class);
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'search'])->name('employee.search');

Auth::routes(['verify'=>true]);
