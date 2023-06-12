<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('category_id', 10)->primary();
            $table->string('category_type', 20);
        });

        DB::table('categories')->insert(array(
            'category_id' => 'CLT',
            'category_type' => 'Clothes'
        ));

        DB::table('categories')->insert(array(
            'category_id' => 'CST',
            'category_type' => 'Costume'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
