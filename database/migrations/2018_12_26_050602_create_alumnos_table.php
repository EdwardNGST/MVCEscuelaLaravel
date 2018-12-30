<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('nc', 8);
            $table->string('nameStudent', 50);
            $table->enum('career', ['Administración', 'Arquitectura', 'Contador Público', 'Electromecánica', 'Gestión Empresarial', 'Sistemas Computacionales', 'ITICS']);
            $table->integer('age', false);
            $table->string('phone', 20)->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->primary('nc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
