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
        Schema::table('ProductRelation', function (Blueprint $table) {
            $table->foreign(['ChildProId'], 'fk_relation_child')->references(['ProId'])->on('Product')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['ParentProId'], 'fk_relation_parent')->references(['ProId'])->on('Product')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ProductRelation', function (Blueprint $table) {
            $table->dropForeign('fk_relation_child');
            $table->dropForeign('fk_relation_parent');
        });
    }
};
