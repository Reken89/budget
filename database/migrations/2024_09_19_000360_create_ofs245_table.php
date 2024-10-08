<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfs245Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofs245', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('ekr_id');
            $table->integer('mounth');
            $table->integer('status');
            $table->decimal('lbo', 15, 2);
            $table->decimal('prepaid', 15, 2);
            $table->decimal('credit_year_all', 15, 2);
            $table->decimal('credit_year_term', 15, 2);
            $table->decimal('debit_year_all', 15, 2);
            $table->decimal('debit_year_term', 15, 2);
            $table->decimal('fact_all', 15, 2);
            $table->decimal('fact_mounth', 15, 2);
            $table->decimal('kassa_all', 15, 2);
            $table->decimal('kassa_mounth', 15, 2);
            $table->decimal('credit_end_all', 15, 2);
            $table->decimal('credit_end_term', 15, 2);
            $table->decimal('debit_end_all', 15, 2);
            $table->decimal('debit_end_term', 15, 2);
            $table->decimal('return_old_year', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofs245');
    }
}



