<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('appointments_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('detail');
            $table->text('schdule');
            $table->text('doctor_id');
            
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
         schema::drop('appointments_users');
    }
}
