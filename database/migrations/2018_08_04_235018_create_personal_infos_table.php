<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('per_info_id');
            $table->integer('user_id');
            $table->string('date_of_birth');
            $table->string('country');
            $table->string('city');
            $table->string('area');
            $table->string('mobile');
            $table->text('bio');
            $table->string('personal_photo');
            $table->string('current_position');
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
        Schema::dropIfExists('personal_infos');
    }
}
