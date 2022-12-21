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
        $empleados->save();

        return redirect()->route('employee.index')->with('success','Employee created with success!');
    }

    public function actualizar($id){
        $encontrar = Employee::where('id', $id)->get();
        $departaments = Departament::all();
        $parametros = [
            'title' => 'Actualizar datos empleado',
            'empleado' => $encontrar,
            'collection' => $departaments,
        ];
        // return $parametros;
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

    public function update(Request $request, $id){
        $search = Employee::find($id);
        // return $search;
        $search->employee_name = $request->name;
        $search->employee_surname = $request->surname;
        $search->employee_birthday = $request->birthday;
        $search->employee_gender = $request->gender;
        $search->employee_salary = $request->salary;
        $search->position_name = $request->position;
        $search->departament_id = $request->departament;
        $search->save();
        // return $search;
        // return $request->all();

        return redirect()->route('employee.update')->with('updated','Employee updated!');
    }
}
