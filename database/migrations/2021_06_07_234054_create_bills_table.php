<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('emisor_id')->unsigned();
            $table->bigInteger('receptor_id')->unsigned();
            $table->integer('subtotal');
             $table->integer('tax');
            $table->integer('total');
            $table->foreign('receptor_id')->references('id')->on('receptors')->onDelete('cascade');
            $table->foreign('emisor_id')->references('id')->on('emisors')->onDelete('cascade');
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
        Schema::dropIfExists('bills');
    }
}
