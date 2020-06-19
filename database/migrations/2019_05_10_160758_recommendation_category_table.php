<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecommendationCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendation_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_cat')->collation('utf8_polish_ci');
            $table->integer('id_users')->unsigned();
            $table->timestamp('date');
        });

        Schema::table('recommendation_category', function($table) {
            $table->foreign('id_cat')->references('id')->on('products_category')->onDelete('restrict');
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
        Schema::dropIfExists('recommendation_category');
    }
}
