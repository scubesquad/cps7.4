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
        Schema::create('tb_cps_transactioncodes', function (Blueprint $table) {
            $table->integer('transactioncode_id', true);
            $table->integer('transactioncode')->nullable();
            $table->string('transactioncodedescription', 100)->nullable();
            $table->string('alphacode', 6)->nullable();
            $table->tinyInteger('transactionstatus')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cps_transactioncodes');
    }
};
