<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {

            $table->increments('id');
            $table->string('number',20);

            $table->timestamps();

        });

        /*Schema::table('phones', function(Blueprint $table)
        {
            $table->foreign('student_id')->references('id')->on('orders')->onDelete('cascade');

        });*/
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phones');
    }
}
