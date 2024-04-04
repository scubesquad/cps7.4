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
        Schema::create('tb_cps_holidays', function (Blueprint $table) {
            $table->increments('branch_holiday_id');
            $table->integer('branch_id')->nullable();
            $table->boolean('monday')->unsigned()->default(false);
            $table->tinyInteger('tuesday')->default(0);
            $table->tinyInteger('wednesday')->default(0);
            $table->tinyInteger('thursday')->default(0);
            $table->tinyInteger('friday')->default(0);
            $table->tinyInteger('saturday')->default(0);
            $table->tinyInteger('sunday')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cps_holidays');
    }
};
