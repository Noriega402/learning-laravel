<?php

use App\Http\Controllers\ControllerEmployees;
use App\Http\Controllers\ProfileController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
    // return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('dashboard',[ControllerEmployees::class, '__invoke'])
    ->name('dashboard');

    Route::get('crear',[ControllerEmployees::class,'create'])
    ->name('employee.crear');

    Route::get('insertar/{employee}',[ControllerEmployees::class, 'insert'])
    ->name('employee.insertar');

    Route::get('actualizar/{slug}',[ControllerEmployees::class,'actualizar'])
    ->name('employee.actualizar');

    Route::get('borrar/{id}',[ControllerEmployees::class, 'delete'])
    ->name('employee.borrar');

    Route::get('buscar/{nombre}', [ControllerEmployees::class, 'search'])
    ->name('employee.buscar');

    Route::post('crear',[ControllerEmployees::class, 'insert'])
    ->name('employee.insert'); // insertar

    Route::put('actualizar/{id}', [ControllerEmployees::class, 'update'])
    ->name('employee.update'); //actualizar

    Route::delete('borrar/{id}', [ControllerEmployees::class, 'destroy'])
    ->name('employee.delete');// eliminar
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
