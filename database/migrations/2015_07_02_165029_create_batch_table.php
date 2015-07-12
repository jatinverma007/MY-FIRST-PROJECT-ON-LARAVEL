<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('registration_open');
            $table->timestamp('registration_close');
            $table->timestamp('start');
            $table->timestamp('close');
            $table->string('venue');
            $table->timestamps();
        });
      /*  Schema::table('batches', function(Blueprint $table)
        {
            $table->foreign('course_id')->references('id')->on('orders')->onDelete('cascade');

        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('batches');
    }
}
