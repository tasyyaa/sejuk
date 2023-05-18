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
            $table->varchar(25)('shipping_methods');
            $table->varchar(25)('name_kurir');
            $table->varchar(12)('no_resi');
            $table->varchar(100)('vendor_storeaddress');
            $table->varchar(100)('reason');
            $table->varchar(255)('product_image');
            $table->varchar(10)('order_id');
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
