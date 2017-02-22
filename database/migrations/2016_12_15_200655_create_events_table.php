<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->tinyInteger('allDay')->default(0);
            $table->string('start', 64);
            $table->string('end', 64);
            $table->string('url', 255);
            $table->tinyInteger('editable')->default(1);
            $table->tinyInteger('startEditable')->default(1);
            $table->tinyInteger('durationEditable')->default(1);
            $table->tinyInteger('resourceEditable')->default(1);
            $table->tinyInteger('overlap')->default(1);
            $table->string('color')->default('');
            $table->string('backgroundColor')->default('');
            $table->string('borderColor')->default('');
            $table->string('textColor')->default('');
            $table->timestamps();
            $table->softDeletes();
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
