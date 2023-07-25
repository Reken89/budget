<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporting', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('mounth');
            $table->string('meaning', 20);
            $table->string('title', 2000);
            $table->string('kbk', 20);
            $table->decimal('approved', 14, 2);
            $table->decimal('fulfilled', 14, 2);
            $table->decimal('unused', 14, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporting');
    }
}

