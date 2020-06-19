<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firm')->collation('utf8_polish_ci');
            $table->string('address')->collation('utf8_polish_ci');
            $table->string('town')->collation('utf8_polish_ci');
            $table->string('email')->collation('utf8_polish_ci');
            $table->integer('phone');
            $table->string('service_name')->collation('utf8_polish_ci');
            $table->string('service_url')->collation('utf8_polish_ci');
            $table->string('krs')->collation('utf8_polish_ci');
            $table->string('krs_text')->collation('utf8_polish_ci');
            $table->string('krs_text2')->collation('utf8_polish_ci');
            $table->string('nip')->collation('utf8_polish_ci');
            $table->string('regon')->collation('utf8_polish_ci');
            $table->string('bank_name')->collation('utf8_polish_ci');
            $table->string('bank_number')->collation('utf8_polish_ci');
            $table->string('office_person')->collation('utf8_polish_ci');
            $table->integer('office_phone');
            $table->string('office_email')->collation('utf8_polish_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config');
    }
}