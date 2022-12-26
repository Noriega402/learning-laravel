<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Departament;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\InsertEmployee; //REGLAS DE VALIDACION DE FORMULARIOs

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

    public function insert(InsertEmployee $request){
        $fullname = $request->employee_name.' '.$request->employee_surname;
        $slug = Str::slug($fullname,'-');
        $request['slug'] = $slug; //agregar un elemento al array
        // return $request->all();
        $employees = Employee::create($request->all());
        return redirect()->route('employee.index')->with('success','Employee created with success!');
    }

    public function actualizar($slug){
        $search = Employee::where('slug','=',$slug)->get();
        // return $search;
        $departaments = Departament::all(); // traer todos los departamentos
        $parametros = [
            'title' => 'Actualizar datos empleado',
            'empleado' => $search,
            'collection' => $departaments,
        ];
        return view('updateEmployee', $parametros); //pasando parametros a la vista
    }

    public function destroy($id){
        $search = Employee::find($id);
        $search->delete();

        return redirect()->route('employee.index')->with('deleted', 'Employee deleted with success!'); //pasando parametros a la vista
    }

    public function search($nombre){
        return "buscando empleados con nombre $nombre";
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->employee_name = $request->name;
        $employee->employee_surname = $request->surname;
        $employee->employee_birthday = $request->birthday;
        $employee->employee_gender = $request->gender;
        $employee->employee_salary = $request->salary;
        $employee->position_name = $request->position;
        $employee->departament_id = $request->departament;
        $employee->save();

        return redirect()->route('employee.index')->with('updated','Employee updated!');
    }
}
