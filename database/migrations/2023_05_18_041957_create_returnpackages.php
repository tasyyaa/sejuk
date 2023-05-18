<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnpackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returnpackages', function (Blueprint $table) {
            $table->id('return_id');
            $table->varchar(25)('shipping_methods');
            $table->varchar(25)('name_kurir');
            $table->varchar(12)('no_resi');
            $table->varchar(100)('vendor_storeaddress');
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
        Schema::dropIfExists('returnpackages');
    }
}
