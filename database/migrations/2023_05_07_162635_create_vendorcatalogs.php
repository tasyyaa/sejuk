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
            $table->text('catalog_id');
            $table->text('item_name');
            $table->integer('item_price');
            $table->text('size');
            $table->text('store');
            $table->text('category_id');
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
