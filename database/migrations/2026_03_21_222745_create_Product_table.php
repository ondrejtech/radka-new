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
        Schema::create('Product', function (Blueprint $table) {
            $table->integer('ProId')->primary();
            $table->string('Code', 64);
            $table->string('Name');
            $table->string('PartNumber', 64)->nullable();
            $table->string('PartNumber2', 64)->nullable();
            $table->string('EANCode', 64)->nullable();
            $table->decimal('YourPrice', 15, 4)->nullable();
            $table->decimal('YourPriceWithFees', 15, 4)->nullable();
            $table->decimal('GarbageFee', 15, 4)->nullable();
            $table->decimal('AuthorFee', 15, 4)->nullable();
            $table->decimal('ValuePack', 15, 4)->nullable();
            $table->integer('ValuePackQty')->nullable();
            $table->decimal('DealerPrice', 15, 4)->nullable();
            $table->decimal('DealerPrice1', 15, 4)->nullable();
            $table->decimal('EndUserPrice', 15, 4)->nullable();
            $table->decimal('Vat', 5)->nullable();
            $table->boolean('OnStock')->nullable();
            $table->integer('OnStockCount')->nullable();
            $table->string('OnStockText')->nullable();
            $table->date('DateAvailible')->nullable();
            $table->string('Unit', 64)->nullable();
            $table->integer('MultipleQuantity')->nullable();
            $table->string('PriceCurrency', 8)->nullable();
            $table->string('ProducerCode', 64)->nullable()->index('fk_product_producer');
            $table->string('ProducerName')->nullable();
            $table->string('CommodityCode', 64)->nullable()->index('fk_product_commodity');
            $table->string('CommodityName')->nullable();
            $table->integer('CategoryCode')->nullable()->index('fk_product_category');
            $table->string('IndexCode1', 64)->nullable()->index('fk_product_index1');
            $table->string('IndexSort1')->nullable();
            $table->integer('IndexOrder1')->nullable();
            $table->boolean('IndexImplicit1')->nullable();
            $table->string('IndexCode2', 64)->nullable()->index('fk_product_index2');
            $table->string('IndexSort2')->nullable();
            $table->integer('IndexOrder2')->nullable();
            $table->boolean('IndexImplicit2')->nullable();
            $table->string('Warranty')->nullable();
            $table->integer('WarrantyTerm')->nullable();
            $table->string('WarrantyUnit', 64)->nullable();
            $table->text('Description')->nullable();
            $table->text('DescriptionShort')->nullable();
            $table->string('NameB2C')->nullable();
            $table->string('ImageUrl', 2048)->nullable();
            $table->integer('ImgCount')->nullable();
            $table->dateTime('ImgLastChanged')->nullable();
            $table->boolean('B2C')->nullable();
            $table->boolean('IsPremium')->nullable();
            $table->boolean('IsTop')->nullable();
            $table->string('Status')->nullable();
            $table->string('InfoCode', 64)->nullable();
            $table->string('RateOfDutyCode', 64)->nullable();
            $table->string('RCStatus', 8)->nullable();
            $table->string('RCCode', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Product');
    }
};
