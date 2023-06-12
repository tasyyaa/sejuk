<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorcatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendorcatalogs', function (Blueprint $table) {
            $table->id('catalog_id');
            $table->string('item_name', 100);
            $table->integer('item_price');
            $table->string('size', 20);
            $table->integer('stock');
            $table->string('category_id', 10);
            $table->string('catalog_image', 255);

            $table->foreignId('vendor_id')->references('id')->on('rentals');

            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendorcatalogs');
    }
}
