<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contacts' , function (Blueprint $table){
          $table->increments('contact_id');
          $table->text('contact_name');
          $table->string('contact_email');
          $table->string('contact_number');
          $table->string('contact_subject');
          $table->longText('contact_message')->nullable();
          $table->string('contact_condition');
          $table->timestamps();
          $table->softDeletes('deleted_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
