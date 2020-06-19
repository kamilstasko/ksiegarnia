<?php

use Illuminate\Database\Seeder;

class ProductsCategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_category')->insert([
            ['id' => '000', 'title' => 'Nasze produkty', 'meta_title' => 'Nasze produkty', 'slug' => 'list'],
            ['id' => '001', 'title' => 'Książki', 'meta_title' => 'Książki', 'slug' => 'ksiazki'],
            ['id' => '002', 'title' => 'Komiksy', 'meta_title' => 'Komiksy', 'slug' => 'komiksy'],
            ['id' => '003', 'title' => 'Audiobooki', 'meta_title' => 'Audiobooki', 'slug' => 'audiobooki'],

            ['id' => '001001', 'title' => 'Dla dzieci', 'meta_title' => 'Dla dzieci', 'slug' => 'ksiazki/dla-dzieci'],
            ['id' => '001002', 'title' => 'Dla młodzieży', 'meta_title' => 'Dla młodzieży', 'slug' => 'ksiazki/dla-mlodziezy'],
            ['id' => '001003', 'title' => 'Dla Kobiet', 'meta_title' => 'Dla Kobiet', 'slug' => 'ksiazki/dla-kobiet'],
            ['id' => '001004', 'title' => 'Naukowe', 'meta_title' => 'Naukowe', 'slug' => 'ksiazki/naukowe'],
            ['id' => '001005', 'title' => 'Kryminały i sensacja', 'meta_title' => 'Kryminały i sensacja', 'slug' => 'ksiazki/kryminały-sensacja'],
            ['id' => '001006', 'title' => 'Fantastyka', 'meta_title' => 'Fantastyka', 'slug' => 'ksiazki/fantastyka'],

            ['id' => '002001', 'title' => 'Amerykańskie', 'meta_title' => 'Amerykańskie', 'slug' => 'komiksy/amerykanskie'],
            ['id' => '002002', 'title' => 'Europejskie', 'meta_title' => 'Europejskie', 'slug' => 'komiksy/europejskie'],
            ['id' => '002003', 'title' => 'Polskie', 'meta_title' => 'Polskie', 'slug' => 'komiksy/polskie'],
            ['id' => '002004', 'title' => 'Dla dzieci', 'meta_title' => 'Dla dzieci', 'slug' => 'komiksy/dla-dzieci'],
            ['id' => '002005', 'title' => 'Manga i anime', 'meta_title' => 'Manga i anime', 'slug' => 'komiksy/manga-anime'],

            ['id' => '003001', 'title' => 'Nauka języków', 'meta_title' => 'Nauka języków', 'slug' => 'audiobooki/nauka-jezykow'],
            ['id' => '003002', 'title' => 'Lektury i opracowania', 'meta_title' => 'Lektury i opracowania', 'slug' => 'audiobooki/lektury-opracowania'],
            ['id' => '003003', 'title' => 'Fantastyka', 'meta_title' => 'Fantastyka', 'slug' => 'audiobooki/fantastyka'],
            ['id' => '003004', 'title' => 'Kryminał, sensacja, thriller', 'meta_title' => 'Kryminał, sensacja, thriller', 'slug' => 'audiobooki/kryminał-sensacja-thriller'],
            ['id' => '003005', 'title' => 'Podróże', 'meta_title' => 'Podróże', 'slug' => 'audiobooki/podroze']
        ]);
    }
}
