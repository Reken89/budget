<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarrifs25Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarrifs25', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->decimal('tarrif_one', 15, 3);
            $table->decimal('tarrif_two', 15, 3);
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
        Schema::dropIfExists('tarrifs25');
    }
}

