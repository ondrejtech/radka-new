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
        Schema::create('ProductExtInfoCode', function (Blueprint $table) {
            $table->integer('ProId');
            $table->string('InfoCode', 64)->index('fk_extinfo_info');

            $table->primary(['ProId', 'InfoCode']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductExtInfoCode');
    }
};
