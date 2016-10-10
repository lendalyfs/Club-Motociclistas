<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('emergency_phone', 10);
            $table->string('emergency_phone_optional', 15)->nullable();
            $table->string('blood_type', 5);
            $table->string('street');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('delegacion_municipio');
            $table->string('state');
            $table->string('experiencia');
            $table->string('nss')->nullable();
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
        Schema::dropIfExists('user_metas');
    }
}
