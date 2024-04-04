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
        Schema::create('log_table', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('table_name', 32)->nullable();
            $table->string('name', 50)->nullable();
            $table->string('record_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('action_performed', 32)->nullable();
            $table->text('previous_details')->nullable();
            $table->text('details')->nullable();
            $table->text('message')->nullable();
            $table->dateTime('created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_table');
    }
};
