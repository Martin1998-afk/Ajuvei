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
        Schema::create('prestamistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',150)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('description',500)->nullable();
            $table->string('address')->nullable();
            $table->boolean('active');
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