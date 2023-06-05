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
            $table->String('item_name', 100);
            $table->integer('item_price');
            $table->String('size', 5);
            $table->integer('stock');
            $table->String('category_id', 10);
            $table->String('catalog_image', 255);
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
