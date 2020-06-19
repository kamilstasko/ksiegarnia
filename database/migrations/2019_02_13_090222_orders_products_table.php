<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_orders')->unsigned();
            $table->integer('id_products_items')->unsigned();
            $table->date('date_rental');
            $table->date('date_return');
            $table->decimal('price', 9, 2);
            $table->integer('rate')->unsigned();
        });

        Schema::table('orders_products', function($table) {
            $table->foreign('id_products_items')->references('id')->on('products_items')->onDelete('restrict');
            $table->foreign('id_orders')->references('id')->on('orders')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
