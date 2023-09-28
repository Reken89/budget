<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->integer('mounth');
            $table->string('meaning', 20);
            $table->decimal('jan', 14, 1);
            $table->decimal('feb', 14, 1);
            $table->decimal('mar', 14, 1);
            $table->decimal('apr', 14, 1);
            $table->decimal('may', 14, 1);
            $table->decimal('jun', 14, 1);
            $table->decimal('jul', 14, 1);
            $table->decimal('aug', 14, 1);
            $table->decimal('sep', 14, 1);
            $table->decimal('oct', 14, 1);
            $table->decimal('nov', 14, 1);
            $table->decimal('dec', 14, 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}

