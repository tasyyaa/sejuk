<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shipping_method_id')->references('id')->on('shipping_methods');
            $table->string('nama_kurir')->nullable();
            $table->string('vendor_address');
            $table->string('customer_address');
            $table->string('no_resi')->nullable();
            $table->foreignId('order_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('return_packages');
    }
}
