<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', function() {
    return view('login');
})->name('login');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'authenticate'])->name('login.submit');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home', [
            'title' => "Home"
        ]);
    });

    // Route::get('/employeedata', function() {
    //     return view('employeedata', [
    //         'title' => 'Employee Data'
    //     ]);
    // });

    Route::get('/employeedata', [EmployeeController::class, 'showEmployeeData'])->name('employee.data');
    Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
    Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');

    Route::get('/about', function () {
        return view('about', [
            'title' => "about"
        ]);
    });

    Route::get('/blog', function () {
        return view('blog', [
            'title' => "post"
        ]);
    });

    Route::get('/post', function () {
        return view('post', [
            'title' => "post"
        ]);
    });

    Route::get('blog/{slug}', [PostController::class, 'show']);
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/export-pdf', [EmployeeController::class, 'exportPdf'])->name('export.pdf');

});
