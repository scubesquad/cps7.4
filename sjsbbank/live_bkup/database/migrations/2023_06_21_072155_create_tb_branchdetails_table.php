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
        Schema::create('tb_branchdetails', function (Blueprint $table) {
            $table->integer('branch_id', true);
            $table->string('branch_code', 10)->nullable();
            $table->string('branch_name', 100)->nullable();
            $table->string('branch_micr', 20)->nullable();
            $table->string('branch_atparmicrcode', 20)->nullable();
            $table->string('branch_address1', 85)->nullable();
            $table->string('branch_address2', 65)->nullable();
            $table->integer('branch_country_id')->default(0);
            $table->integer('branch_state_id')->nullable();
            $table->string('branch_telephone1', 12)->nullable();
            $table->string('branch_telephone2', 12)->nullable();
            $table->string('branch_contactperson1', 50)->nullable();
            $table->string('branch_contactperson2', 50)->nullable();
            $table->string('branch_contactpersonmobile1', 50)->nullable();
            $table->string('branch_contactpersonmobile2', 50)->nullable();
            $table->string('branch_email1', 30)->nullable();
            $table->string('branch_email2', 30)->nullable();
            $table->string('branch_holiday', 20)->nullable();
            $table->string('branch_neftifsccode', 20)->nullable();
            $table->text('branch_printers')->nullable();
            $table->float('branch_working_hours', 10, 0)->nullable();
            $table->boolean('branch_clearingthrough')->default(false);
            $table->boolean('branch_clearingcenter')->default(false);
            $table->string('clr_bank_code', 15)->nullable();
            $table->integer('clr_bank_city')->nullable();
            $table->unsignedInteger('branch_City_Code')->nullable();
            $table->string('branch_Services', 100)->nullable();
            $table->string('branch_reg_busi_hrs', 100)->nullable();
            $table->string('branch_half_busi_hrs', 100)->nullable();
            $table->string('branch_sunday_working', 100)->nullable();
            $table->string('branch_tollfree_no', 20)->nullable();
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
        Schema::dropIfExists('tb_branchdetails');
    }
};
