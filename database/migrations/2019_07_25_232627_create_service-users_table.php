<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service-users', function (Blueprint $table) {
        
                $table->integer('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    
                $table->integer('service_id');
                $table->foreign('service_id')->references('id')->on('service')->onDelete('cascade');   
        });
    }

   
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service-users');
    }
}
