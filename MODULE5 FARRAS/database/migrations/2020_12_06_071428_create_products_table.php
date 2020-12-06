<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products',function (Blueprint $blueprint){
            $blueprint->bigIncrements('id');
            $blueprint->string('name', 255);
            $blueprint->double('price', 10, 3);
            $blueprint->text('description');
            $blueprint->integer('stock');
            $blueprint->string('img_path', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
