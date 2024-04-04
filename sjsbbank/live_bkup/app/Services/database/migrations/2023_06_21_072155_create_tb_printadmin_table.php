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
        Schema::create('tb_printadmin', function (Blueprint $table) {
            $table->string('username', 50)->nullable();
            $table->string('password')->nullable();
            $table->dateTime('lastlogintime')->nullable();
            $table->integer('adminid', true);
            $table->integer('group_id')->nullable();
            $table->integer('incorrect_attempt')->nullable();
            $table->boolean('user_status')->default(true);
            $table->integer('password_status')->nullable();
            $table->integer('user_type')->nullable();
            $table->string('userid', 50)->nullable();
            $table->date('create_date')->nullable();
            $table->integer('is_temp_password')->nullable();
            $table->integer('updated_by')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_printadmin');
    }
};
