<?php

use Illuminate\Database\Seeder;

class SlidersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'title' => 'Książki',
            'description' => 'Bogata oferta książek zagwarantuje Ci stały dostęp do ciekawych informacji z praktycznie wszystkich dziedzin życia. Znajdziesz tu także specjalistyczne czasopisma, które mogą okazać się pomocne w poszukiwaniu najświeższych nowinek ze świata nauki i sztuki.',
            'link' => 'product/ksiazki',
            'button_description' => 'Zobacz nasze książki',
            'img_href' => '/images/books.png',
            'img_alt' => 'Książki'
        ]);

        DB::table('sliders')->insert([
            'title' => 'Komiksy',
            'description' => 'Obrazkowe historie zamknięte w ramki, opatrzone dymkami z wypowiedziami bohaterów i narratora cieszą się niesłabnącym zainteresowaniem już od ponad stu lat! Komiksy zyskały szerokie grono swoich zwolenników, każdego roku pojawiają się nowi twórcy i nowe tytuły, ale swój renesans przeżywają również serie, na których wychowało się już kilka pokoleń Czytelników.',
            'link' => 'product/komiksy',
            'button_description' => 'Zobacz nasze komiksy',
            'img_href' => '/images/magazines.png',
            'img_alt' => 'Komiksy'
        ]);

        DB::table('sliders')->insert([
            'title' => 'Audiobooki',
            'description' => 'Audiobooki to dział dla Czytelników, którzy nie lubią rozstawać się z książkami. Idealnie sprawdzają się podczas jazdy samochodem, świetnie wypełniają długie wieczory, a dzieciom gwarantują rozrywkę w doborowym towarzystwie ulubionych bohaterów.',
            'link' => 'product/audiobooki',
            'button_description' => 'Zobacz nasze audiobooki',
            'img_href' => '/images/ebooks.png',
            'img_alt' => 'Audiobooki'
        ]);
    }
}
