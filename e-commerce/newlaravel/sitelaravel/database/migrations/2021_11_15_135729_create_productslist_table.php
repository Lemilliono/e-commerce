<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductslistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productslist', function (Blueprint $table) {
            $table->id();
            $table->binary('product_image');
	    $table->string('product_name', 45);
	    $table->string('product_description', 300);
	    $table->string('product_price', 45);
	    $table->string('product_stock', 45);
	    $table->string('product_brand', 45);
	    $table->enum('rate', ['1', '2', '3', '4', '5']);
	    $table->integer('quantity');
	    $table->string('delivery_date', 45);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productslist');
    }
}
