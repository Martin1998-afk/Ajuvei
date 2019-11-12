<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Contratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('description');
            $table->string('address');
            $table->string('cp');
            $table->boolean('active')->nullable();
            $table->timestamps();
        });

        Schema::create('contratos',function(Blueprint $table){
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('prestamista_id')->unsigned();
            $table->integer('servicio_id')->unsigned();
            $table->boolean('active');
            $table->timestamps(); 

              //relacion de llaves foraneas
        $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('prestamista_id')->references('id')->on('prestamistas')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('servicio_id')->references('id')->on('service')->onUpdate('cascade')->onDelete('cascade');

        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::dropIfExists('contratos');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('prestamistas');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Schema::dropIfExists('service');*/
    }
}
