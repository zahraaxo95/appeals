<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('appeal_form', function (Blueprint $table) {
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
        Schema::dropIfExists('appeal_form');
    }
};
