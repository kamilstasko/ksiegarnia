<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->collation('utf8_polish_ci');
            $table->text('description')->collation('utf8_polish_ci');
            $table->string('link')->collation('utf8_polish_ci');
            $table->string('button_description')->collation('utf8_polish_ci');
            $table->string('img_href')->collation('utf8_polish_ci');
            $table->string('img_alt')->collation('utf8_polish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
