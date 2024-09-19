<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration // الادارات الفرعية
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('administration_id');
            $table->timestamps();
        
            $table->foreign('administration_id')
                  ->references('id')
                  ->on('administrations')
                  ->onDelete('cascade');
        });
        
        
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisions');
    }
};
