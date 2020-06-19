<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_cat')->collation('utf8_polish_ci');
            $table->integer('id_author')->unsigned();
            $table->integer('id_publishing')->unsigned();
            $table->string('img_href')->collation('utf8_polish_ci');
            $table->string('img_alt')->collation('utf8_polish_ci');
            $table->integer('is_promotion');
            $table->integer('is_novelty');
            $table->integer('is_bestseller');
            $table->integer('is_sellout');
            $table->string('name')->collation('utf8_polish_ci');
            $table->decimal('promotion_price', 9, 2);
            $table->decimal('price', 9, 2);
            $table->integer('year_publication');
            $table->longText('description')->collation('utf8_polish_ci');
            $table->longText('details')->collation('utf8_polish_ci');
            $table->timestamp('date');
        });

        Schema::table('products', function($table) {
            $table->foreign('id_cat')->references('id')->on('products_category')->onDelete('restrict');
            $table->foreign('id_author')->references('id')->on('products_authors')->onDelete('restrict');
            $table->foreign('id_publishing')->references('id')->on('products_publishing')->onDelete('restrict');
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
