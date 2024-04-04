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
        Schema::create('tb_printque', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('cps_unique_req')->nullable();
            $table->unsignedInteger('cps_micr_code')->nullable();
            $table->unsignedInteger('cps_branchmicr_code')->nullable();
            $table->string('cps_account_no', 15)->nullable();
            $table->string('cps_act_name', 45)->nullable();
            $table->unsignedInteger('cps_no_of_books')->nullable();
            $table->string('cps_dly_bearer_order', 1)->nullable();
            $table->unsignedInteger('cps_book_size')->nullable();
            $table->unsignedInteger('cps_tr_code')->nullable();
            $table->string('cps_atpar', 1)->nullable();
            $table->string('cps_act_jointname1', 45)->nullable();
            $table->string('cps_act_jointname2', 45)->nullable();
            $table->string('cps_auth_sign1', 35)->nullable();
            $table->string('cps_auth_sign2', 35)->nullable();
            $table->string('cps_auth_sign3', 35)->nullable();
            $table->string('cps_act_address1', 50)->nullable();
            $table->string('cps_act_address2', 50)->nullable();
            $table->string('cps_act_address3', 35)->nullable();
            $table->string('cps_act_address4', 35)->nullable();
            $table->string('cps_act_address5', 35)->nullable();
            $table->string('cps_act_city', 30)->nullable();
            $table->string('cps_state', 30)->nullable();
            $table->string('cps_country', 30)->nullable();
            $table->string('cps_emailid', 50)->nullable();
            $table->integer('cps_act_pin')->nullable();
            $table->string('cps_act_telephone_res', 15)->nullable();
            $table->string('cps_act_telephone_off', 15)->nullable();
            $table->string('cps_act_mobile', 15)->nullable();
            $table->string('cps_ifsc_code', 12)->nullable();
            $table->unsignedBigInteger('cps_chq_no_from')->nullable();
            $table->unsignedBigInteger('cps_chq_no_to')->nullable();
            $table->unsignedInteger('cps_micr_account_no')->nullable();
            $table->date('cps_date')->nullable();
            $table->integer('cps_process_user_id')->nullable();
            $table->string('cps_bsr_code', 6)->nullable();
            $table->string('cps_pr_code', 4)->nullable();
            $table->string('cps_short_name', 40)->nullable();
            $table->string('cps_issue_date')->nullable();
            $table->string('cps_product_code', 5)->nullable();
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
        Schema::dropIfExists('tb_printque');
    }
};
