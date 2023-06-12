<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('name');
            $table->string('type');
            $table->string('estimate_delivery');
        });

        \Illuminate\Support\Facades\DB::table('shipping_methods')->insert(array(
            'name' => 'JNE',
            'type' => 'Regular',
            'estimate_delivery' => '2-3 hari',
            'price' => 25000,
        ));

        \Illuminate\Support\Facades\DB::table('shipping_methods')->insert(array(
            'name' => 'JNT',
            'type' => 'Regular',
            'estimate_delivery' => '2-3 hari',
            'price' => 27000,
        ));

        \Illuminate\Support\Facades\DB::table('shipping_methods')->insert(array(
            'name' => 'Sicepat',
            'type' => 'Regular',
            'estimate_delivery' => '1-2 hari',
            'price' => 20000,
        ));

        \Illuminate\Support\Facades\DB::table('shipping_methods')->insert(array(
            'name' => 'Go-Send',
            'type' => 'Instant',
            'estimate_delivery' => 'Same day',
            'price' => 15000,
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_methods');
    }
}
