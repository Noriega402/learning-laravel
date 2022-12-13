<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new Employee();
        $e->employee_name = "Melany";
        $e->employee_surname = "Salazar";
        $e->employee_birthday = "2002-03-26";
        $e->employee_gender = 1;
        $e->employee_salary = 9500;
        $e->position_name = "Marketing";
        $e->departament_id  = 1;

        $e->save();
    }
}
