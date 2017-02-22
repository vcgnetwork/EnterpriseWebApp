<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_type_id')->unsigned()->default(2);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name')->index();
            $table->string('last_name')->index();
            $table->string('contact_preference')->default('email');
            $table->string('primary_phone')->default('000-000-0000');
            $table->tinyInteger('is_active')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
