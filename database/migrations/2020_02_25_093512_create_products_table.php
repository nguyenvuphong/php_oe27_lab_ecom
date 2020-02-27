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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->integer('quantity');
            $table->double('price', 15, 8);
            $table->double('price_sale', 15, 8);
            $table->longText('description');
            $table->string('brand', 255);
            $table->string('thumbnail', 255);
            $table->string('CPU', 255);
            $table->string('RAM', 255);
            $table->string('color', 255);
            $table->integer('category_id');
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
        Schema::dropIfExists('products');
    }
}
