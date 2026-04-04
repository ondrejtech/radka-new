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
        Schema::create('invoices', function (Blueprint $table): void {
            $table->id();
            $table->unsignedInteger('idoklad_id')->nullable()->unique()->comment('ID v iDoklad systému');

            // Vazby
            $table->unsignedInteger('constant_symbol_id')->nullable();
            $table->unsignedInteger('currency_id')->nullable();
            $table->unsignedInteger('partner_id')->nullable();
            $table->unsignedInteger('payment_option_id')->nullable();
            $table->unsignedInteger('recurring_invoice_id')->nullable();
            $table->unsignedInteger('sales_order_id')->nullable();
            $table->unsignedInteger('sales_pos_equipment_id')->nullable();
            $table->unsignedInteger('vat_reverse_charge_code_id')->nullable();

            // Číslo dokladu
            $table->string('document_number', 10)->nullable();
            $table->unsignedInteger('document_serial_number')->nullable();
            $table->string('variable_symbol', 10)->nullable();
            $table->string('order_number', 20)->nullable();

            // Datumy
            $table->date('date_of_issue')->nullable();
            $table->date('date_of_maturity')->nullable();
            $table->date('date_of_payment')->nullable();
            $table->date('date_of_taxing')->nullable();
            $table->date('date_of_accounting_event')->nullable();
            $table->date('date_of_vat_application')->nullable();
            $table->date('date_of_last_reminder')->nullable();

            // Texty
            $table->string('description')->nullable();
            $table->text('note')->nullable();
            $table->text('items_text_prefix')->nullable();
            $table->text('items_text_suffix')->nullable();

            // Slevy
            $table->decimal('discount_percentage', 10, 4)->default(0);
            $table->tinyInteger('discount_type')->default(0)->comment('0=None,1=Grouped,2=Individual,3=OnDocument');

            // Měna a kurz
            $table->decimal('exchange_rate', 15, 6)->nullable();
            $table->decimal('exchange_rate_amount', 15, 6)->nullable();

            // Stavy a příznaky
            $table->tinyInteger('payment_status')->default(0)->comment('0=Unpaid,1=Paid,2=PartialPaid,3=Overpaid');
            $table->tinyInteger('exported')->default(0)->comment('0=NotExported,1=Exported,2=Changed,3=Deleted');
            $table->tinyInteger('is_sent_to_purchaser')->default(0)->comment('0=NotSent,1=Sent,2=SentAndRead');
            $table->tinyInteger('eet_responsibility')->default(0)->comment('0=Idoklad,1=ExternalApplication');
            $table->tinyInteger('report_language')->default(1)->comment('1=Cz,2=Sk,3=En,4=De');
            $table->tinyInteger('vat_on_pay_status')->default(0)->comment('0=Disabled,1=Enabled,2=InvoiceNeedsTaxing');
            $table->tinyInteger('vat_regime')->default(1)->comment('0=NonVatRegime,1=VatRegime');
            $table->boolean('is_eet')->default(false);
            $table->boolean('is_income_tax')->default(true);
            $table->boolean('is_sent_to_accountant')->default(false);
            $table->boolean('has_vat_regime_oss')->default(false);

            // Počítadla
            $table->unsignedInteger('reminder_count')->default(0);

            // Adresy jako JSON (mění se per doklad)
            $table->json('my_address')->nullable();
            $table->json('partner_address')->nullable();
            $table->json('delivery_address')->nullable();

            // Ceny jako JSON (sumarizace)
            $table->json('prices')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
