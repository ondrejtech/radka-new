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
        Schema::create('ProductRelation', function (Blueprint $table) {
            $table->integer('ParentProId');
            $table->integer('ChildProId')->index('fk_relation_child');
            $table->string('ChildCode', 64)->nullable();
            $table->integer('Qty')->nullable();
            $table->integer('RelTypeId')->nullable();
            $table->string('RelTypeName')->nullable();

            $table->primary(['ParentProId', 'ChildProId']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ProductRelation');
    }
};
