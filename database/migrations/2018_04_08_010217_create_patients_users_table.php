<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
         Schema::create('ptients_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('p_name');
            $table->text('p_detail');
         
            
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
          schema::drop('ptients_users');
    }
}
