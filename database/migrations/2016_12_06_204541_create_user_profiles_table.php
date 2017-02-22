<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('image_path', 512)->default('user.png');
            $table->string('business_phone')->nullable()->default('');
            $table->string('business_address')->nullable()->default('');
            $table->string('home_phone')->nullable()->default('');
            $table->string('home_address')->nullable()->default('');
            $table->string('other_address')->nullable()->default('');
            $table->string('other_phone')->nullable()->default('');
            $table->string('simple_note', 512)->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
