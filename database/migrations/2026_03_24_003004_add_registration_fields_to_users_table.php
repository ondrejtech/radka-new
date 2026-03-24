<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 20)->nullable()->after('name');
            $table->string('last_name', 100)->nullable()->after('first_name');
            $table->string('company_name', 100)->nullable()->after('last_name');
            $table->string('company_ic', 20)->nullable()->after('company_name');
            $table->string('company_dic', 20)->nullable()->after('company_ic');
            $table->string('street', 100)->nullable()->after('company_dic');
            $table->string('city', 100)->nullable()->after('street');
            $table->string('zip', 7)->nullable()->after('city');
            $table->string('country', 100)->nullable()->default('Czech Republic')->after('zip');
            $table->string('phone', 20)->nullable()->after('country');
            $table->text('note')->nullable()->after('phone');
            $table->boolean('terms_accepted')->default(false)->after('note');
            $table->boolean('newsletter')->default(false)->after('terms_accepted');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'first_name', 'last_name', 'company_name', 'company_ic', 'company_dic',
                'street', 'city', 'zip', 'country', 'phone', 'note',
                'terms_accepted', 'newsletter',
            ]);
        });
    }
};
