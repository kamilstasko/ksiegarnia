<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_category', function (Blueprint $table) {
            $table->string('id')->collation('utf8_polish_ci');
            $table->primary('id');
            $table->string('title')->collation('utf8_polish_ci');
            $table->string('meta_title')->collation('utf8_polish_ci');
            $table->string('slug')->collation('utf8_polish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_category');
    }
}
