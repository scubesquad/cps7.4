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
        Schema::create('tb_bankdetails', function (Blueprint $table) {
            $table->increments('bank_id');
            $table->string('bank_name', 100)->nullable();
            $table->unsignedInteger('bank_code')->nullable();
            $table->text('bank_address1')->nullable();
            $table->string('bank_address2', 36)->nullable();
            $table->integer('bank_country_id')->nullable();
            $table->integer('bank_state_id')->nullable();
            $table->string('bank_pin', 15)->nullable();
            $table->string('bank_contact_no1', 15)->nullable();
            $table->string('bank_contact_no2', 15)->nullable();
            $table->string('bank_contact_per1', 40)->nullable();
            $table->string('bank_contact_per2', 40)->nullable();
            $table->string('bank_contact_per_LL1', 20)->nullable();
            $table->string('bank_contact_per_LL2', 20)->nullable();
            $table->string('bank_emailid2', 30)->nullable();
            $table->string('bank_emailid', 40)->nullable();
            $table->string('bank_website', 40)->nullable();
            $table->text('bank_printers')->nullable();
            $table->boolean('is_branch_sub_code')->nullable();
            $table->integer('number_digit_sub_code')->nullable();
            $table->integer('starting_index_sub_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bankdetails');
    }
};
