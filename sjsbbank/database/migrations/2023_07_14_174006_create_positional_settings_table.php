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
        Schema::create('positional_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('xposition', 6, 2);
            $table->double('yposition', 6, 2);
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positional_settings');
    }
};
