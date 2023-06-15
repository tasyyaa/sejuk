<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('category', 100);
            $table->string('type', 100);
        });

        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            [
                'category' => 'Kartu Kredit',
                'type' => 'Kartu Kredit/ Debit'
            ]
        ));

        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            [
                'category' => 'Transfer Virtual Account/ Bank',
                'type' => 'Bank Mandiri'
            ]
        ));

        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            [
                'category' => 'Transfer Virtual Account/ Bank',
                'type' => 'Bank BCA'
            ]
        ));

        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            [
                'category' => 'Transfer Virtual Account/ Bank',
                'type' => 'Bank BNI'
            ]
        ));

        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            [
                'category' => 'Transfer Virtual Account/ Bank',
                'type' => 'Bank BRI'
            ]
        ));

        \Illuminate\Support\Facades\DB::table('payment_methods')->insert(array(
            [
                'category' => 'Transfer Virtual Account/ Bank',
                'type' => 'Bank Syariah Indonesia (BSI)'
            ]
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}
