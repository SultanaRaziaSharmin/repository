<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointment1UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('appointment1_users', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('doctor_id');
            $table->string('user_id');
            $table->string('name');
            $table->string('detail');
            $table->string('schedule');
            $table->string('doctor');


            $table->rememberToken();
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
        Schema::drop('appointment1_users');
    }
}
