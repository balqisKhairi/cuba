<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuddentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studdents', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('studName');
            $table->unsignedInteger('studIC')->nullable();
            $table->string('studGender')->nullable();
            $table->unsignedInteger('studNum')->nullable();
            $table->text('studAddress')->nullable();
            $table->string('studEmail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('studPassword');
            $table->string('certificateId')->nullable();
            $table->string('studStatus')->nullable();
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
        Schema::dropIfExists('studdents');
    }
}
