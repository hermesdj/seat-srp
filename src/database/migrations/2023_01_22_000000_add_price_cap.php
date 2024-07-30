<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceCap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('denngarr_seat_srp_advrule', function (Blueprint $table) {
            $table->integer('srp_price_cap')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('denngarr_seat_srp_advrule', function (Blueprint $table) {
            $table->dropColumn('srp_price_cap');
        });
    }
}
