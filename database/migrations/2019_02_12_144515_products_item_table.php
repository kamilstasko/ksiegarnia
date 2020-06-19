<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_products')->unsigned();
            $table->string('serial')->collation('utf8_polish_ci');
        });

        Schema::table('products_items', function($table) {
            $table->foreign('id_products')->references('id')->on('products')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_items');
    }
}
