<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('employee_surname');
            $table->date('employee_birthday');
            $table->integer('employee_gender');
            $table->double('employee_salary',8,2);
            $table->string('position_name');
            $table->integer('departament_id')->nullable();
            $table->foreign('departament_id')
                    ->references('id')
                    ->on('departaments')
                    ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
