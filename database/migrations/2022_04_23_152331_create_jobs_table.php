<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('jobPic')->nullable();
            $table->string('jobName');
            $table->text('jobDesc')->nullable();
            $table->string('jobLocation')->nullable();
            $table->unsignedInteger('jobPay')->nullable();
            $table->string('jobSkill')->nullable();
            $table->string('jobType')->nullable();
            //$table->rememberToken();
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
        Schema::dropIfExists('jobs');
    }
}
