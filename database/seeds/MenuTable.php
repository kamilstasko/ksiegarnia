<?php

use Illuminate\Database\Seeder;

class MenuTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'type' => '1',
            'link' => 'product/list',
            'title' => 'Nasze produkty',
        ]);

        DB::table('menu')->insert([
            'type' => '1',
            'link' => 'about-us',
            'title' => 'O nas',
        ]);

        DB::table('menu')->insert([
            'type' => '1',
            'link' => 'contact',
            'title' => 'Kontakt',
        ]);

        DB::table('menu')->insert([
            'type' => '2',
            'link' => 'regulations',
            'title' => 'Regulamin',
        ]);

        DB::table('menu')->insert([
            'type' => '2',
            'link' => 'privacy-policy',
            'title' => 'Polityka prywatoności',
        ]);
    }
}
