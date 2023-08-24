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
        Schema::create('meteorological_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parameter_variable_id');
            $table->unsignedBigInteger('location_id');
            $table->date('date')->nullable()->default(now());
            $table->decimal("value");
            $table->foreign('parameter_variable_id')->references('id')->on('parameters');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meteorological_values');
    }
};
