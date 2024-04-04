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
        Schema::create('tb_cps_settings', function (Blueprint $table) {
            $table->string('inputfolderpath', 100)->nullable();
            $table->string('archivefolderpath', 50)->nullable();
            $table->string('inputfileformat', 20)->nullable();
            $table->string('inputfiledelimiter', 15)->nullable();
            $table->string('outputfolderpath', 100)->nullable();
            $table->string('outputfileformat', 20)->nullable();
            $table->string('outputfiledelimiter', 15)->nullable();
            $table->string('typeofprinter', 20)->nullable();
            $table->integer('printermodel')->nullable();
            $table->integer('chk_taken_from')->nullable();
            $table->unsignedInteger('chk_no_from')->nullable();
            $table->unsignedInteger('chk_no_to')->nullable();
            $table->integer('nooffailedpasswordattempt')->nullable();
            $table->integer('password_expiry')->nullable();
            $table->string('homescreen_text', 100)->nullable();
            $table->string('poweredby', 100)->nullable();
            $table->string('banklogo', 100)->nullable();
            $table->string('desktop_image', 100)->nullable();
            $table->text('chq_Image')->nullable();
            $table->string('country', 5)->nullable();
            $table->string('help_employeeid', 20)->nullable();
            $table->string('help_helplineno1', 30)->nullable();
            $table->string('help_emailid', 100)->nullable();
            $table->integer('autolockminutes')->nullable();
            $table->string('help_contactperson', 200)->nullable();
            $table->string('help_helplineno2', 20)->nullable();
            $table->string('license_type', 10)->nullable();
            $table->date('license_install_date')->nullable();
            $table->integer('license_period')->nullable();
            $table->date('license_end_date')->nullable();
            $table->integer('license_no_of_users')->nullable();
            $table->integer('license_cheque_leaves')->nullable();
            $table->integer('license_users_leaves')->nullable();
            $table->integer('license_users_leaves_value')->nullable();
            $table->integer('toner_leaves_capacity')->nullable();
            $table->boolean('is_toner')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cps_settings');
    }
};
