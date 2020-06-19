<?php

use Illuminate\Database\Seeder;

class ProductsLimitsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_limits')->insert([
            'value' => '3'
        ]);

        DB::table('products_limits')->insert([
            'value' => '6'
        ]);

        DB::table('products_limits')->insert([
            'value' => '9'
        ]);

        DB::table('products_limits')->insert([
            'value' => '12'
        ]);

        DB::table('products_limits')->insert([
            'value' => '15'
        ]);

        DB::table('products_limits')->insert([
            'value' => '18'
        ]);

        DB::table('products_limits')->insert([
            'value' => '21'
        ]);

        DB::table('products_limits')->insert([
            'value' => '24'
        ]);

        DB::table('products_limits')->insert([
            'value' => '27'
        ]);

        DB::table('products_limits')->insert([
            'value' => '30'
        ]);
    }
}
