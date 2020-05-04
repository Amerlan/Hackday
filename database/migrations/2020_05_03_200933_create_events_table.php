<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
          $table->id();
          $table->string('title');   # title of event
          $table->longText('description')->nullable();  # description of event
          $table->date('when');  # date of event
          $table->boolean('format')->default(1); # online/offline
          $table->string('location'); # where event will be
          $table->integer('orgtype')->unsigned();
          $table->integer('orgid')->unsigned()->nullable();
          $table->timestamps();

          $table->foreign('orgtype')->references('id')->on('organization_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
