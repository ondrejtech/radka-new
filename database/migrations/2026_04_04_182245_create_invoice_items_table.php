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
        Schema::create('invoice_items', function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('idoklad_id')->nullable()->comment('ID položky v iDoklad');
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();

            // Identifikace
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('unit')->nullable();
            $table->unsignedInteger('price_list_item_id')->nullable();
            $table->unsignedInteger('invoice_proforma_id')->nullable();
            $table->unsignedInteger('vat_code_id')->nullable();

            // Množství a ceny
            $table->decimal('amount', 15, 4)->default(1);
            $table->tinyInteger('price_type')->default(0)->comment('0=WithVat,1=WithoutVat,2=OnlyBase');
            $table->decimal('vat_rate', 10, 4)->default(0);
            $table->tinyInteger('vat_rate_type')->default(1)->comment('0=Reduced1,1=Basic,2=Zero,3=Reduced2');

            // Slevy
            $table->decimal('discount_percentage', 10, 4)->default(0);
            $table->string('discount_name')->nullable();

            // Typ položky
            $table->tinyInteger('item_type')->default(0)->comment('0=Normal,1=Round,2=Reduce,3=Discount');
            $table->boolean('is_tax_movement')->default(false);

            // Vypočítané ceny jako JSON
            $table->json('prices')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
