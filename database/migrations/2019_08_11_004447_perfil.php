<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function(Blueprint $table)
        {
            
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('tipo');
            $table->string('niveleducacion');
            $table->string('necesidad');
            $table->string('edad');
            $table->string('sexo');
            $table->string('tallacamisa');
            $table->string('decidisteparticipar');
            $table->string('estarinformadocomunidad');
            $table->string('estarinformadoboletin');
                        
        });

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil');
    }
}