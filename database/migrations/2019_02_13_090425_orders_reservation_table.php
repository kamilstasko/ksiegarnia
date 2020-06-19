<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->integer('id_products_items')->unsigned();
            $table->timestamp('date_start');
            $table->date('date_rental');
            $table->date('date_return');
        });

        Schema::table('orders_reservations', function($table) {
            $table->foreign('id_users')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('id_products_items')->references('id')->on('products_items')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_reservations');
    }
}
