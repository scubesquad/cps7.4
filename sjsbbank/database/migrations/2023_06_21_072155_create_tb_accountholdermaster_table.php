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
        Schema::create('tb_accountholdermaster', function (Blueprint $table) {
            $table->integer('ach_Id', true);
            $table->integer('ach_account_No')->nullable();
            $table->string('ach_account_Name', 40)->nullable();
            $table->integer('ach_Bearer_Order')->nullable();
            $table->integer('ach_Transaction_Code')->nullable();
            $table->integer('ach_At_Par')->nullable();
            $table->string('ach_Joint_Name1', 40)->nullable();
            $table->string('ach_Joint_Name2', 40)->nullable();
            $table->string('ach_Authorized_Signatory1', 25)->nullable();
            $table->string('ach_Authorized_Signatory2', 25)->nullable();
            $table->string('ach_Authorized_Signatory3', 25)->nullable();
            $table->string('ach_Address1', 200)->nullable();
            $table->string('ach_Address2', 200)->nullable();
            $table->integer('ach_Suburb')->nullable();
            $table->integer('ach_City')->nullable();
            $table->integer('ach_State')->nullable();
            $table->integer('ach_Country')->nullable();
            $table->integer('ach_Pincode')->nullable();
            $table->integer('ach_Telephone_Residence')->nullable();
            $table->integer('ach_Telephone_Office')->nullable();
            $table->integer('ach_Mobile_No')->nullable();
            $table->integer('ach_Branch')->nullable();
            $table->string('ach_emailId', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_accountholdermaster');
    }
};
