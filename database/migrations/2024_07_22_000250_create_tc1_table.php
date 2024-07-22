<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTc1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc1', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('indicator_id');
            $table->integer('year');
            $table->integer('mounth');
            $table->integer('status');
            $table->decimal('average', 15, 2);
            $table->decimal('report', 15, 2);
            $table->decimal('classes', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tc1');
    }
}

