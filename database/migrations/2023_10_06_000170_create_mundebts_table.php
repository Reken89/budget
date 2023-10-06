<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMundebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mundebts', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('mounth');
            $table->decimal('mundeb', 14, 1);
            $table->decimal('servmundeb', 14, 1);
            $table->decimal('maxmunded', 14, 1);
            $table->decimal('bank', 14, 2);
            $table->decimal('credit', 14, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mundebts');
    }
}

