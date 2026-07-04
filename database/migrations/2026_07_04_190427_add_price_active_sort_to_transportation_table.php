<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The transport methods offered in the storefront checkout.
     *
     * @var list<array{Code:int, Name:string, TypeCode:int, Price:float, SortOrder:int}>
     */
    private array $methods = [
        ['Code' => 46, 'Name' => 'Balík', 'TypeCode' => 0, 'Price' => 25, 'SortOrder' => 1],
        ['Code' => 3, 'Name' => 'Osobně Ostrava', 'TypeCode' => 0, 'Price' => 25, 'SortOrder' => 2],
        ['Code' => 105, 'Name' => 'ČP balík', 'TypeCode' => 0, 'Price' => 25, 'SortOrder' => 3],
        ['Code' => 47, 'Name' => 'Dobírka', 'TypeCode' => 2, 'Price' => 55, 'SortOrder' => 4],
        ['Code' => 36, 'Name' => 'DPD EX.12', 'TypeCode' => 0, 'Price' => 150, 'SortOrder' => 5],
        ['Code' => 37, 'Name' => 'DPD EX.12 dob.', 'TypeCode' => 2, 'Price' => 180, 'SortOrder' => 6],
        ['Code' => 256, 'Name' => 'DPD PickupPoint dob.', 'TypeCode' => 2, 'Price' => 55, 'SortOrder' => 7],
        ['Code' => 103, 'Name' => 'Expres OVA', 'TypeCode' => 0, 'Price' => 25, 'SortOrder' => 8],
    ];

    public function up(): void
    {
        Schema::table('Transportation', function (Blueprint $table) {
            $table->decimal('Price', 10, 2)->default(0)->after('TypeCode');
            $table->unsignedInteger('SortOrder')->default(0)->after('Price');
            $table->boolean('Active')->default(true)->after('SortOrder');
        });

        foreach ($this->methods as $method) {
            DB::table('Transportation')->updateOrInsert(
                ['Code' => $method['Code']],
                [
                    'Name' => $method['Name'],
                    'TypeCode' => $method['TypeCode'],
                    'Price' => $method['Price'],
                    'SortOrder' => $method['SortOrder'],
                    'Active' => 1,
                ],
            );
        }

        // Legacy/imported rows not offered in the storefront: keep but hide.
        DB::table('Transportation')
            ->whereNotIn('Code', array_column($this->methods, 'Code'))
            ->update(['Active' => 0]);
    }

    public function down(): void
    {
        Schema::table('Transportation', function (Blueprint $table) {
            $table->dropColumn(['Price', 'SortOrder', 'Active']);
        });
    }
};
