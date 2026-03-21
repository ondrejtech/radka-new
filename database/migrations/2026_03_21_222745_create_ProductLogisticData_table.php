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
        Schema::create('ProductLogisticData', function (Blueprint $table) {
            $table->integer('ProId');
            $table->string('typ', 64);
            $table->integer('count')->nullable();
            $table->decimal('weight', 15, 4)->nullable();
            $table->decimal('length', 15, 4)->nullable();
            $table->decimal('width', 15, 4)->nullable();
            $table->decimal('height', 15, 4)->nullable();

            $table->primary(['ProId', 'typ']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductLogisticData');
    }
};
