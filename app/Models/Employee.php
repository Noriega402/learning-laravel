<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'employee_surname',
        'employee_birthday',
        'employee_gender',
        'employee_salary',
        'position_name',
        'departament_id',
        'slug',
    ];

    protected $guarded = ['token', 'created_at', 'updated_at',];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
