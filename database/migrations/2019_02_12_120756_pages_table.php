<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->collation('utf8_polish_ci');
            $table->string('sub_title')->collation('utf8_polish_ci');
            $table->string('title')->collation('utf8_polish_ci');
            $table->text('preface')->collation('utf8_polish_ci');
            $table->longText('content')->collation('utf8_polish_ci');
            $table->string('meta_title')->collation('utf8_polish_ci');
            $table->string('img_url')->collation('utf8_polish_ci');
            $table->string('img_alt')->collation('utf8_polish_ci');
            $table->string('redirect_url')->collation('utf8_polish_ci');
            $table->string('redirect_desc')->collation('utf8_polish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
