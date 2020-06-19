<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecommendationProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendation_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_products')->unsigned();
            $table->integer('id_users')->unsigned();
            $table->timestamp('date');
        });

        Schema::table('recommendation_products', function($table) {
            $table->foreign('id_products')->references('id')->on('products')->onDelete('restrict');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommendation_products');
    }
}
