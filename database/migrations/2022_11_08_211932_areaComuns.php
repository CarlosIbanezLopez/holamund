<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaComuns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('edificio_id')->nullable();
            $table->string('nombre'); 
            $table->timestamps();
            $table->foreign('edificio_id')->references('id')->on('edificio')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
