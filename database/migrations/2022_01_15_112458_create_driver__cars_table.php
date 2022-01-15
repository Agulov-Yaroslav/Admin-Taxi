<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverCarsTable extends Migration
{

    public function up()
    {
        Schema::create('driver__cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('car_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('driver__cars');
    }
}
