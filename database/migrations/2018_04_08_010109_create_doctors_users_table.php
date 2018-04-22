<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
         Schema::create('doctors_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('d_name');
            $table->text('d_designation');
         
            
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
        schema::drop('doctors_users');
    }
}
