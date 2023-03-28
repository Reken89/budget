<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForecastTarrifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forecast_tarrifs', function (Blueprint $table) {
            $table->id();
            $table->decimal('tarrif_one', 15, 3);
            $table->decimal('tarrif_two', 15, 3);
            $table->string('chapter', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forecast_tarrifs');
    }
}
