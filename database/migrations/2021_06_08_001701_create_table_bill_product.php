<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBillProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_products', function (Blueprint $table) {
            $table->bigInteger('bill_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
             $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');
              $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('bills_products');
    }
}
