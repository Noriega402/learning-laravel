<?php

namespace Database\Factories;

use App\Models\Departament;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->firstName();
        $surname = $this->faker->lastName();
        $fullname = $name.' '.$surname;

        return [
            'employee_name' => $name,
            'employee_surname' => $surname,
            'employee_birthday' => $this->faker->date(),
            'employee_gender' => $this->faker->randomElement([1,0]),
            'employee_salary' => $this->faker->numberBetween($min = 1900, $max = 32500),
            'position_name' => $this->faker->jobTitle(),
            'departament_id' => Departament::inRandomOrder()->first(),
            'slug' => Str::slug($fullname,'-'),
            'created_at' => $this->faker->datetime(),
            'updated_at' => $this->faker->datetime(),
        ];
    }
}
