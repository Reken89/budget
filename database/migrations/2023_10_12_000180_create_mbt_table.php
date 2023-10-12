<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMbtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbt', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('mounth');
            $table->string('title', 1500);
            $table->decimal('approved', 14, 1);
            $table->decimal('expenses', 14, 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mbt');
    }
}
