<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EmployeeController, StudentController, HomeController, StudentClassController, LessonController,
    PeriodController
};


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

Route::get('/', function () {
    return redirect('/home');
});
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::middleware(['admin'])->group(function (){
        Route::resource('students',         StudentController::class);
        Route::get('/cetak-absensi',        [CetakAbsensiController::class, 'index']);
        Route::get('/cetak-absensi',        [CetakAbsensiController::class, 'index']);
        Route::resource('classes',          StudentClassController::class);
        Route::resource('lessons',          LessonController::class);
        Route::resource('periods',          PeriodController::class);
        Route::resource('employees',        EmployeeController::class);
    });
});


