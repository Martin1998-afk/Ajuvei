<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prestamistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamistas',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('apellidop');
            $table->string('apellidom');
            $table->string('email',150)->unique();
            $table->integer('service');
            $table->string('cellphone');
            $table->string('description',500);
            $table->string('colonia');
            $table->string('calle');
            $table->string('numext');
            $table->integer('cp');
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
        //
    }
}
