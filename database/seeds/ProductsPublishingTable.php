<?php

use Illuminate\Database\Seeder;

class ProductsPublishingTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_publishing')->insert([
            /*01*/ ['name' => 'Debit'],
            /*02*/ ['name' => 'Aksjomat'],
            /*03*/ ['name' => 'Jaguar'],
            /*04*/ ['name' => 'Zielona Sowa'],
            /*05*/ ['name' => 'Novae Res'],
            /*06*/ ['name' => 'W.A.B.'],
            /*07*/ ['name' => 'Impuls'],
            /*08*/ ['name' => 'PWN'],
            /*09*/ ['name' => 'Fabryka Słów'],
            /*10*/ ['name' => 'Egmont'],
            /*11*/ ['name' => 'Mucha Comics'],
            /*12*/ ['name' => 'Elemental'],
            /*13*/ ['name' => 'Ongrys'],
            /*14*/ ['name' => 'Kultura gniewu'],
            /*15*/ ['name' => 'Jp Fantastica'],
            /*16*/ ['name' => 'Hanami'],
            /*17*/ ['name' => 'Cztery Głowy'],
            /*18*/ ['name' => 'DIM'],
            /*19*/ ['name' => 'Heraclon'],
            /*20*/ ['name' => 'Albatros'],
            /*21*/ ['name' => 'Biblioteka Akustyczna'],
        ]);
    }
}
