<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cps_chequeseries', function (Blueprint $table) {
            $table->integer('series_id', true);
            $table->integer('series_transationcode')->nullable();
            $table->integer('series_branchcode')->nullable();
            $table->integer('serise_branchcode_branch')->nullable();
            $table->unsignedInteger('series_from')->nullable();
            $table->unsignedInteger('series_to')->nullable();
            $table->unsignedInteger('series_lastno')->nullable();
            $table->integer('serise_Bank')->nullable();
            $table->string('branch_sub_code', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cps_chequeseries');
    }
};
