<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/login');
});
Auth::routes();


// Employee route using EmployeeController
Route::group(['middleware'=>[\App\Http\Middleware\IsAdminMiddleware::class]], function(){
    // Route::get('/', function () {
    //     return redirect('/employee');
    // });
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/add', [EmployeeController::class, 'store'])->name('employee.store');
    Route::delete('/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    Route::get('/edit/{employee}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/update/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/show/{employee}', [EmployeeController::class, 'show'])->name('employee.show');
});

Route::group(['middleware'=>[\App\Http\Middleware\IsManagerMiddleware::class]], function(){
    // Route::get('/', function () {
    //     return redirect('/employeelist');
    // });
    Route::get('/employeelist', [EmployeeController::class, 'list'])->name('employee.list');
});

