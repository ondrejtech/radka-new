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
        Schema::create('ProductDownloadXML', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('URL', 2048);
            $table->boolean('Status')->default(false);
            $table->boolean('ImageStatus')->default(false);
            $table->boolean('NavDataStatus')->default(false);
            $table->boolean('LogisticStatus')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductDownloadXML');
    }
};
