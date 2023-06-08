<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyforreturns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applyforreturns', function (Blueprint $table) {
            $table->id('apply_id');
            $table->String('shipping_methods', 25);
            $table->String('name_kurir', 25);
            $table->String('no_resi', 12);
            $table->String('vendor_storeaddress', 100);
            $table->String('reason', 100);
            $table->String('product_image', 255);
            $table->String('order_id', 10);
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
        Schema::dropIfExists('applyforreturns');
    }
}