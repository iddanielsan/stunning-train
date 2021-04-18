<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixIncomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incomings', function (Blueprint $table) {
            $table->timestamp('date')->nullable();
            $table->foreignId('to_wallet')->constrained('wallets');
            $table->dropForeign(['wallet_id']);
            $table->dropColumn('wallet_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incomings', function (Blueprint $table) {
            $table->dropColumn('date');
            $table->dropColumn('to_wallet');
        });
    }
}
