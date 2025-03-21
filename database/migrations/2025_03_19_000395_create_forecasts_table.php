<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForecastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forecasts', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('user_id');
            $table->decimal('volume_one', 15, 3);
            $table->decimal('volume_two', 15, 3);
            $table->decimal('sum_one', 15, 2);
            $table->decimal('sum_two', 15, 2);
            $table->string('title', 100);
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forecasts');
    }
}


