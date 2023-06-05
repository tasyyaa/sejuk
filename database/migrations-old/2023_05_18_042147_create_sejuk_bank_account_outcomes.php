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
            $table->String('bank_id', 10);
            $table->integer('bank_account');
            $table->integer('amount');
            $table->String('order_id', 10);
            $table->integer('start_account_balance');
            $table->integer('end_account_balance');
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
