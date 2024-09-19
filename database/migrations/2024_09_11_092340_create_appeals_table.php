<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppealsTable extends Migration
{
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->id();
            $table->string('civilId');
            $table->string('fullname');
            $table->string('phone');
            $table->text('appeal_reason');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appeals');
    }
}
