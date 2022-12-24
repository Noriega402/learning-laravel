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
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required|date',
            'gender' => 'required|numeric',
            'salary' => 'required|numeric',
            'position' => 'required',
            'departament' => 'required|numeric',
        ];
    }

    public function attributes() // para modificar el nombre de los campos
    {
        return[
            'name' => 'nombre de empleado',
            'surname' => 'apellido de empleado',
            'birthday' => 'año de nacimiento',
            'gender' => 'genero',
            'salary' => 'salario',
            'position' => 'puesto en la empresa',
            'departament' => 'departamento',
        ];
    }

    public function messages() // para mensajes personalizados en los inputs
    {
        return[
            'name.required' => 'Debe ingresar el nombre del empleado',
            'surname.required' => 'Debe ingresar el apellido del empleado',
            'birthday.required' => 'Debe ingresar fecha de nacimiento',
            'birthday.date' => 'Debe ser una fecha valida',
            'gender.required' => 'Debe seleccionar un genero',
            'gender.numeric' => 'Genero no valido',
            'salary.required' => 'Debe ingresar un monto',
            'salary.numeric' => 'Debe ser un numero',
            'position.required' => 'Debe ingresar el nombre del puesto',
            'departament.required' => 'Debe seleccionar un departamento',
            'departament.numeric' => 'Departamento no valido',
        ];
    }
}
