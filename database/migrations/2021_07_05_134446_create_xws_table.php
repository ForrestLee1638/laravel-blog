<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bt',255);
            $table->string('lx',255);
            $table->string('nr',3555);
            $table->timestamp('fbsj')->useCurrent();
            $table->string('fbr',255);
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
        Schema::dropIfExists('xws');
    }
}
