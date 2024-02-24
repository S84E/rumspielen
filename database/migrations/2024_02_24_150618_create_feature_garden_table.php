<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('feature_garden', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')->references('id')->on('features')->onDelete('cascade');
            $table->foreignId('garden_id')->references('id')->on('gardens')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feature_garden');
    }
};
