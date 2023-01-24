<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('work_id');
            $table->decimal('build_sum', 15, 2);
            $table->decimal('fu_sum', 15, 2);
            $table->decimal('contract_sum', 15, 2);
            $table->decimal('kassa_sum', 15, 2);
            $table->decimal('fact_sum', 15, 2);
            $table->string('number', 300);
            $table->string('period', 300);
            $table->string('creator', 100);
            $table->integer('year');
            $table->integer('mounth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs');
    }
}

