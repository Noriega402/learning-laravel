<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEmployees;
use Illuminate\Routing\RouteGroup;

use function Ramsey\Uuid\v1;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// ------------------------------------
// probando rutas desde laravel
Route::get('cursos/{curso}', function ($curso){
    return "Estas en el curso de $curso";
});

Route::get('matematicas/{tema}',function($tema){
    return "Matematicas: <code>$tema</code>";
});

Route::get('curses/{curse}/{category}/', function ($curse,$category) {
    return "This is curse of <strong>$curse</strong> into the category <strong>$category</strong>";
});
// ------------------------------------


// proyecto formal
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', ControllerEmployees::class);

// Route::get('crear', [ControllerEmployees::class, 'create']);
// Route::get('insertar/{employee}', [ControllerEmployees::class, 'insert']); //{employee} desde controlador de funcion insert
// Route::get('actualizar/{id}', [ControllerEmployees::class, 'update']); //{id} desde controlador de funcion update
// Route::get('borrar/{id}', [ControllerEmployees::class, 'delete']); // {id} desde controlador de funcion delete
// Route::get('buscar/{nombre}', [ControllerEmployees::class, 'search']);// {nombre} desde controlador de funcion search

//ROUTE-GROUPS
// para poder agrupar todas las rutas de una misma URL o que usen el mismo controlador
Route::controller(ControllerEmployees::class)->group(function(){
    Route::get('/', '__invoke')->name('employee.index');
    Route::get('crear','create')->name('employee.crear');
    Route::get('insertar/{employee}', 'insert')->name('employee.insertar');
    Route::get('actualizar/{id}', 'actualizar')->name('employee.actualizar');
    Route::get('borrar/{id}', 'delete')->name('employee.borrar');
    Route::get('buscar/{nombre}', 'search')->name('employee.buscar');

    Route::post('crear','insert')->name('employee.insert'); // insertar
    Route::put('actualizar/{id}', 'update')->name('employee.update'); //actualizar
    Route::delete('borrar/{id}', 'destroy')->name('employee.delete');// eliminar
});