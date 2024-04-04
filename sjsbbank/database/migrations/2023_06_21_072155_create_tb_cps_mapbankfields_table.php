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
        Schema::create('tb_cps_mapbankfields', function (Blueprint $table) {
            $table->integer('field_id', true);
            $table->string('field_name', 50)->nullable();
            $table->string('bank_field_name', 50)->nullable();
            $table->integer('field_min_length')->nullable();
            $table->integer('field_max_length')->nullable();
            $table->integer('bank_field_length')->nullable();
            $table->string('field_data_type', 50)->nullable();
            $table->string('field_format', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cps_mapbankfields');
    }
};
