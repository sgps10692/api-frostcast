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
            $table->unsignedBigInteger('data_id');

            $table->foreign('parameter_variable_id')->references('id')->on('parameters');
            $table->foreign('data_id')->references('id')->on('forecast_weather_data');
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
