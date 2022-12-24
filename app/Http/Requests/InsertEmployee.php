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

    public function attributes()
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
}
