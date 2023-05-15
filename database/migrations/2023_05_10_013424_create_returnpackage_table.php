<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnpackagesTable extends Migration
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
            $table->text('item_name');
            $table->integer('item_price');
            $table->text('size');
            $table->text('store');
            $table->text('category_id');
            $table->text('store');
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
        Schema::dropIfExists('returnpackage');
    }
}
