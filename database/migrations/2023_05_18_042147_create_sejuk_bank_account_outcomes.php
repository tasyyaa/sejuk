<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejukBankAccountOutcomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejuk_bank_account_outcomes', function (Blueprint $table) {
            $table->id('outcome_id');
            $table->varchar(10)('bank_id');
            $table->int('bank_account');
            $table->int('amount');
            $table->varchar(10)('order_id');
            $table->int('start_account_balance');
            $table->int('end_account_balance');
            $table->timestamps('updated_at');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejuk_bank_account_outcomes');
    }
}
