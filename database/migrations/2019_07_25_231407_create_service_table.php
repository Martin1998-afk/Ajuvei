<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table ->string('description');
            $table->boolean('active');
            $table->timestamps();
            
        });
        Schema::create('service_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id')->unsigned();
            $table->integer('prestamista_id')->unsigned();
            $table->boolean('active');
            $table->timestamps();
            
            //relacion de llaves foraneas
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('prestamista_id')->references('id')->on('prestamistas')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('services');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');    
        
        
    }
}
