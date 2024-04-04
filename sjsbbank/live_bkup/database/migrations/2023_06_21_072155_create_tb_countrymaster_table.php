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
        Schema::create('tb_countrymaster', function (Blueprint $table) {
            $table->integer('country_id', true);
            $table->string('country_name', 50)->nullable();
            $table->string('country_code', 3)->nullable();
            $table->integer('country_isdelete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_countrymaster');
    }
};
