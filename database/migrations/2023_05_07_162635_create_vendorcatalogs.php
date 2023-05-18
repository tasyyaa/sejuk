<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createvendorcatalogs extends Migration
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
            $table->varchar(100)('item_name');
            $table->integer('item_price');
            $table->varchar(5)('size');
            $table->int('stock');
            $table->varchar(100)('category_id');
            $table->varchar(255)('catalog_image');
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
        Schema::dropIfExists('vendorcatalogs');
    }
}
