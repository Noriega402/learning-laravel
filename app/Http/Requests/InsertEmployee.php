<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'employee_name' => 'required',
            'employee_surname' => 'required',
            'employee_birthday' => 'required|date',
            'employee_gender' => 'required|numeric',
            'employee_salary' => 'required|numeric',
            'position_name' => 'required',
            'departament_id' => 'required|numeric',
        ];
    }

    public function attributes() // para modificar el nombre de los campos
    {
        return[
            'employee_name' => 'nombre de empleado',
            'employee_surname' => 'apellido de empleado',
            'employee_birthday' => 'año de nacimiento',
            'employee_gender' => 'genero',
            'employee_salary' => 'salario',
            'position_name' => 'puesto en la empresa',
            'departament_id' => 'departamento',
        ];
    }

    public function messages() // para mensajes personalizados en los inputs
    {
        return[
            'employee_name.required' => 'Debe ingresar el nombre del empleado',
            'employee_surname.required' => 'Debe ingresar el apellido del empleado',
            'employee_birthday.required' => 'Debe ingresar fecha de nacimiento',
            'employee_birthday.date' => 'Debe ser una fecha valida',
            'employee_gender.required' => 'Debe seleccionar un genero',
            'employee_gender.numeric' => 'Genero no valido',
            'employee_salary.required' => 'Debe ingresar un monto',
            'employee_salary.numeric' => 'Debe ser un numero',
            'position_name.required' => 'Debe ingresar el nombre del puesto',
            'departament_id.required' => 'Debe seleccionar un departamento',
            'departament_id.numeric' => 'Departamento no valido',
        ];
    }
}
