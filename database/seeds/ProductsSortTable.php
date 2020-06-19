<?php

use Illuminate\Database\Seeder;

class ProductsSortTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_sort')->insert([
            'name' => 'Nazwa rosnąco',
            'value' => 'name,asc'
        ]);

        DB::table('products_sort')->insert([
            'name' => 'Nazwa malejąco',
            'value' => 'name,desc'
        ]);

        DB::table('products_sort')->insert([
            'name' => 'Cena rosnąco',
            'value' => 'price,asc'
        ]);

        DB::table('products_sort')->insert([
            'name' => 'Cena malejąco',
            'value' => 'price,desc'
        ]);

        DB::table('products_sort')->insert([
            'name' => 'Data dodania rosnąco',
            'value' => 'date,asc'
        ]);

        DB::table('products_sort')->insert([
            'name' => 'Data dodania malejąco',
            'value' => 'date,desc'
        ]);
    }
}
