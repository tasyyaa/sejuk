<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vendor_store', 100)->unique();
            $table->string('vendor_type', 100);
            $table->string('email')->unique();
            $table->string('city')->nullable();
            $table->string('phone_number', 20);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->time('oprhours_open')->nullable();
            $table->time('oprhours_close')->nullable();
            $table->string('vendor_Creditcardtype1', 100)->nullable();
            $table->string('vendor_Creditcardtype2', 100)->nullable();
            $table->string('vendor_Nocreditcard', 30)->nullable();
            $table->string('vendor_homephone', 20)->nullable();
            $table->string('vendor_address', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
