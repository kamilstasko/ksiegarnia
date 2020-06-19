<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('name')->collation('utf8_polish_ci');
            $table->string('surname')->collation('utf8_polish_ci');
            $table->string('address')->collation('utf8_polish_ci');
            $table->string('code')->collation('utf8_polish_ci');
            $table->string('locality')->collation('utf8_polish_ci');
            $table->string('phone')->collation('utf8_polish_ci');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
