<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadosproducto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->boolean('vigente');
            $table->timestamp('fecha');
        });
        Schema::create('estadospedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->boolean('vigente');
            $table->timestamp('fecha');
        }); 
        Schema::create('tiposcategoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->boolean('vigente');
            $table->timestamp('fecha');
        }); 
        Schema::create('tiposdespacho', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->boolean('vigente');
            $table->timestamp('fecha');
        });
        Schema::create('tiposservicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50)->unique();
            $table->boolean('vigente');
            $table->timestamp('fecha');
        });           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('estadosproducto');
        Schema::drop('estadospedidos');
        Schema::drop('tiposcategoria');
        Schema::drop('tiposdespacho');
        Schema::drop('tiposservicio');
    }
}
