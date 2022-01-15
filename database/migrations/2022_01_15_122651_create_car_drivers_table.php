<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDriversTable extends Migration
{
    public function up()
    {
        Schema::create('car_drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('car_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_drivers');
    }
}
