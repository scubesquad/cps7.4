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
        Schema::create('tb_cps_grouppermissions', function (Blueprint $table) {
            $table->integer('permission_id', true);
            $table->integer('group_id')->nullable();
            $table->string('page_accessible', 150)->nullable();
            $table->string('page_read', 2)->nullable();
            $table->string('page_write', 2)->nullable();
            $table->string('page_edit', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cps_grouppermissions');
    }
};
