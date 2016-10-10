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
            $table->increments('id');
            /*
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('emergency_phone', 10);
            $table->string('emergency_phone_optional', 15);
            $table->string('blood_type', 5);
            */
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('type')->default(7);
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}