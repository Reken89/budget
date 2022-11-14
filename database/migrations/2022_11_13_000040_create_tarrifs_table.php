<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarrifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarrifs', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('mounth');
            $table->decimal('heat-one', 15, 3);
            $table->decimal('heat-two', 15, 3);
            $table->decimal('drainage-one', 15, 3);
            $table->decimal('drainage-two', 15, 3);
            $table->decimal('negative-one', 15, 3);
            $table->decimal('negative-two', 15, 3);
            $table->decimal('water-one', 15, 3);
            $table->decimal('water-two', 15, 3);
            $table->decimal('power-one', 15, 3);
            $table->decimal('power-two', 15, 3);
            $table->decimal('trash-one', 15, 3);
            $table->decimal('trash-two', 15, 3);
            $table->decimal('disposal-one', 15, 3);
            $table->decimal('disposal-two', 15, 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarrifs');
    }
}

