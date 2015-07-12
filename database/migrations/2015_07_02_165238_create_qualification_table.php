<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('start');
            $table->timestamp('end');
            $table->timestamps();
        });
      /*  Schema::table('qualifications', function (Blueprint $table){
        $table->foreign('college_id')->references('id')->on('orders')->onDelete('cascade');
        $table->foreign('specilization_id')->on('orders')->onDelete('cascade');
        $table->foreign('degree_id')->references('id')->on('orders')->onDelete('cascade');
        $table->foreign('faculties_id')->references('id')->on('orders')->onDelete('cascade');

    });
    }
*/
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('qualifications');
    }
}
