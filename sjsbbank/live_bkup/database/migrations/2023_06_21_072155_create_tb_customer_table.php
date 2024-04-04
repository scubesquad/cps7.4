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
        Schema::create('tb_customer', function (Blueprint $table) {
            $table->integer('cust_id', true)->index('cust_id');
            $table->string('cust_short_name', 30)->nullable();
            $table->string('cust_name', 50)->nullable();
            $table->text('cust_address')->nullable();
            $table->string('cust_acc_no', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_customer');
    }
};
