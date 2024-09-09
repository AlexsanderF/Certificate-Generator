<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('training_name')->nullable('false');
            $table->date('start_period_training')->nullable('false');
            $table->date('end_period_training')->nullable('false');
            $table->string('duration_training')->nullable('false');
            $table->string('city_of_training');
            $table->string('state_of_training');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
