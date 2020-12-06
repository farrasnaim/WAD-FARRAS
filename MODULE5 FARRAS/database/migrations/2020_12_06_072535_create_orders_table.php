<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function (Blueprint $blueprint){
            $blueprint->bigIncrements('id');
            $blueprint->unsignedBigInteger('product_id');
            $blueprint->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $blueprint->text('buyer_name');
            $blueprint->text('buyer_contact');
            $blueprint->integer('amount');
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
