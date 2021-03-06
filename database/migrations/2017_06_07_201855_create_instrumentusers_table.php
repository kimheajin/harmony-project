<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentusers', function (Blueprint $table) {
            /*----------------------------------------------------------------------------------------------------/
            /                                   사용자 간 연주한 연주 카운트 DB                                   /
            /----------------------------------------------------------------------------------------------------*/
            
              $table->integer('id')->unsigned()->index();
            $table->foreign('id')->references('id')->on('users');
            $table->string('instrument');
            $table->integer('count');
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
        Schema::dropIfExists('instrumentusers');
    }
}
