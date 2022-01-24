<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->String('name')->nullable();
            $table->String('gender')->nullable();
            $table->date('dob')->nullable();
            $table->String('id_card')->nullable();
            $table->date('date_in')->nullable();
            $table->String('position')->nullable();
            $table->String('graduate')->nullable();
            $table->integer('salary')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->String('image')->nullable();
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
}
