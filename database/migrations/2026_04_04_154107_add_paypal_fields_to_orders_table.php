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
        Schema::table('orders', function (Blueprint $table): void {
            $table->string('paypal_order_id')->nullable()->after('total_with_vat');
            $table->string('paypal_capture_id')->nullable()->after('paypal_order_id');
            $table->enum('payment_status', ['unpaid', 'pending', 'paid', 'failed', 'refunded'])
                ->default('unpaid')
                ->after('paypal_capture_id');
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table): void {
            $table->dropColumn(['paypal_order_id', 'paypal_capture_id', 'payment_status']);
        });
    }
};
