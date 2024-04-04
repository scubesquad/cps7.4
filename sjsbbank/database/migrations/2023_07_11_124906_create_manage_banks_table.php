<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manage_banks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('subdomain')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->text('address')->nullable();
            $table->string('sales_person')->nullable();
            $table->text('input_file_format_description')->nullable();
            $table->string('sample_input_file')->nullable();
            $table->text('output_file_format_description')->nullable();
            $table->string('sample_output_file')->nullable();
            $table->string('sample_requisition')->nullable();
            $table->string('sample_cheque')->nullable();
            $table->text('special_requirement')->nullable();
            $table->string('printer_brand')->nullable();
            $table->string('printer_model')->nullable();
            $table->string('os_name')->nullable();
            $table->string('os_bit_version')->nullable();
            $table->string('pcp_version')->nullable();
            $table->string('installation_by')->nullable();
            $table->date('installation_date')->nullable();
            $table->string('training_by')->nullable();
            $table->date('training_date')->nullable();
            $table->date('licence_start_date')->nullable();
            $table->date('licence_end_date')->nullable();
            $table->text('module_access')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_banks');
    }
};
