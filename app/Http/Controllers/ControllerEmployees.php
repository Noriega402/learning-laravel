<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Departament;
use Illuminate\Http\Request;

class ControllerEmployees extends Controller
{
    //
    public function __invoke(){
        // $results = Employee::all();
        $results = Employee::paginate(); // la diferencia es que este muestra 15 registros

        $parametros =
        [
            'title' => 'Practicas Laravel',
            'subject' => 'Practicando manejo de rutas, controladores y vistas desde laravel 9',
            'collection' => $results
        ];
        return view('index',$parametros);
    }

    public function create(){
        $results = Departament::all();
        $parametros = [
            'title' => 'Crear empleado',
            'collection' => $results
        ];
        return view('createEmployee', $parametros);
    }

    public function insert(Request $request){
        // return $request->all();
        $empleados = new Employee();
        $empleados->employee_name = $request->name;
        $empleados->employee_surname = $request->surname;
        $empleados->employee_birthday = $request->birthday;
        $empleados->employee_gender = $request->gender;
        $empleados->employee_salary = $request->salary;
        $empleados->position_name = $request->position;
    }

    public function update($id){
        $encontrar = Employee::where('employee_id', $id)->get();
        $parametros = [
            'title' => 'Actualizar datos empleado',
            // 'id' => $id
            'empleado' => $encontrar,
        ];
        // return $encontrar;
        return view('updateEmployee', $parametros); //pasando parametros a la vista
    }

    public function delete($id){
        // $encontrar = Employee::find($id);
        $parametros = [
            'title' => 'Borrar Empleado',
            // 'id' => $id
            // 'empleado' => $encontrar,
        ];

        return view('deleteEmployee', $parametros); //pasando parametros a la vista
    }

    public function search($nombre){
        return "buscando empleados con nombre $nombre";
    }
}
