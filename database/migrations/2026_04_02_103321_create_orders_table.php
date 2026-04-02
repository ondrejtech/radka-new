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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('session_id')->nullable()->index();
            $table->unsignedTinyInteger('status_order_id')->default(1);
            $table->foreign('status_order_id')->references('id')->on('status_orders');
            $table->boolean('is_open')->default(false);
            $table->string('reference')->nullable();
            $table->text('note')->nullable();
            $table->date('delivery_date')->nullable();
            $table->unsignedInteger('transport_id')->nullable();
            $table->string('ship_name')->nullable();
            $table->string('ship_street')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_zip', 10)->nullable();
            $table->string('ship_country')->nullable();
            $table->string('ship_phone', 20)->nullable();
            $table->string('ship_email')->nullable();
            $table->decimal('total_without_vat', 10, 2)->default(0);
            $table->decimal('total_with_vat', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
