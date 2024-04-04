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
        Schema::create('tb_manual_print', function (Blueprint $table) {
            $table->integer('mp_Id', true);
            $table->integer('mp_AccountHolder_Id')->nullable();
            $table->integer('mp_BookSize')->nullable();
            $table->integer('mp_NoOfBooks')->nullable();
            $table->integer('mp_Chk_From')->nullable();
            $table->integer('mp_Chk_To')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_manual_print');
    }
};
