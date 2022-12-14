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
        $collection= Employee::paginate(); // la diferencia es que este muestra 15 registros

        return view('index',compact('collection'));
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
        return redirect()->route('dashboard')->with('success','Employee created with success!');
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

        return redirect()->route('dashboard')->with('deleted', 'Employee deleted with success!'); //pasando parametros a la vista
    }

    public function search($nombre){
        return "buscando empleados con nombre $nombre";
    }

    public function update(Request $request, Employee $employee){
        $fullname = $request->employee_name.' '.$request->employee_surname;
        $slug = Str::slug($fullname,'-');
        $request['slug'] = $slug; //agregar un elemento al array
        // return $request->all();
        $employee->update($request->all());

        return redirect()->route('dashboard')->with('updated','Employee updated!');
    }
}
