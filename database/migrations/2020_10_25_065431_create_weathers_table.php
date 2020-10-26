<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weathers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('date');
            $table->string('avghumidity');
            $table->string('avgtemp_c');
            $table->string('avgtemp_f');
            $table->string('avgvis_km');
            $table->string('avgvis_miles');
            $table->string('daily_chance_of_rain');
            $table->string('daily_chance_of_snow');
            $table->string('daily_will_it_rain');
            $table->string('daily_will_it_snow');
            $table->string('maxtemp_c');
            $table->string('maxtemp_f');
            $table->string('maxwind_kph');
            $table->string('maxwind_mph');
            $table->string('mintemp_c');
            $table->string('mintemp_f');
            $table->string('totalprecip_in');
            $table->string('totalprecip_mm');
            $table->string('uv');
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
        Schema::dropIfExists('weathers');
    }
}
