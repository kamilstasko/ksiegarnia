<?php

use Illuminate\Database\Seeder;

class ProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            //-----------------ksiazki/dla-dzieci-----------------

            [
                'id_cat' => '001001',
                'id_author' => 1,
                'id_publishing' => 1,
                'img_href' => '/images/products/marysia-zegna-pieluszke.jpg',
                'img_alt' => 'Marysia żegna pieluszkę',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Marysia żegna pieluszkę',
                'promotion_price' => 0.20,
                'price' => 0.37,
                'year_publication' => 2013,
                'description' => '<p>Misia Marysia to miła trzyletnia dziewczynka. Zarówno rodzice, jak i dzieci na pewno zrozumieją jej radości, przygody i zmartwienia, ponieważ znają je z własnego życia. Marysia urządza urodziny, idzie do przedszkola, żegna pieluszkę, czeka na młodszego braciszka, boi się ciemnego pokoju, przeżywa napad złości… Nie zawsze od razu jej się wszystko udaje, czasami mama traci do niej cierpliwość, ale wszytko zawsze dobrze się kończy. Ciepłe, sympatyczne ilustracje i prosty tekst na pewno pomogą rozwiązać niejeden wielki problem małego człowieka i jego rodziców.</p>',
                'details' => '<ul><li>Tytuł: Marysia żegna pieluszkę</li>
<li>Autor: Nadia Berkane</li>
<li>Wydawnictwo: Debitv
<li>Seria: Miś Marysia</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2013</li>
<li>Ilość stron: 20</li>
<li>Format: 22.0x22.0cmv
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 60514702492KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Bebe Koala</li>
<li>Tłumacz: Krzak-Ćwiertnia Elżbieta</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788371678790</li>
<li>EAN: 9788371678790</li>
<li>Wymiary: 22.1x22.2x0.4 cm</li></ul>',
                'date' => new DateTime('01-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 1,
                'id_publishing' => 1,
                'img_href' => '/images/products/marysia-ubiera-sie-sama.jpg',
                'img_alt' => 'Marysia ubiera się sama',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Marysia ubiera się sama',
                'promotion_price' => 0.30,
                'price' => 0.38,
                'year_publication' => 2014,
                'description' => '<p>Pora na samodzielność! Pewnego ranka mama Koala musi poświęcić więcej czasu małemu synkowi i prosi Marysię, aby tym razem ubrała się sama. Nie jest to jednak wcale takie łatwe, jak się dziewczynce początkowo wydaje. Na szczęście rezolutna misia jak zwykle może liczyć na pomoc swojego przyjaciela chomika Gryzka. Perypetie Marysi z ubraniami na pewno pomogą najmłodszym czytelnikom w kolejnych krokach ku samodzielności.</p>',
                'details' => '<ul><li>Autor: Nadia Berkane</li>
<li>Wydawnictwo: Debit</li>
<li>Seria: Misia Marysia</li>
<li>Oprawa: Miękka</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380570603</li></ul>',
                'date' => new DateTime('02-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 1,
                'id_publishing' => 1,
                'img_href' => '/images/products/marysia-to-moje.jpg',
                'img_alt' => 'Marysia to moje!',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Marysia to moje!',
                'promotion_price' => 0.22,
                'price' => 0.28,
                'year_publication' => 2014,
                'description' => '<p>Marysia zaprasza do siebie koleżankę, ale… nie pozwala jej się bawić swoimi zabawkami. Skąd my to znamy? Jak każdy maluch misia musi dopiero nauczyć się dzielić z innymi. Na szczęście szybko zrozumie, że zabawa w samotności to żadna przyjemność. Przygoda Marysi pomoże małym czytelnikom przejść na skróty tę ważną życiową naukę.</p>',
                'details' => '<ul><li>Tytuł: Marysia To moje!</li>
<li>Autor: Nadia Berkane</li>
<li>Wydawnictwo: Debit</li>
<li>Seria: Misia Marysia</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 20</li>
<li>Format: 22.0x22.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 64427902492KS</li>
<li>Język: polski</li>
<li>Tłumacz: Krzak-Ćwiertnia Elżbieta</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788371679407</li>
<li>EAN: 9788371679407</li>
<li>Wymiary: 22.0x22.0x0.5 cm</li></ul>',
                'date' => new DateTime('03-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 2,
                'id_publishing' => 1,
                'img_href' => '/images/products/kot-papla-i-kaczuszka.jpg',
                'img_alt' => 'Kot Papla i kaczuszka',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kot Papla i kaczuszka',
                'promotion_price' => 0.29,
                'price' => 0.42,
                'year_publication' => 2017,
                'description' => '<p>Kot Papla i kaczuszka to opowiastka o kocie, który postanawia rozwikłać tajemnicę gumowej kaczuszki. Kaczuszka pachnie jak francuski ser i jest miękka, jak cytrynowy żelek. Kto ją porzucił? Za kim tęskniła? Śledztwo nie jest proste, znalezione dowody nie od razu prowadzą do właściciela porzuconej kaczuszki. Czy kotu uda się rozwiązać zagadkę? Co mu w tym pomoże? Dlaczego trzeba segregować śmieci? I czy zawsze starsi bracia mają rację?</p>
<p>Kot Papla i kaczuszka to książeczka dla dzieci, które znają już wszystkie litery, dwuznaki i zmiękczenia. Potrafią czytać, ale chcą robić to płynnie. Duże litery, proste zdania i piękne ilustracje są zaproszeniem na literkową ucztę.</p>',
                'details' => '<ul><li>Tytuł: Kot Papla i kaczuszka</li>
<li>Autor: Joanna Krzyżanek</li>
<li>Wydawnictwo: Debit</li>
<li>Seria: Czytamy Bez Mamy</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 32</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380571891</li>
<li>Język: polski</li>
<li>Podtytuł: Poziom 1 Pierwsze kroki</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788380571891</li>
<li>EAN: 9788380571891</li>
<li>Wymiary: 14.0x20.5x0.3 cm</li></ul>',
                'date' => new DateTime('04-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 3,
                'id_publishing' => 2,
                'img_href' => '/images/products/kopciuszek.jpg',
                'img_alt' => 'Kopciuszek',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kopciuszek',
                'promotion_price' => 0.32,
                'price' => 0.40,
                'year_publication' => 2015,
                'description' => '<p>Baśnie, bajki, poczytajki „Trzy świnki”, „Kopciuszek”, „Śpiąca królewna” Bajki znane i lubiane od pokoleń. Pięknie napisane i bogato zilustrowane uczą, że dobro zwycięża, a prawdziwa miłość wszystko przetrwa. Do czytania najmłodszym czytelnikom jako lektura obowiązkowa.</p>',
                'details' => '<ul><li>Autor: Bogusław Michalec</li>
<li>Wydawnictwo: Aksjomat</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 16</li>
<li>Stan: końcówka nakładu, książki są nowe
<li>Model: 978837713648533</li>
<li>ISBN: 9788377136485</li>
<li>EAN: 978837713648533</li></ul>',
                'date' => new DateTime('05-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 2,
                'id_publishing' => 1,
                'img_href' => '/images/products/przygoda-w-warzywniaku.jpg',
                'img_alt' => 'Przygoda w warzywniaku',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Przygoda w warzywniaku',
                'promotion_price' => 0.20,
                'price' => 0.30,
                'year_publication' => 2018,
                'description' => '<p>"Ignaś Ziółko gotuje. Przygoda w warzywniaku" to wspaniała książeczka dla dzieci, z którą maluchy będą miały okazję przeżyć kolejną przygodę z Ignasiem, tym razem w warzywniaku!</p>
<p>Ignasiowi nigdy nie brakuje pomysłów na to, co robić kolejnego dnia. Tym razem wybrał się niespodziewanie do warzywniaka, aby kontynuować kulinarną przygodę!</p>
<p>Ignaś Ziółko wraz ze swoim psem Kminkiem otwierają Bardzo Smaczną Księgę i postanawiają przenieść się do warzywniaka. Nie spodziewali się, że przeżyją tam tak niezwykłą przygodę! Będą mieli okazję przez kilka dni przygotowywać kolorowe, zdrowe i z pewnością smakowite potrawy. Dodatkowo Ignaś chce znaleźć odpowiedzi na najbardziej nurtujące go pytania? Dlaczego właściwie trzeba jeść cebulę? Czy Brukselka ma coś wspólnego z Brukselą? I czy ogórki lubią być zamknięte w słoiku? To dopiero początek ciekawych kwestii!</p>
<p>"Ignaś Ziółko gotuje. Przygoda w warzywniaku" to pełna dobrego poczucia humoru książeczka dla najmłodszych czytelników. Ignaś potrafi zainteresować każdego, a jego przygody zachęcają do dalszego czytania. W końcu to nie koniec tego, co spotka chłopca w najbliższym czasie! A jakie wspaniałe potrawy tym razem wymyśli Ignaś?</p>
<p>Joanna Krzyżanek jest polską autorką książek dla dzieci. Wydała takie pozycje jak "Bajka pachnąca cytrynami", "Bajka pachnąca czekoladą", "Bajka pachnąca truskawkami", "Cecylka Knedelek i Boże Narodzenie", "Cecylka Knedelek i fabryka czekolady".</p>',
                'details' => '<ul><li>Tytuł: Ignaś Ziółko gotuje. Przygoda w warzywniaku</li>
<li>Autor: Joanna Krzyżanek</li>
<li>Wydawnictwo: Debit</li>
<li>Seria: Ignaś Ziółko gotuje</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 104</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380572423</li>
<li>Język: polski</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788380572423</li>
<li>EAN: 9788380572423</li>
<li>Wymiary: 30.2x17.7x0.9 cm</li></ul>',
                'date' => new DateTime('06-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 2,
                'id_publishing' => 1,
                'img_href' => '/images/products/kot-papla-i-mleko.jpg',
                'img_alt' => 'Kot Papla i mleko',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kot Papla i mleko',
                'promotion_price' => 0.22,
                'price' => 0.32,
                'year_publication' => 2016,
                'description' => '<p>Kot Papla i mleko to opowiastka o kocie, który postanawia rozwikłać tajemnicę mlecznego jeziora. Skąd się wzięło? Dlaczego rośnie? Czy mała Kasia ma z tym, coś wspólnego? Niestety, śledztwo utknie w martwym punkcie, gdy miesz-kańcom miasteczka przestanie zależeć na rozwikłaniu zagadki. Czy kot rozwiąże mleczną zagadkę? Kto mu w tym pomoże? I czy jezioro zamieni się w morze? A może wyschnie?</p>
<p>Kot Papla i mleko to książeczka dla dzieci, które znają już wszystkie litery, dwuznaki i zmiękczenia. Potrafią czytać, ale chcą robić to płynnie. Duże litery, proste zdania i piękne ilustracje są zaproszeniem na literkową ucztę.</p>',
                'details' => '<ul><li>Autor: Joanna Krzyżanek</li>
<li>Wydawnictwo: Debit</li>
<li>Seria: Czytamy Bez Mamy</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 32</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380570894</li>
<li>Język: polski</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788380570894</li>
<li>EAN: 9788380570894</li>
<li>Wymiary: 14.0x20.5x0.5 cm</li></ul>',
                'date' => new DateTime('07-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 3,
                'id_publishing' => 2,
                'img_href' => '/images/products/trzy-swinki.jpg',
                'img_alt' => 'Trzy świnki',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Trzy świnki',
                'promotion_price' => 0.20,
                'price' => 0.42,
                'year_publication' => 2015,
                'description' => '<p>Baśnie, bajki, poczytajki „Trzy świnki”, „Kopciuszek”, „Śpiąca królewna” Bajki znane i lubiane od pokoleń. Pięknie napisane i bogato zilustrowane uczą, że dobro zwycięża, a prawdziwa miłość wszystko przetrwa. Do czytania najmłodszym czytelnikom jako lektura obowiązkowa.</p>',
                'details' => '<ul><li>Autor: Bogusław Michalec</li>
<li>Wydawnictwo: Aksjomat</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 16</li>
<li>Format: 21x21 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788377136492</li></ul>',
                'date' => new DateTime('08-01-2019'),
            ],
            [
                'id_cat' => '001001',
                'id_author' => 2,
                'id_publishing' => 1,
                'img_href' => '/images/products/kura-adela-jak-kura-zniosła-jajko.jpg',
                'img_alt' => 'Kura Adela Jak kura zniosła jajko',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kura Adela Jak kura zniosła jajko',
                'promotion_price' => 0.20,
                'price' => 0.48,
                'year_publication' => 2016,
                'description' => '<p>KURA ADELA to seria książek dla dzieci, które w różnym stopniu opanowały znajomość liter i technikę czytania. Przygody kury Adeli są dla Antosia, który czyta płynnie i potrafi opowiedzieć o tym, co przeczytał; dla Michała, który stara się odczytywać wyrazy i zdania, ale prosi dorosłych o pomoc przy trudniejszych fragmentach; dla Kasi, która skleja litery w wyrazy i próbuje uporać się z prostymi wypowiedzenia; oraz dla Poli, która właśnie rozpoczęła swoją przygodę z literami.</p>
<p>Książki o miłej, sympatycznej, psotnej, przemądrzałej, zagadkowej, pomysłowej i czasami marudnej kurze to także publikacje dla dorosłych, którzy chcą zaprosić dzieci do krainy wyrazów i towarzyszyć małym poszukiwaczom liter w ich przygodach.</p>
<p>Każda książka składa się z trzech bogato ilustrowanych opowiastek oraz trzech rozkładówek prezentujących trzy tytułowe litery. Na każdej stronie znajdują się kolorowe wyrazy zawierające wybraną literę. Pozwala to z łatwością ją odszukać, zapamiętać jej wygląd i skojarzyć z odpowiednią głoską.</p>
<p>Każdą książkę uzupełniają dwa zeszyty ćwiczeń: czerwony - dla dzieci, które dopiero poznają kolejne litery, oraz niebieski - dla młodych czytelników znających już graficzne obrazy głosek. Zeszyty zawierają między innymi ćwiczenia grafomotoryczne, zadania matematyczne, rebusy, szyfrowanki, kolorowanki i krzyżówki.</p>
<p>Książki razem z zeszytami mogą stać się bazą do projektowania domowych i szkolnych warsztatów dla dzieci na pierwszym etapie edukacji.</p>',
                'details' => '<ul><li>Autor: Joanna Krzyżanek</li>
<li>Wydawnictwo: Debit</li>
<li>Seria: Kura Adela</li>
<li>Oprawa: Twarda</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978837167947633</li>
<li>ISBN: 9788371679476</li>
<li>EAN: 978837167947633</li>
<li>Wymiary: 21.0x26.5x1 cm</li></ul>',
                'date' => new DateTime('09-01-2019'),
            ],

            //-----------------ksiazki/dla-mlodziezy-----------------

            [
                'id_cat' => '001002',
                'id_author' => 4,
                'id_publishing' => 3,
                'img_href' => '/images/products/korona.jpg',
                'img_alt' => 'Korona',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Korona',
                'promotion_price' => 0.50,
                'price' => 0.70,
                'year_publication' => 2017,
                'description' => '<p>Korona to piąty tom cyklu Selekcja, serii Rywalki autorstwa Kiery Cass. Cała seria trafia w gusta czytelniczek płci żeńskiej i to w różnym wieku. Zarówno tych nieco młodszych dziewcząt, jak i dojrzałych kobiet.</p>
<p>Ten tom spełnia marzenia każdej dziewczynki, która w dzieciństwie chciała zostać piękną księżniczką, bo główna bohaterka, Eadlyn, wydaje się mieć wszystko, czego tylko można zapragnąć. Brakuje jej jednak wybranka. Nie jakiegokolwiek, ale prawdziwej miłości. Jej rodzice urządzają casting, gdzie spośród 35 kandydatów, córka ma wybrać jednego na swojego doskonałego księcia. Powiedzieć jednak, że ma wątpliwości, iż znajdzie tu miłość swojego życia, to dość subtelne ujęcie. Księżniczka Eadlyn nie spodziewa się jednak, że przyjdzie jej dokonać tak trudnego wyboru. Być może trudniejszego niż kiedykolwiek w życiu.</p>
<p>Okładka pozwala zauroczyć się książką, fabuła czaruje nie mniej, a historia nie tylko wciąga, ale wbrew pozorom również uczy. W pozornie idealnym świecie stworzonym przez Kierę Cass można zatopić się na długo.</p>',
                'details' => '<ul><li>Autor: Kiera Cass</li>
<li>Wydawnictwo: Jaguar</li>
<li>Seria: Rywalki</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 336</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788376864594</li>
<li>Język: polski</li>
<li>Tłumacz: Kaczorowska Małgorzata</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376864594</li>
<li>EAN: 9788376864594</li>
<li>Wymiary: 14.0x21.0x2.5 cm</li></ul>',
                'date' => new DateTime('02-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 5,
                'id_publishing' => 4,
                'img_href' => '/images/products/Kroniki-Archeo-Tajemnica-klejnotu-Nefertiti.jpg',
                'img_alt' => 'Kroniki Archeo. Tajemnica klejnotu Nefertiti',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kroniki Archeo. Tajemnica klejnotu Nefertiti',
                'promotion_price' => 0.20,
                'price' => 0.37,
                'year_publication' => 2011,
                'description' => '<p>Któż nie chciałby choć przez chwilę być detektywem? Kto nie marzył nigdy o dalekich podróżach i zapierających dech w piersiach przygodach? A gdyby tak odwiedzić świat tajemnic i sekretów nie opuszczając własnego pokoju? Teraz stało się to możliwe, za sprawą książki Agnieszki Stelmaszyk "Kroniki Archeo. Tajemnica klejnotu Nefertiti".</p>
<p>Powieść ta adresowana jest przede wszystkim do młodzieży i starszych dzieci, co nie znaczy, że nie zainteresuje też dorosłego Czytelnika. Głównymi bohaterami są: rodzeństwo, Ania i Bartek Ostrowscy oraz Mary Jane Gardner i jej młodsi bracia bliźniacy Jim i Martin. Ich rodzice są wybitnymi archeologami, a dzieci towarzyszą im podczas jednej z wypraw do Egiptu. W hotelu poznają starszą panią, dzięki której wpadają na trop zaginionego grobowca. Ponieważ jednak skrywa ON tajemniczy skarb, na miejscu zjawiają się też groźni przestępcy, zwabieni łatwym łupem.</p>
<p>Wartka akcja powieści, wciągająca fabuła oraz prosty styl to podstawowe walory tej książki. Przygody następują po sobie niemal bez przerwy, dzieci napotykają na ciągle nowe wyzwania, które zmuszają je do rozwiązywania zagadek oraz wykazania się wiedzą, logicznym myśleniem, ale i odwagą. Bogato ilustrowana książka zachęca do lektury, a dodatkową zaletą są liczne mapki, wyjaśnienia trudniejszych słów, a także opis wydarzeń historycznych, do których nawiązuje dany fragment powieści. Poza dostarczaniem rozrywki ma więc ona także walory edukacyjne.</p>
<p>Dalsze przygody Ani, Bartka, Mary Jane, Jima i Martina odnajdziesz w kolejnych tomach serii, np. "Kroniki Archeo. Skarb Atlantów", "Kroniki Archeo. Sekret Wielkiego Mistrza" czy "Kroniki Archeo. Klątwa złotego smoka". Do tej pory ukazało się dziewięć tomów serii oraz dwa tomy specjalne, zatytułowane: "Kroniki Archeo. Dziennik Podróżnika" oraz "Kroniki Archeo. Akta Gordona Archera". Kolejny tom główny jest w przygotowaniu.</p>',
                'details' => '<ul><li>Tytuł: Kroniki Archeo Tajemnica klejnotu Nefertiti</li>
<li>Autor: Agnieszka Stelmaszyk</li>
<li>Wydawnictwo: Zielona Sowa</li>
<li>Seria: Kroniki Archeo</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 240</li>
<li>Format: 14.5x20.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53320901558KS</li>
<li>Język: polski</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376238890</li>
<li>EAN: 9788376238890</li>
<li>Wymiary: 14.5x20.5x2 cm</li></ul>',
                'date' => new DateTime('04-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 5,
                'id_publishing' => 4,
                'img_href' => '/images/products/Kroniki-Archeo-Skarb-Atlantow.jpg',
                'img_alt' => 'Kroniki Archeo. Skarb Atlantów',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kroniki Archeo. Skarb Atlantów',
                'promotion_price' => 0.20,
                'price' => 0.74,
                'year_publication' => 2011,
                'description' => '<p>Słońce, złoty piasek i szmaragdowe morze...Ach! Wakacje w Grecji są cudowne! Zaraz, zaraz, a a skąd wzięła się tutaj starożytna gemma? Kim jest profesor Flemming? I dlaczego Mojra Roditi depcze bohaterom po piętach? Rodzeństwo Ostrowskich po raz kolejny wyrusza na poszukiwania skarbów. Nie zabraknie oczywiście Gardnerów i panny Ofelii. Pojawi się też ktoś niespodziewany , ktoś, kto potrafi przetłumaczyć słowa Spyrosa Dimitriosa, i tym samym porusza lawinę zdarzeń...</p>
<p>Skarb Atlantów to kolejny tom przygodowej serii Kroniki Archeo. Wartka akcja, legendy, które okazują się prawdą, przyjaciele, na których zawsze można liczyć i mnóstwo humoru – oto książka, na którą czekaliście!</p>',
                'details' => '<ul><li>Tytuł: Kroniki Archeo Skarb Atlantów</li>
<li>Autor: Agnieszka Stelmaszyk</li>
<li>Wydawnictwo: Zielona Sowa</li>
<li>Seria: Kroniki Archeo</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 240</li>
<li>Format: 15.0x21.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53320801558KS</li>
<li>Język: polski</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376238951</li>
<li>EAN: 9788376238951</li>
<li>Wymiary: 15.0x21.0x2 cm</li></ul>',
                'date' => new DateTime('05-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 4,
                'id_publishing' => 3,
                'img_href' => '/images/products/Następczyni.jpg',
                'img_alt' => 'Następczyni',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Następczyni',
                'promotion_price' => 0.20,
                'price' => 0.47,
                'year_publication' => 2015,
                'description' => '<p>Kontynuacja bestsellerowej trylogii Kiery Cass! Dalszy ciąg losów królewskiej rodziny i mieszkańców Illei! Wielki powrót do pałacowych komnat, świata książąt i księżniczek, imponujących rywalizacji i bajkowych romansów! </p>
<p>Kolejne Eliminacje nadchodzą! </p>
<p>Od ostatnich Eliminacji minęło dwadzieścia lat. Nadszedł wreszcie czas, aby swojego przyszłego męża wybrała młodziutka Eadlyn. Księżniczka jednak nie liczy wcale na miłosne uniesienia czy bajkową historię, która przed laty przytrafiła się jej rodzicom - Americe Singer i księciu Maxonowi. Gdy jednak w szranki stają kandydaci rywalizujący o serce ślicznej Eadlyn, dziewczyna zaczyna wierzyć, że kłopotliwy konkurs może mieć naprawdę bajkowe zakończenie. </p>
<p>Kogo tym razem Eliminacje doprowadzą aż do pałacu? Rywalizację czas zacząć!</p>',
                'details' => '<ul><li>Autor: Kiera Cass</li>
<li>Wydawnictwo: Wydawnictwo Jaguar</li>
<li>Seria: Rywalki</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 300</li>
<li>Format: 12,5x19,5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788376863689</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: The heir</li>
<li>Tłumacz: Kaczarowska Małgorzata</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376863689</li>
<li>EAN: 9788376863689</li>
<li>Wymiary: 14.0x21.0x3 cm</li></ul>',
                'date' => new DateTime('07-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 6,
                'id_publishing' => 3,
                'img_href' => '/images/products/Zwiadowcy-Księga-1-Ruiny-Gorlanu.jpg',
                'img_alt' => 'Zwiadowcy Księga 1. Ruiny Gorlanu',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zwiadowcy. Ruiny Gorlanu',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2013,
                'description' => '<p>Trzecie miejsce na liście bestsellerów New York Timesa za „Zmierzchem” Stephenie Meyer i „Eragonem” Christophera Paoliniego! Ponad milion sprzedanych egzemplarzy i tłumaczenia na dwadzieścia języków.</p>
<p>Seria Ranger’s Apprentice australijskiego pisarza, Johna Flanagana, nareszcie w Polsce! Premiera pierwszego tomu pod roboczym tytułem „Ruiny Gorlanu” już w marcu 2009 roku.</p>
<p>Bohaterem książki jest piętnastoletni sierota, Will, wychowanek sierocińca. Jego ojciec poniósł bohaterską śmierć w trakcie ostatniego starcia ze złym baronem Morgarathem. Syn chciałby kontynuować tradycję. Może niekoniecznie dać się zabić, ale zostać rycerzem… Honor! Chwała! Odwaga!</p>
<p>Problem w tym, że do Szkoły Wojowników nie przyjmują mikrego wzrostu chucherek, które regularnie zbierają cięgi od rówieśników. A Will, cóż, nie dość, że niski, jest na dodatek chudy. Za to szybko ucieka.</p>
<p>Już wydaje się, że młodzieńcowi przypadnie mało atrakcyjna rola pańszczyźnianego chłopa, gdy nagle na scenie pojawia się tajemniczy Halt – zwiadowca. I on jeden spośród wszystkich mistrzów różnych szkół przyjmie Willa na ucznia. Zgryźliwy, humorzasty i wymagający, da chłopakowi popalić, ale… Wszystko jest lepsze od wiejskiego mozołu?</p>
<p>„Ruiny Gorlanu” to fantasy, w której nie uświadczysz czarodziejów w spiczastych kapeluszach, tajemniczych mikstur i wróżek. Świat Willa jest twardy, do bólu realistyczny i nikt z jego mieszkańców nie liczy na cuda – ważne są inteligencja, spryt i wytrwałość. Seria Flanagana pełna jest ironicznego poczucia humoru, trafnych obserwacji i komentarzy, a opisywani przez autora bohaterowie są pełni życia – daleko im do pozbawionych wszelkich wad herosów.</p>',
                'details' => '<ul><li>Tytuł: Zwiadowcy Księga 1 Ruiny Gorlanu</li>
<li>Autor: John Flanagan</li>
<li>Wydawnictwo: Wydawnictwo Jaguar</li>
<li>Seria: Zwiadowcy</li>
<li>Oprawa: Miękka</li>
<li>Format: 13,5x20 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53291401001KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Rangers Apprentice. The Ruins of Gorlan</li>
<li>Tłumacz: Kroszczyński Stanisław</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376860664</li>
<li>EAN: 9788376860664</li>
<li>Wymiary: 13.5x20.0x2.5 cm</li></ul>',
                'date' => new DateTime('09-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 6,
                'id_publishing' => 3,
                'img_href' => '/images/products/Drużyna-Tom-7-Kaldera.jpg',
                'img_alt' => 'Drużyna. Tom 7. Kaldera',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Drużyna. Kaldera',
                'promotion_price' => 0.20,
                'price' => 0.67,
                'year_publication' => 2017,
                'description' => '<p>“Kaldera” to już siódma część popularnej serii fantastycznej “Drużyna”. Ponownie spotykamy się z bohaterami, przed którymi stoją ogromne wyzwania i przygody.</p>
<p>Świat fantastyczny rozrasta się w książkach w niesamowitym tempie i wciąż nabiera nowych barw. Nic więc dziwnego, że również i Czytelników w każdym wieku przybywa coraz więcej. Seria “Drużyna” przeznaczona jest dla młodzieży, jednak może zainteresować również i starszych fanów magicznych zdarzeń. Tym razem na rynku ukazała się już siódma część pod tytułem “Kaldera”, w której nie brakuje niesamowitej akcji i efektownych potyczek między wrogami!</p>',
                'details' => '<ul><li>Tytuł: Drużyna 7. Kaldera</li>
<li>Autor: John Flanagan</li>
<li>Wydawnictwo: Wydawnictwo Jaguar</li>
<li>Seria: Drużyna</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 400</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788376865607</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Brotherband. The Caldera</li>
<li>Tłumacz: Kroszczyński Stanisław</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376865607</li>
<li>EAN: 9788376865607</li>
<li>Wymiary: 13.5x20.5x3 cm</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 6,
                'id_publishing' => 3,
                'img_href' => '/images/products/Zwiadowcy-Księga-6-Oblężenie-Macindaw.jpg',
                'img_alt' => 'Zwiadowcy Księga 6. Oblężenie Macindaw',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zwiadowcy. Oblężenie Macindaw',
                'promotion_price' => 0.20,
                'price' => 0.64,
                'year_publication' => 2017,
                'description' => '<p>Szósty tom znakomitej serii australijskiego pisarza Johna Flanagana "Zwiadowcy", bestseller "New York Timesa", doceniony również przez polskich czytelników. "Oblężenie Zamku Macindaw" kontynuuje wątki rozpoczęte w "Czarnoksiężniku z Północy".</p>
<p>Po wielu latach trudnej nauki u Halta, Will jest teraz samodzielnym zwiadowcą. Jego pierwsze doświadczenia w charakterze strażnika Araluenu nie zapowiadają wielkich sukcesów. Na północnych rubieżach Królestwa sytuacja staje się coraz bardziej niebezpieczna. Keren, rycerz renegat, pozbawiony skrupułów i sumienia wojownik, który porwał przyjaciółkę Willa - Alyss, przejmuje kontrolę nad Zamkiem Macindaw. Usytuowana w miejscu o wielkim znaczeniu strategicznym twierdza, jest wrotami na ziemie północy i to od jej załogi zależy w dużej mierze bezpieczeństwo Araluenu. Młody zwiadowca odkrywa, że zdradziecki Keren zawarł sojusz ze Skottami i chce oddać im zamek w zamian za tytuły i ziemie... Czasu jest niewiele - wróg zbliża się w szybkim tempie. Przetrzymywana w murach Macindaw Alyss niestrudzenie zbiera informacje o planach najazdu, jednak grozi jej śmiertelne niebezpieczeństwo. Will musi zebrać ludzi, by przejąć twierdzę, nim Keren odda ją w ręce Skottów. Znakomicie obwarowany zamek stanowiłby wyzwanie nawet dla regularnej armii, a młody zwiadowca ma u swego boku jedynie garstkę przyjaciół...</p>',
                'details' => '<ul><li>Autor: John Flanagan</li>
<li>Wydawnictwo: Wydawnictwo Jaguar</li>
<li>Seria: Zwiadowcy</li>
<li>Oprawa: Miękka</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788376860183</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Rangers apprentice: The siege of Macindaw</li>
<li>Tłumacz: Strukowska Dorota</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376860183</li>
<li>EAN: 9788376860183</li>
<li>Wymiary: 13.5x20.0x3 cm</li></ul>',
                'date' => new DateTime('15-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 4,
                'id_publishing' => 3,
                'img_href' => '/images/products/Jedyna.jpg',
                'img_alt' => 'Jedyna',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Jedyna',
                'promotion_price' => 0.20,
                'price' => 0.79,
                'year_publication' => 2014,
                'description' => '<p>Ostatnia część bestsellerowej trylogii.</p>
<p>America jest jedną z czterech dziewcząt, które utrzymały się w ścisłej czołówce Eliminacji. Ukochana przez zwykłych ludzi, znienawidzona przez obecnego króla, dziewczyna wciąż nie jest pewna swych uczuć. A jednak nadchodzi moment ostatecznego wyboru, tym trudniejszego, że cały los Illei może spoczywać właśnie w rękach Ami.</p>
<p>Czy dziewczyna powróci do swej dawnej miłości, czy zdecyduje się zostać królową i podjąć walkę o lepszy świat dla siebie i wszystkich mieszkańców Illei?</p>',
                'details' => '<ul><li>Tytuł: Jedyna</li>
<li>Autor: Kiera Cass</li>
<li>Wydawnictwo: Wydawnictwo Jaguar</li>
<li>Seria: Rywalki</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 320</li>
<li>Format: 140 x 210 mm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788376862873</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: The One</li>
<li>Tłumacz: Kaczarowska Małgorzata</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788376862873</li>
<li>EAN: 9788376862873</li>
<li>Wymiary: 14.0x21.0x2.5 cm</li></ul>',
                'date' => new DateTime('17-02-2019'),
            ],
            [
                'id_cat' => '001002',
                'id_author' => 5,
                'id_publishing' => 4,
                'img_href' => '/images/products/Kroniki-Archeo-Oko-weza.jpg',
                'img_alt' => 'Kroniki Archeo. Oko węża',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kroniki Archeo. Oko węża',
                'promotion_price' => 0.20,
                'price' => 0.87,
                'year_publication' => 2018,
                'description' => '<p>Porwanie! Szantaż! Bezcenny klejnot!</p>
<p>Ania i Bartek Ostrowscy odpoczywają z rodzicami i przyjaciółmi w sielskim alpejskim miasteczku. Spokój nie trwa jednak długo – w czasie zwiedzania zabytkowego zamku porwana zostaje panna Ofelia! Jaki jest związek pomiędzy porwaniem a dziewiętnastowiecznym władcą? Czy szantażysta zostanie zdemaskowany? I czy dwóm rodzinom archeologów uda się odszukać legendarne Oko Węża? Pytania mnożą się, czasu na rozwikłanie zagadki jest coraz mniej, a Ostrowskim i Gardnerom zaczyna grozić śmiertelne niebezpieczeństwo.</p>',
                'details' => '<ul><li>Tytuł: Kroniki Archeo. Tom 10. Oko węża</li>
<li>Autor: Agnieszka Stelmaszyk</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Seria Kroniki Archeo</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 272</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380737570</li>
<li>Język: polski</li>
<li>ISBN: 9788380737570</li>
<li>EAN: 9788380737570</li>
<li>Wymiary: 14.5x20.5x2.2 cm</li></ul>',
                'date' => new DateTime('19-02-2019'),
            ],

            //-----------------ksiazki/dla-kobiet-----------------

            [
                'id_cat' => '001003',
                'id_author' => 7,
                'id_publishing' => 5,
                'img_href' => '/images/products/Po-drugiej-stronie.jpg',
                'img_alt' => 'Po drugiej stronie',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Po drugiej stronie',
                'promotion_price' => 0.20,
                'price' => 1.19,
                'year_publication' => 2019,
                'description' => '<p>Gdziekolwiek się znajdujesz, zawsze ktoś stoi po drugiej stronie…</p>
<p>Drugi tom pasjonującej powieści o losach zawiedzionej przyjaźni i nieodwzajemnionej miłości. A także o tym, czy można, na przekór wszystkiemu, a przede wszystkim wbrew sobie, naprawić błędy, które popełniło się w przeszłości. Czy da się uchronić dzieci od konsekwencji złych decyzji, podjętych przed laty? I czy na pewno warto to robić? To tylko jedno z pytań, jakie zadaje sobie Blanka, nauczycielka języka polskiego w liceum. Pamiętnik jej przyjaciółki Justyny odkrywa przed nią kolejne elementy układanki, a w głowie Blanki powoli tworzy się pełny obraz przeszłości. W tle opowieści zmagania zwykłych ludzi z dramatyczną historią drugiej połowy lat siedemdziesiątych i stanu wojennego w Polsce.</p>
<p>Nie mogła oprzeć się irracjonalnej myśli, że przeszłość właśnie wyciągała ku niej swoje ramiona, nie była tylko pewna, czy po to, aby ją przygarnąć i utulić, czy wręcz przeciwnie – zgnieść, wymierzyć sprawiedliwość. Mimo to nie zawróciła, szła dalej. Instynktownie przystanęła przy domu Kwiatkowskich. Rodzina jej byłego męża. Oboje Kwiatkowscy już nie żyli, dom przejął jakiś daleki powinowaty, z którym teściowie Blanki nie utrzymywali kontaktu, a ona ani razu nie widziała go na oczy. Tak czy owak, nowy właściciel także nie wprowadził większych zmian, tyle że w przeciwieństwie do sąsiadów odnowił fronton i parkan. Przez moment, wciąż ulegając uczuciu déja vu, Blanka miała nawet wrażenie, że zaraz zobaczy Krzysztofa, tak jak wtedy, przed laty, gdy go poznała. Z szuflą do odśnieżania.</p>',
                'details' => '<ul><li>Autor: Agnieszka Janiszewska</li>
<li>Wydawnictwo Novae Res</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2019</li>
<li>Ilość stron: 360</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381472562</li>
<li>Język: polski</li>
<li>ISBN: 9788381472562</li>
<li>EAN: 9788381472562</li></ul>',
                'date' => new DateTime('20-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 8,
                'id_publishing' => 6,
                'img_href' => '/images/products/Wyznania-buntowniczki.jpg',
                'img_alt' => 'Wyznania buntowniczki',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wyznania buntowniczki',
                'promotion_price' => 0.20,
                'price' => 0.99,
                'year_publication' => 2016,
                'description' => '<p>Dzieciństwo Lucky Santangelo nie było łatwe. Gdy miała pięć lat, znalazła w basenie zwłoki swej zamordowanej matki. Od tego czasu Gino, jej apodyktyczny ojciec, potężny biznesmen o złowrogiej reputacji, stara się całkowicie kontrolować życie swoich dzieci. Dla ich bezpieczeństwa.</p>
<p>Jednak Lucky jest dzika i nieokiełznana! Raz po raz pakuje się w kłopoty. Kiedy znowu wyrzucają ją ze szkoły po tym, jak przyłapano ją z chłopakiem w łóżku, postanawia wyrwać się z więzienia. Ma już przecież piętnaście lat i nie musi wracać do szkoły. Teraz sama będzie decydować, co robić, z kim i kiedy.</p>
<p>Wystarczy telefon do najlepszej przyjaciółki, żeby rozpocząć przygodę życia. Dwie nastolatki wyruszają z USA do Europy w poszukiwaniu przygody, dobrej zabawy i chłopaków. To będzie podróż, która na zawsze odmieni ich życie. W ślad za nimi wyruszają ich ojcowie, dwaj bogaci, samotni mężczyźni.</p>',
                'details' => '<ul><li>Tytuł: Wyznania buntowniczki</li>
<li>Autor: Jackie Collins</li>
<li>Wydawnictwo W.A.B.</li>
<li>Seria Pocket</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 288</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328042025</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Confessions of a wild child</li>
<li>Tłumacz: Halbersztat Anna</li>
<li>ISBN: 9788328042025</li>
<li>EAN: 9788328042025</li>
<li>Wymiary: 11.1x17.3x1.5 cm</li></ul>',
                'date' => new DateTime('21-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 8,
                'id_publishing' => 6,
                'img_href' => '/images/products/Zabojczynie-milosci.jpg',
                'img_alt' => 'Zabójczynie miłości',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zabójczynie miłości',
                'promotion_price' => 0.20,
                'price' => 1.05,
                'year_publication' => 2016,
                'description' => '<p>Kiedy Margaret, orędowniczka praw kobiet, zostaje zastrzelona podczas płomiennego przemówienia do prostytutek, jej bliscy poprzysięgają zemstę. By zniszczyć stojącego za zamachem mafiosa Enzia Bassalino, dwie siostry przyrodnie zamordowanej, Lara i Beth, a także jej przyjaciółka Rio Java postanawiają na własną rękę wymierzyć sprawiedliwość. Planują uderzyć tam, gdzie zaboli najbardziej ? za grzechy mafijnego bonzy będą musieli zapłacić jego synowie. Niedbająca o konwenanse Rio Java, kochająca luksus Lara oraz niewinna i wrażliwa Beth nie przebierają w środkach. Każda z nich z determinacją wypełnia wyznaczone zadanie ? uwieść i doprowadzić do ruiny jednego z trzech braci Bassalino. Sprawy komplikują się, gdy w grę zaczynają wchodzić uczucia, a do festiwalu zemsty przyłącza się konkurencyjna organizacja przestępcza.</p>
<p>Jest tu wszystko, co najlepsze u Jackie Collins ? piękne kobiety, włoska mafia, seks, show business i blichtr wielkiego miasta w Stanach Zjednoczonych lat 70. XX wieku.</p>',
                'details' => '<ul><li>Tytuł: Zabójczynie miłości</li>
<li>Autor: Jackie Collins</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Gąbka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 224</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328014992</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: The love killers</li>
<li>Tłumacz: Szmigiel Edward</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788328014992</li>
<li>EAN: 9788328014992</li>
<li>Wymiary: 12.5x19.5x1.6 cm</li></ul>',
                'date' => new DateTime('22-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 8,
                'id_publishing' => 6,
                'img_href' => '/images/products/Lucky.jpg',
                'img_alt' => 'Lucky',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lucky',
                'promotion_price' => 0.20,
                'price' => 1.22,
                'year_publication' => 2014,
                'description' => '<p>Rodzina Santangelo powraca! Gino Santangelo po wielu latach starań zbudował wymarzone imperium. Teraz nadchodzi czas jego córki. Lucky Santangelo doskonale wie, czego chce, i nie zawaha się, by osiągnąć swój cel. Nawet jeśli dążąc do jego realizacji, będzie musiała położyć na szali swoją karierę, wolność, a nawet życie. Szczególnie cudze życie. Przez lata twardo walczyła o swoją pozycję. Gdy tylko dostała szansę, w pełni ją wykorzystała. Jej kasyno w Atlantic City prosperuje doskonale. Ale apetyt rośnie w miarę jedzenia. Kiedy wreszcie stała się dla ojca niemal równorzędną partnerką w interesach, na jej drodze pojawiły się kolejne przeszkody. Stawkę podbiło kilku naprawdę wytrawnych graczy: Enzio Bonatti - dawny sprzymierzeniec, przyjaciel, który zdradził zaufanie i którym zawładnęła chciwość; Susan Martino, przebiegła wdowa, która poprzez łóżko zaczyna zdobywać coraz większą kontrolę nad Ginem; bajecznie bogata rodzina Stanislopoulos, z którą na pewno trzeba się liczyć. W świecie, gdzie każdy krok może okazać się fałszywy, Lucky twardą ręką prowadzi swoje biznesy. Czy uda jej się również odnaleźć prawdziwą miłość? To wielowątkowa powieść, brutalna, pełna seksu i skomplikowanych intryg, która wciąga od pierwszych stron. Godna kontynuacja Szans!</p>',
                'details' => '<ul><li>Autor: Jackie Collins</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 768</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978832800964633</li>
<li>EAN: 978832800964633</li>
<li>Wymiary: 12.3x19.5x0.5 cm</li></ul>',
                'date' => new DateTime('23-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 7,
                'id_publishing' => 5,
                'img_href' => '/images/products/Urok-poznego-lata.jpg',
                'img_alt' => 'Urok późnego lata',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Urok późnego lata',
                'promotion_price' => 0.20,
                'price' => 1.35,
                'year_publication' => 2018,
                'description' => '<p>Czy za błędy popełnione w młodości trzeba płacić przez całe życie?</p>
<p>Dzieciństwo małej Ady rozpoczyna się od tragedii, która położy się cieniem na całym jej życiu. Nienawiść do macochy i żal do ojca staną się głównymi uczuciami, jakie dziewczyna będzie w sobie pielęgnować przez całą młodość. Dopiero po wielu latach okaże się, że w tej historii jest mnóstwo tajemnic i niedopowiedzianych wątków. Czy ich rozwikłanie przyniesie ulgę i przebaczenie, czy wręcz przeciwnie – sprawi, że jeszcze trudniej będzie bez żalu myśleć o miejscu, z którego się pochodzi i ludziach, których się kocha?</p>',
                'details' => '<ul><li>Autor: Agnieszka Janiszewska</li>
<li>Wydawnictwo Novae Res</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 386</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380838833</li>
<li>Język: polski</li>
<li>ISBN: 9788380838833</li>
<li>EAN: 9788380838833</li>
<li>Wymiary: 14.5x20.7x3.2 cm</li></ul>',
                'date' => new DateTime('24-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 7,
                'id_publishing' => 5,
                'img_href' => '/images/products/Aleja-starych-topoli.jpg',
                'img_alt' => 'Aleja starych topoli',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Aleja starych topoli',
                'promotion_price' => 0.20,
                'price' => 0.88,
                'year_publication' => 2017,
                'description' => '<p>Kiedy osiemnastoletnia Ewa zostaje wydana za starszego o dwadzieścia lat owdowiałego małżonka swojej starszej siostry, nikt nie ma wątpliwości, że ten zaaprobowany przez jej okrutnego ojca związek nie przyniesie dziewczynie nic dobrego. Szwagier, ojciec trójki dzieci, niecieszący się wśród towarzystwa dobrą opinią, nie budzi w niej jednak odrazy, lecz jako przyszły mąż niesie nadzieję na wyczekiwaną przez lata poprawę losu dziecka niechcianego i odtrącanego przez własnych rodziców tylko dlatego, że nie urodziło się chłopcem. Zahukana i poniewierana ostatnia córka mecenasa Więckowskiego zostaje panią we dworze i jest uwielbiana przez męża, który podobnie jak ona pragnie pogrzebać przeszłość na cmentarzu i odciąć się od nielubianego teścia. Dwór wznoszący się od lat na końcu alei starych topoli kryje jednak stare tajemnice, które nie pozwalają zapomnieć o tym, co było.</p>
<p>Kolejna dwutomowa powieść Agnieszki Janiszewskiej, podobnie jak poprzednia (Szepty i tajemnice) zaprasza czytelnika do ziemiańskiego dworku, do mieszczańskich kamienic Warszawy, a także do Paryża, w którym dobiega właśnie końca szalona belle poque. Namalowany z pietyzmem obraz ówczesnych obyczajów uzupełniają dogłębne portrety psychologiczne poszczególnych bohaterów.</p>',
                'details' => '<ul><li>Autor: Agnieszka Janiszewska</li>
<li>Wydawnictwo Novae Res</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 342</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380834545</li>
<li>Język: polski</li>
<li>ISBN: 9788380834545</li>
<li>EAN: 9788380834545</li>
<li>Wymiary: 14.5x21.0x2.3 cm</li></ul>',
                'date' => new DateTime('25-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 7,
                'id_publishing' => 5,
                'img_href' => '/images/products/Pamietam.jpg',
                'img_alt' => 'Pamiętam',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Pamiętam',
                'promotion_price' => 0.20,
                'price' => 1.32,
                'year_publication' => 2017,
                'description' => '<p>Dwadzieścia lat po zakończeniu II wojny światowej z Paryża do Warszawy przyjeżdża młoda kobieta, Izabella Seigner, aby odszukać i poznać rodzinę swojej zmarłej matki.</p>
<p>Prowansja, Paryż, Lyon, majątek ziemski w Bolesławicach oraz Warszawa oto miejsca, w których rozgrywa się nie tylko piękna, ale i mądra historia o miłości i nienawiści. A także o tym, jak wiele zależy od nas samych.</p>
<p>Pamiętam opisuje skomplikowane losy czterech związanych ze sobą kobiet, których życie toczy się na tle dramatycznych wydarzeń pierwszej połowy XX wieku. Odwzorowany z talentem malarza portret rodziny, której członkowie, wbrew niesprzyjającym okolicznościom, usiłują kochać, realizować pragnienia, dokonywać dobrych wyborów, a przede wszystkim nigdy nie poddawać się.</p>
<p>Agnieszka Janiszewska zabrała mnie w refleksyjną podróż po czasie i przestrzeni. W tej książce jest wszystko miłość, nienawiść, śmierć, kłamstwo i tajemnica. To wspaniała, literacka uczta dla każdego, bowiem od lektury tego utworu po prostu nie da się oderwać.</p>',
                'details' => '<ul><li>Autor: Agnieszka Janiszewska</li>
<li>Wydawnictwo Novae Res</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 524</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380836778</li>
<li>Język: polski</li>
<li>ISBN: 9788380836778</li>
<li>EAN: 9788380836778</li>
<li>Wymiary: 14.5x20.5x4 cm</li></ul>',
                'date' => new DateTime('26-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 8,
                'id_publishing' => 6,
                'img_href' => '/images/products/Szanse.jpg',
                'img_alt' => 'Szanse',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Szanse',
                'promotion_price' => 0.20,
                'price' => 0.78,
                'year_publication' => 2015,
                'description' => '<p>Nowy Jork, pierwsza połowa XX wieku. Brutalne życie, świat, w którym liczą się tylko pieniądze. Żeby stać się tu kimś, wystarczy wyciągnąć po nie rękę. I nie mieć skrupułów. Seks, przemoc i handel alkoholem w czasach prohibicji - to najkrótsze drogi do bogactwa. W miejskiej dżungli każdy ma równe szanse. Trzeba tylko umieć je wykorzystać.</p>
<p>Gino Santangelo, ambitny chłopak z ulicy, kładzie podwaliny pod własne imperium. Carrie, nastoletnia prostytutka, marzy, by się wzbogacić i zacząć wieść normalne życie. Droga nie będzie usłana różami... Ale Nowy Jork to przecież miasto szans.</p>
<p>Po wielu latach los ponownie rzuca ich do Nowego Jorku. Carrie musi powstrzymać szantażystę, chcącego upublicznić tajemnicę jej przeszłości. Gino powraca, by znów przejąć kontrolę nad swymi interesami. Jednak jego córka, Lucky, przyzwyczaiła się już do władzy i zrobi wszystko, by dalej samodzielnie kierować biznesem ojca.</p>
<p>Nowy Jork pogrąża się w ciemnościach. Najgłębiej skrywane sekrety mogą wyjść na jaw. Co ukaże się oczom ludzi, gdy światła ponownie rozbłysną?</p>',
                'details' => '<ul><li>Autor: Jackie Collins</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978832800931833</li>
<li>ISBN: 9788328009318</li>
<li>EAN: 978832800931833</li>
<li>Wymiary: 12.5x19.5x5.6 cm</li></ul>',
                'date' => new DateTime('27-02-2019'),
            ],
            [
                'id_cat' => '001003',
                'id_author' => 8,
                'id_publishing' => 6,
                'img_href' => '/images/products/Znajomi-z-Los-Angeles.jpg',
                'img_alt' => 'Znajomi z Los Angeles',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Znajomi z Los Angeles',
                'promotion_price' => 0.20,
                'price' => 0.99,
                'year_publication' => 2014,
                'description' => '<p>Kto z nas nie marzy o dalekiej podróży do Stanów Zjednoczonych? Kto z nas nie marzy o intrygujących pełnych niepewności i adrenaliny przygodach? Kto z nas nie marzy o przeżyciu na własnej skórze dreszczyku emocji związanego z niebezpieczeństwem i niepewnością? Wszystkie te marzenia możemy spełnić przenosząc się w świat fantazji z książką "Znajomi z Los Angeles", która wciągnie nas w swoją fabułę tak, że przeczytamy ją jednych tchem.</p>
<p>Książka opowiada historię doświadczonej i uznanej w Nowym Jorku pisarki, która przenosi się do Los Angeles by napisać artykuł o Freddie\'m Leonie. Freddie to największy i najpotężniejszy agent w całym Hollywood. Młoda i ambitna dziennikarka, im dłużej znajduje się w świecie pełnym blichtru i sławy przepełnionym intrygami walką o władzę, sławę i wielkie pieniądze, tym bardziej jej ciekawość zostaje rozbudzona. </p>
<p>Madison Castelli odnajduje coraz więcej tematów wartych opisania. Oprócz wielu intryg, w tajemniczym Los Angeles ma miejsce również niewyjaśnione morderstwo. Jak skończy się ta dziennikarska wyprawa Madie, czy uda się odnaleźć mordercę? Tego wszystkiego dowiecie się sięgając po tę znakomitą pozycję.</p>
<p>Autorka książki "Znajomi z Los Angeles" Jackie Collins to popularna angielska pisarka, która stworzyła wiele rewelacyjnych bestsellerowych pozycji. Wszystkie jej książki łączy świetnie skonstruowana trzymająca w napięciu i ciekawości fabuła, a także świetnie wykreowane sylwetki głównych bohaterów. </p>
<p>Jackie Collins tworzy osobowości bardzo charyzmatyczne, pełne uroku i bardzo nieprzeciętne. Historie są porywające, a sami bohaterowie już od pierwszych stron książek wzbudzają naszą sympatię, przez co zaprzyjaźniamy się z nimi i w efekcie nie jesteśmy w stanie oderwać się od czytania.</p>
<p>Podczas lektury książek tej autorki można odnieść wrażenie, że przedstawiane historie opowiada nam nasz dobry znajomy. Warto sięgnąć po różne pozycje tej znakomitej i utalentowanej pisarki. Niezwykle intrygująca i bardzo dynamicznie skonstruowana fabuła pozycji "Znajomi z Los Angeles" na pewno rozbudzi wasz apetyt na więcej. </p>
<p>Książka sprawdzi się zarówno dla kobiet jak i dla mężczyzn, ponieważ każdy odnajdzie w niej wątek, który go zaciekawi. "Znajomi z Los Angeles" to pozycja idealna nie tylko do domowej biblioteczki, ale również bardzo dobry pomysł na prezent urodzinowy.</p>',
                'details' => '<ul><li>Tytuł: Znajomi z Los Angeles</li>
<li>Autor: Jackie Collins</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 416</li>
<li>Format: 12.5x19.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328009219</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: L. A. connections</li>
<li>Tłumacz: Malita Katarzyna</li>
<li>Nr wydania: 2</li>
<li>ISBN: 9788328009219</li>
<li>EAN: 9788328009219</li>
<li>Wymiary: 12.5x19.5x3 cm</li></ul>',
                'date' => new DateTime('28-02-2019'),
            ],

            //-----------------ksiazki/naukowe-----------------

            [
                'id_cat' => '001004',
                'id_author' => 9,
                'id_publishing' => 7,
                'img_href' => '/images/products/Ksiazki-nie-godne-czytania.jpg',
                'img_alt' => 'Książki (nie)godne czytania?',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Książki (nie)godne czytania?',
                'promotion_price' => 0.82,
                'price' => 0.95,
                'year_publication' => 2017,
                'description' => '<p>Książki (nie)godne czytania? wyrosły z osobistej potrzeby autora. Profesor Bogusław Śliwerski znany jest z tego, że od lat wyraża sprzeciw. Ta nonkonformistyczna postawa przybrała tym razem formę recenzji, krótkich szkiców krytycznych, poświęconych kilkudziesięciu tytułom, jakie w ostatnim czasie ukazały się na rynku wydawniczym.</p>
<p>Dlaczego tak? W wstępie do swej książki profesor Śliwerski porusza dwie kwestie; pierwszą jest rzekomy spadek czytelnictwa w Polsce (zdaniem profesora to nie tyle spadek, co przekierowanie: czytam sporo, a przynajmniej niewiele mniej niż dawniej, ale większość lektury odbywa się obecnie w Sieci; tu znajdujemy interesujące nas tytuły, potrzebne informacje, upragnioną rozrywkę...), drugą - zalew literatury brukowej, przysłowiowych szmatławców, niejednokrotnie urzekających wyrafinowaną oprawą i sprytną akcją marketingową. Właśnie po to, by przeciwdziałać owemu niekontrolowanemu spadku (upadku?) jakości proponowanej nam literatury, profesor Śliwerski bierze na warsztat blisko siedemdziesiąt tytułów - książek fachowych, specjalistycznych i tych zupełnie swobodnych - by wskazać wszystkim zainteresowanym garść tytułów wartych uwagi. Książki (nie)godne czytania? należy zatem potraktować jako drogowskaz, światło latarni i podręczny przewodnik po lekturze publikacji Oficyny Impuls ale nie tylko...</p>',
                'details' => '<ul><li>Tytuł: KSIĄŻKI(nie)godne czytania?</li>
<li>Autor: Bogusław Śliwerski</li>
<li>Wydawnictwo Impuls</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 240</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380952652</li>
<li>Język: polski</li>
<li>ISBN: 9788380952652</li>
<li>EAN: 9788380952652</li>
<li>Wymiary: 16.0x23.5x1.5 cm</li></ul>',
                'date' => new DateTime('01-03-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 12,
                'id_publishing' => 7,
                'img_href' => '/images/products/Dziedzictwo-ktorego-nie-mozna-odrzucic.jpg',
                'img_alt' => 'Dziedzictwo, którego nie można odrzucić',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Dziedzictwo, którego nie można odrzucić',
                'promotion_price' => 0.20,
                'price' => 1.30,
                'year_publication' => 2016,
                'description' => '<p>Człowiek dziedziczy przeszłość. Spadek to czasem przyjemny, a czasem kłopotliwy – ale taki, którego nie można nie przyjąć. […] Dziedziczymy nawet tę przeszłość, która zdawałaby się, skończyła się definitywnie. Ona, bowiem wpłynęła na sytuację, w której powstaje to, co nowe.</p>
<p>Działalność i historia Związku Harcerstwa Polskiego (ZHP) są tematem licznych opracowań, do których należą: <br/>
- wspomnienia, biografie dawnych i współczesnych harcerek, harcerzy, instruktorów, działaczy;<br/>
- monografie środowisk: drużyn, kręgów, hufców, chorągwi, oddziałów, a także obszarów (np. harcerstwo ziemi kieleckiej, Podlasia);<br/>
- syntetyczne opracowania poszczególnych okresów dziejów organizacji;<br/>
- wybory źródeł dziejów ZHP obejmujące fragment jego działalności.</p>
<p>Na rynku księgarskim dostępne są także wznowienia książek harcerskich z dawnych lat, wśród których wyróżnia się seria opracowana przez Oficynę Wydawniczą „Impuls” pod hasłem „Przywrócić Pamięć”.</p>
<p>Brak było – w moim odczuciu – opracowania, które zawierałoby zbiór oryginalnych źródeł dotyczących dziejów ZHP, od chwili powstania stowarzyszenia do czasów współczesnych. Dlatego też opracowałam trzytomową publikację Wybór źródeł do dziejów ZHP wydaną przez Oficynę Wydawniczą „Impuls” w 2014 roku, która obejmuje lata 1918–2014. Opublikowanie tych źródeł miało na celu udostępnienie szerszemu gronu czytelników materiałów dostępnych jak dotąd nielicznym. Chciałam w ten sposób ułatwić zainteresowanym studia nad dziejami ZHP poprzez samodzielną lekturę i własną interpretację zgromadzonych dokumentów.</p>',
                'details' => '<ul><li>Autor: Katarzyna Marszałek</li>
<li>Wydawnictwo Impuls</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 304</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788378508892</li>
<li>Język: polski</li>
<li>Podtytuł: Wybór źródeł do dziejów ZHP</li>
<li>ISBN: 9788378508892</li>
<li>EAN: 9788378508892</li>
<li>Wymiary: 16.0x23.0x2.1 cm</li></ul>',
                'date' => new DateTime('12-01-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 9,
                'id_publishing' => 7,
                'img_href' => '/images/products/Pedagogika-ogolna.jpg',
                'img_alt' => 'Pedagogika ogólna',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Pedagogika ogólna',
                'promotion_price' => 0.20,
                'price' => 0.86,
                'year_publication' => 2012,
                'description' => '<p>Książka Bogusława Śliwerskiego stanowi kolejne potwierdzenie niezwykle wysokiego statusu tego naukowca we współczesnych naukach o edukacji. Stoi – pod każdym względem – na bardzo wysokim poziomie merytorycznym, posiadając przy tym wszystkie te cechy, które charakteryzują dzieła wybitne: oryginalność idei, swobodę i wartkość narracji, integralność wywodów, odwoływanie się do bogatej i reprezentatywnej literatury przedmiotu, erudycyjność, wreszcie „mądrą metanarracyjność”. […] Jest przy tym dzieło to wspaniałą i udaną próbą potwierdzenia statusu naukowego pedagogiki jako dyscypliny z istoty swojej interdyscyplinarnej, która pozostając na styku idei i rzeczywistości, krystalizuje wiele problemów teoretycznych i społecznych. Jednocześnie podręcznik ten zawiera – bardzo trafną – autorefleksję pedagoga nad tożsamością pedagogiki jako nauki i jako praktyki społecznej, przy jednoznacznym opowiedzeniu się za ideą „kulturowego krytycyzmu” i orientacją na tworzenie „lepszego świata”. To także tożsamość, której integralną częścią jest rezygnacja z jakiegokolwiek autorytaryzmu i orientacja na rozwój podmiotowości młodych ludzi.</p>',
                'details' => '<ul><li>Tytuł: Pedagogika ogólna</li>
<li>Autor: Bogusław Śliwerski</li>
<li>Wydawnictwo Impuls</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2012</li>
<li>Ilość stron: 384</li>
<li>Format: 16.0x23.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 59558301602KS</li>
<li>Język: polski</li>
<li>Podtytuł: Podstawowe prawidłowości</li>
<li>ISBN: 9788375879087</li>
<li>EAN: 9788375879087</li>
<li>Wymiary: 16.0x23.5x2 cm</li></ul>',
                'date' => new DateTime('22-02-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 9,
                'id_publishing' => 7,
                'img_href' => '/images/products/Wspolczesne-teorie-i-nurty-wychowania.jpg',
                'img_alt' => 'Współczesne teorie i nurty wychowania',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Współczesne teorie i nurty wychowania',
                'promotion_price' => 0.20,
                'price' => 0.59,
                'year_publication' => 2016,
                'description' => '<p>Już w pierwszym rozdziale Autor pisze o potrzebie prowadzenia badań metateoretycznych i porównawczych wskazując jak wiele wiąże się z tym problemów. Przedstawienie współczesnych teorii i nurtów wychowania rozpoczęte zostało od zaprezentowania dokonań śp. profesora Karola Kotłowskiego, który uczył konfrontowania współczesności z tradycją bez imperatywu zaprzeczania wnoszonym przez alternatywne podejścia do istoty wychowania i kształcenia.</p>
<p>W podręczniku znajdziemy obszerne omówienia m.in. pedagogiki filozoficznej, chrześcijańskiej pedagogiki personalno-egzystencjalnej, pedagogik: społeczno-personalistycznej, serca, miłości, Gestalt, autorytarnej, niedyrektywnej, radykalnego humanizmu, emancypacyjnej, międzykulturowej, analityczno-krytycznej, ponowoczesności. Każdą teorię wychowania poprzedza biogram prekursora danej myśli naukowej.</p>
<p>Mamy nadzieję, że niniejsza książka stanie się kolejną zachętą do zgłębiania "świata pedagogicznych idei", ich korzeni i współczesnej ich ewolucji, bez roszczenia sobie pretensji do jekiejkolwiek wyłączności. Nie jest ona przecież ostatecznym, zamkniętym zbiorem teorii czy nurtów współczesnego wychowania, ale zaledwie otwarciem pola do ich zaistnienia, które będzie z czasem wypełniane kolejnymi ich rodzajami i odcieniami. Warto kontynuować rozpoczęty przez wspomnianych w książce Profesorów proces badań metateoretycznych, by dokonywanie wyborów nie wiązało się z hierarchicznym ich porządkowaniem ze względu na siłę, wagę czy znaczenie, a mimo to nie było trywialne.</p>',
                'details' => '<ul><li>Autor: Bogusław Śliwerski</li>
<li>Wydawnictwo Impuls</li>
<li>Oprawa: Miękka</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978837850279133</li>
<li>ISBN: 9788378502791</li>
<li>EAN: 978837850279133</li>
<li>Wymiary: 23.5x16.0x2.5 cm</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 10,
                'id_publishing' => 8,
                'img_href' => '/images/products/Bezpieczenstwo-jednostki.jpg',
                'img_alt' => 'Bezpieczeństwo jednostki',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Bezpieczeństwo jednostki',
                'promotion_price' => 0.20,
                'price' => 0.77,
                'year_publication' => 2014,
                'description' => '<p>Przedmiotem zawartych w książce analiz jest bezpieczeństwo rozpatrywane w 3 podstawowych wymiarach: jednostki, społeczeństwa oraz gatunku ludzkiego, pokazane m.in. jako: warunek przetrwania ludzkiego gatunku, potrzeba, wartość, stan świadomości, prawo człowieka. Wszystkie wymiary przenikają się, a każdy z nich charakteryzuje się własną specyfiką i wymaga odmiennego ujęcia.</p>',
                'details' => '<ul><li>Tytuł: Bezpieczeństwo jednostki
<li>Autor: Brunon Hołyst</li>
<li>Wydawnictwo Wydawnictwo Naukowe Pwn</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 572</li>
<li>Format: 17.0x24.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 69530100100KS</li>
<li>Język: polski</li>
<li>ISBN: 9788301179809</li>
<li>EAN: 9788301179809</li>
<li>Wymiary: 17.0x24.0x3 cm</li></ul>',
                'date' => new DateTime('10-02-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 11,
                'id_publishing' => 7,
                'img_href' => '/images/products/Metodyka-harcow-w-przykladach.jpg',
                'img_alt' => 'Metodyka harców w przykładach',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Metodyka harców w przykładach',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2014,
                'description' => '<p>Gry i ćwiczenia harcowe) znalazły już nietylko zrozumienie i uznanie w sferach pedagogicznych, ale i oficjalne miejsce w programach szkolnych. W ten sposób uczyniliśmy w Polsce duży krok naprzód w realizowaniu „korzyści z genjalnych pomysłów Baden Powella, które winien odnieść każdy wychowanek dobrze prowadzonej szkoły, bez względu na przynależność do zrzeszenia harcer­skiego“). I w niczem to nie uchybia Harcerstwu, że jeszcze jedna z dziedzin przez nie wprowadzonych i rozwiniętych, zaczyna stawać się własnością całego społeczeństwa, zaczyna służyć szerokim sferom młodzieży także nieharcerskiej i dorosłych, podobnie jak to już stało się z obozownictwem i wędrownictwem, a staje się współcześnie z kajakarstwem i żeglarstwem, w których Harcerstwo także odegrało rolę pionierską.</p>
<p>W oparciu o literaturę polską i zagraniczną, z uwzględnieniem doświadczeń harcerskich nie publikowanych, podejmuję tu próbę zestawienia ogólnych wytycznych metodyki harców i zastosowania ich przykładowego w niektórych działach techniki harcowej, jak tropienie, podchodzenie, węzły, rozpalanie i utrzymywanie ognisk, służba samarytańska, i t. d. Poświęcę też nieco miejsca biegowi z przeszkodami harcerskiemi, jako interesującemu, a mało znanemu szerszym sferom, zastosowaniu różnych dziedzin techniki w jednem większem ćwiczeniu — zawodach.</p>',
                'details' => '<ul><li>Autor: Stanisław Sedlaczek</li>
<li>Wydawnictwo Impuls</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 76</li>
<li>Format: 12.0x17.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788378506638</li>
<li>Język: polski</li>
<li>Podtytuł: w przykładach</li>
<li>ISBN: 9788378506638</li>
<li>EAN: 9788378506638</li>
<li>Wymiary: 12.5x16.0x1 cm</li></ul>',
                'date' => new DateTime('08-01-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 12,
                'id_publishing' => 7,
                'img_href' => '/images/products/Harcerska-lista-nie-obecnosci.jpg',
                'img_alt' => 'Harcerska lista (nie)obecności',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Harcerska lista (nie)obecności',
                'promotion_price' => 0.20,
                'price' => 1.20,
                'year_publication' => 2019,
                'description' => '<p>Harcerska lista (nie)obecności. Analiza polskiej bibliografii harcerstwa za lata 1989-2017 to kolejny tom serii wydawniczej obejmującej publikacje dotyczące dziejów organizacji harcerskich w Polsce ukazującej się w Oficynie Wydawniczej "Impuls" od 2014 r.</p>
<p>Seria ta zawiera zbiory źródeł odnoszące się do ruchu harcerskiego, organizacji harcerskich od chwili powstania stowarzyszeń do czasów współczesnych. W skład serii wchodzi również monografia z 2016 r. Dziedzictwo, którego nie można odrzucić. Próba interpretacji wybranych źródeł z lat 1918-2015 do dziejów Związku Harcerstwa Polskiego.</p>
<p>Autorka równolegle pracuje nad monografią będącą próbą interpretacji i porównania opublikowanych źródeł ZHP i ZHR w latach 1989-2018. Niniejsza książka powstała w toku prac nad tą monografią i jest próbą odpowiedzi na pytania oraz wątpliwości, które zrodziły się w tym czasie. Dotyczyły one sposobu budowania relacji w procesie komunikacji autorka/autor - czytelniczka/czytelnik, jak również możliwości zastosowania innej/innych narracji...</p>',
                'details' => '<ul><li>Tytuł: Harcerska lista (nie)obecności</li>
<li>Autor: Katarzyna Marszałek</li>
<li>Wydawnictwo Impuls</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2019</li>
<li>Ilość stron: 328</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380955318</li>
<li>Język: polski</li>
<li>Podtytuł: Analiza polskiej bibliografii harcerstwa za lata 1989-2017</li>
<li>ISBN: 9788380955318</li>
<li>EAN: 9788380955318</li>
<li>Wymiary: 16.0x23.5x2 cm</li></ul>',
                'date' => new DateTime('07-01-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 10,
                'id_publishing' => 8,
                'img_href' => '/images/products/Zagrozenia-ladu-spolecznego.jpg',
                'img_alt' => 'Zagrożenia ładu społecznego',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zagrożenia ładu społecznego',
                'promotion_price' => 0.20,
                'price' => 1.42,
                'year_publication' => 2018,
                'description' => '<p>Drugi tom książki prof. Brunona Hołysta poświęcony jest tematyce ładu społecznego i czynnikom go zakłócającym. Publikacja jest bardzo ciekawą analizą zagrożeń ładu społecznego, jakie obserwujemy i z którymi musimy sobie radzić w obecnych czasach.</p>',
                'details' => '<ul><li>Autor: Brunon Hołyst</li>
<li>Wydawnictwo Wydawnictwo Naukowe Pwn</li>
<li>Oprawa: Twarda</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978830117790433</li>
<li>ISBN: 9788301177904</li>
<li>EAN: 978830117790433</li>
<li>Wymiary: 16.5x24.0x3.5 cm</li></ul>',
                'date' => new DateTime('01-02-2019'),
            ],
            [
                'id_cat' => '001004',
                'id_author' => 11,
                'id_publishing' => 7,
                'img_href' => '/images/products/Gawedy-o-prawie-harcerskim.jpg',
                'img_alt' => 'Gawędy o prawie harcerskim',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Gawędy o prawie harcerskim',
                'promotion_price' => 0.20,
                'price' => 1.18,
                'year_publication' => 2016,
                'description' => '<p>Seria wydawnicza "Przywrócić Pamięć" ma przybliżyć współczesnemu społeczeństwu publikacje założycieli ruchu skautowego, twórców rozwoju idei i metodyki harcerskiej z lat 1911-1939.</p>
<p>Reprint wydania z 1932 roku.</p>',
                'details' => '<ul><li>Autor: Stanisław Sedlaczek</li>
<li>Wydawnictwo Impuls</li>
<li>Seria Przywrócić Pamięć</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 78</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380951051</li>
<li>Język: polski</li>
<li>Podtytuł: Harcerz słuzy Bogu</li>
<li>ISBN: 9788380951051</li>
<li>EAN: 9788380951051</li>
<li>Wymiary: 12.0x16.0x1 cm</li></ul>',
                'date' => new DateTime('05-01-2019'),
            ],

            //-----------------ksiazki/kryminały-sensacja-----------------

            [
                'id_cat' => '001005',
                'id_author' => 13,
                'id_publishing' => 6,
                'img_href' => '/images/products/Przystanek-smierc.jpg',
                'img_alt' => 'Przystanek Śmierć',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Przystanek Śmierć',
                'promotion_price' => 0.20,
                'price' => 0.64,
                'year_publication' => 2016,
                'description' => '<p>Adam Nowak z Radzymina. Mieszka i pracuje w Warszawie. Poczciwy i nieco sfrustrowany policjant przed czterdziestką. Rozwiedziony. Kibic warszawskiej Polonii, spędzający samotne wieczory na słuchaniu muzyki z lat młodości. Facet jakich wielu. Jakby go wymyślili statystycy z CBOS-u. </p>
<p>Warszawa, 17 kwietnia 2005 roku. Na jednej z pętli tramwajowych motorniczy odkrywa zwłoki starszego mężczyzny ugodzonego nożem. Komisarz Adam Nowak wkracza do akcji. Wkrótce w podobnych okolicznościach ginie inna osoba i Nowak utwierdza się w przekonaniu, że ma do czynienia z seryjnym zabójcą, który usiłuje nawiązać makabryczny dialog z policją, a być może i z całym miastem… Policjanci z Komendy Stołecznej prowadzą poszukiwania w Warszawie i okolicy. Śledztwo zbiega się w czasie z zakończeniem sezonu piłkarskiego ? ukochana drużyna Nowaka gra źle i wygląda na to, że tej wiosny komisarza czeka poważne rozczarowanie.</p>
<p>Przystanek Śmierć to znakomicie skonstruowany kryminał. Konatkowski prowadzi czytelnika przez współczesną Warszawę, miasto może nie najpiękniejsze, ale intrygujące ? pełne śladów dramatycznej przeszłości, tętniące życiem.</p>',
                'details' => '<ul><li>Autor: Tomasz Konatkowski</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978837414857333</li>
<li>EAN: 978837414857333</li>
<li>Wymiary: 12.5x19.5 cm</li></ul>',
                'date' => new DateTime('17-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 14,
                'id_publishing' => 6,
                'img_href' => '/images/products/Kruche-wiezi.jpg',
                'img_alt' => 'Kruche więzi',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kruche więzi',
                'promotion_price' => 0.20,
                'price' => 1.10,
                'year_publication' => 2014,
                'description' => '<p>Maggie i Jones mieszkają z nastoletnim synem Rickiem w The Hollows, opodal Nowego Jorku. Przytulną małomiasteczkową atmosferę zakłóca nagłe zaginięcie dziewczyny Ricka, Charlene. Śledztwo prowadzi Jones. Maggie będąca zarazem matką i doświadczonym psychologiem, czuje że stąpa po kruchym lodzie, którego pęknięcia mogą zachwiać w posadach jej rodziną.  Zdeterminowana, by odkryć prawdę, Maggie włącza się    w poszukiwania Charlene, narażając się tym samym na odkrycie dawnych sekretów, które mogą zmienić w jej życiu wszystko.</p>',
                'details' => '<ul><li>Autor: Lisa Unger</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 392</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328027602</li>
<li>ISBN: 9788328027602</li>
<li>EAN: 9788328027602</li>
<li>Wymiary: 11x17.5 cm</li></ul>',
                'date' => new DateTime('18-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 13,
                'id_publishing' => 6,
                'img_href' => '/images/products/Piec-czaszek.jpg',
                'img_alt' => 'Pięć czaszek',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Pięć czaszek',
                'promotion_price' => 0.20,
                'price' => 1.09,
                'year_publication' => 2017,
                'description' => '<p>Komisarz  Adam Nowak wkrótce przejdzie na emeryturę. Dwadzieścia dwa lata w policji to chyba dość jak na jedno życie. Śledztwo w sprawie pięciu bezgłowych trupów, spalonych w dostawczaku na warszawskich Powązkach, wydaje się dobrym ukoronowaniem kariery. Jednak z każdym nowym tropem sprawa komplikuje się coraz bardziej: to, co wyglądało na mafijne porachunki, zaczyna niepokojąco łączyć się z rynkiem sztuki, okrutnymi tybetańskimi bóstwami i pozbawionymi skrupułów przedsiębiorcami, którzy zajmują się reprywatyzacją kamienic i gruntów. Tym ludziom szczególnie nie warto wchodzić w drogę. Nie tylko bowiem komisarz Nowak chciałby, by było to jego ostatnie śledztwo...</p>
<p>Tomasz Konatkowski stworzył zaskakujący i trzymający w napięciu do ostatniej strony kryminał, w którym równie ważna jak motyw, zbrodnia i śledztwo jest sama Warszawa. Mroczna, nienasycona i pełna nieciekawych miejsc, a jednocześnie nie sposób się od niej uwolnić. Nic dziwnego, że komisarz Nowak nie wyobraża sobie życia gdzie indziej.</p>',
                'details' => '<ul><li>Tytuł: Pięć czaszek</li>
<li>Autor: Tomasz Konatkowski</li>
<li>Wydawnictwo W.A.B.</li>
<li>Seria Mroczna Seria</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 384</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328026742</li>
<li>Język: polski</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788328026742</li>
<li>EAN: 9788328026742</li>
<li>Wymiary: 13.5x20.5x3.3 cm</li></ul>',
                'date' => new DateTime('19-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 14,
                'id_publishing' => 6,
                'img_href' => '/images/products/Moj-przyjaciel-mrok.jpg',
                'img_alt' => 'Mój przyjaciel mrok',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Mój przyjaciel mrok',
                'promotion_price' => 0.20,
                'price' => 0.88,
                'year_publication' => 2017,
                'description' => '<p>Przejmujący thriller bestsellerowej amerykańskiej autorki. Mój przyjaciel mrok to drugi - po Kruchych więziach - tom serii rozgrywającej się w Hollows niedaleko Nowego Jorku. Do miasteczka przeprowadza się powieściopisarka Bethany Graves. Przeżyła trudny rozwód i ma nadzieję, że z dala od wielkomiejskiego zgiełku zapomni o bolesnych doświadczeniach. Planuje w Hollows napisać kolejną książkę i naprawić swoje relacje z piętnastoletnią córką, Willow. Jednak również tutaj dziewczynka przysparza matce problemów. Zadaje się z miejscowymi dziećmi, które wydobywają z niej najgorsze cechy. A kiedy sytuacja robi się nieprzyjemna, ucieka i trafia w miejsca, w których nigdy nie powinna była się znaleźć. Gdy Willow odkrywa w pobliskim lesie jamę przypominającą grób, obie kobiety wikłają się w śledztwo sięgające wydarzeń sprzed dwudziestu pięciu lat...</p>',
                'details' => '<ul><li>Autor: Lisa Unger</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Ilość stron: 398</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978832801478733</li>
<li>EAN: 978832801478733</li>
<li>Wymiary: 12.5x19.5x3 cm</li></ul>',
                'date' => new DateTime('20-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 13,
                'id_publishing' => 6,
                'img_href' => '/images/products/Bazyliszek.jpg',
                'img_alt' => 'Bazyliszek',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Bazyliszek',
                'promotion_price' => 0.20,
                'price' => 0.36,
                'year_publication' => 2015,
                'description' => '<p>Nowa, bardzo oczekiwana powieść kryminalna w cyklu z Adamem Nowakiem!  </p>
<p>Czwarty tom ze stołecznej serii kryminałów: współczesna Warszawa, skomplikowane śledztwo z wątkiem sekty, zdrady i zemsty. Ważny pracownik banku zostaje zamordowany, nie mija wiele czasu, a ktoś znajduje zwłoki młodej dziewczyny. Okazuje się, że obie ofiary  pracowały  w tym samym biurowcu. Komisarz Nowak bada kilka wątków, najbardziej obiecujący wiąże się z tajemniczym światem sekt i duchowych hochsztaplerów. Na tym grząskim gruncie - zbywany przez księży i niemający jasnych wyników - Nowak, agnostyk i sceptyk, nie czuje się pewnie...</p>
<p>Tomasz Konatkowski po kilku latach milczenia wraca z wyśmienitą powieścią, najlepszą w jego stołecznym cyklu: pełną napięcia i mroku, precyzyjnie odmalowującą pracę śledczych, wreszcie: zaskakującą w finale.</p>',
                'details' => '<ul><li>Autor: Tomasz Konatkowski</li>
<li>Wydawnictwo W.A.B.</li>
<li>Seria Mroczna Seria</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 353</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978832802159433</li>
<li>EAN: 978832802159433</li>
<li>Wymiary: 13.5x20.2x3.5 cm</li></ul>',
                'date' => new DateTime('21-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 13,
                'id_publishing' => 6,
                'img_href' => '/images/products/Nie-ma-takiego-miasta.jpg',
                'img_alt' => 'Nie ma takiego miasta',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Nie ma takiego miasta',
                'promotion_price' => 0.20,
                'price' => 0.57,
                'year_publication' => 2015,
                'description' => '<p>W samym sercu Wielkiej Brytanii zostaje brutalnie zamordowany młody mężczyzna. Podejrzenia padają na gangi rozwydrzonych, pijanych nastolatków. Wkrótce wychodzi na jaw, że denat był Polakiem. Komisarz Adam Nowak akurat przebywa służbowo w Londynie i bierze udział w śledztwie. Ślady zbrodni wiodą ku grupie przemycającej narkotyki, podejrzany jest także pewien starszy mężczyzna, Anglik. Mimo wsparcia inspektora Huddlestone’a śledztwo stoi w miejscu. Tymczasem w Warszawie, w małym barze, niczym niewyróżniający się obywatel. Zjednoczonego Królestwa zostaje zabity przez nieznanych sprawców. Czy obu zamordowanych mogło coś łączyć? Dlaczego komuś zależało na ich śmierci?</p>',
                'details' => '<ul><li>Tytuł: Nie ma takiego miasta</li>
<li>Autor: Tomasz Konatkowski</li>
<li>Wydawnictwo W.A.B.</li>
<li>Seria Mroczna Seria</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 448</li>
<li>Format: 13,5x20,2 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328021624</li>
<li>Język: polski</li>
<li>Nr wydania: 3</li>
<li>ISBN: 9788328021624</li>
<li>EAN: 9788328021624</li>
<li>Wymiary: 13.5x20.2x3.5 cm</li></ul>',
                'date' => new DateTime('23-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 14,
                'id_publishing' => 6,
                'img_href' => '/images/products/Piekne-klamstwa.jpg',
                'img_alt' => 'Piękne kłamstwa',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Piękne kłamstwa',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2016,
                'description' => '<p>"Piękne kłamstwa" to z pozoru lekka powieść kryminalna. Jednak porusza bardzo ważny problem społeczny, jakim jest ingerencja osób trzecich w sprawy związane z przemocą domową. Jak daleko można sie posunąć, aby wymierzyć sprawiedliwość? I czy samo podejrzenie przemocy domowej jest już podstawą do tego, żeby podejmować działania? Zwłaszcza nie do końca zgodne z prawem?</p>',
                'details' => '<ul><li>Tytuł: Piękne kłamstwa</li>
<li>Autor: Lisa Unger</li>
<li>Wydawnictwo W.A.B.</li>
<li>Seria Pocket</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 272</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328042063</li>
<li>Język: polski</li>
<li>ISBN: 9788328042063</li>
<li>EAN: 9788328042063</li>
<li>Wymiary: 11.1x17.3x2.5 cm</li></ul>',
                'date' => new DateTime('02-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 14,
                'id_publishing' => 6,
                'img_href' => '/images/products/Wyspa-nieprawdy.jpg',
                'img_alt' => 'Wyspa nieprawdy',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wyspa nieprawdy',
                'promotion_price' => 0.20,
                'price' => 0.37,
                'year_publication' => 2015,
                'description' => '<p>Pragnąc odmienić swoje życie i zaskoczyć bliskich, Kate pisze książkę na podstawie dzienników ciotki Caroline i babki Lany.</p>
<p>Odkrywa dzięki nim historię burzliwego i tragicznego w skutkach romansu – historię, która ujawni ukrywane od lat fakty z życia rodziny i sprawi, że zarówno Kate, jak i jej matka, Birdie, spojrzą na swoją relację z zupełnie innej perspektywy. Ale czy to pomoże im odkryć prawdę o tajemniczych nieznajomych, których Birdie czasem zauważa na rodzinnej wyspie?</p>
<p>Lisa Unger (ur. w 1970 r., New Haven) lata młodości spędziła w Holandii, Anglii i USA, ukończyła New School for Social Research w Nowym Jorku. Zadebiutowała w 2002 r. książką Angel Fire wydaną pod panieńskim nazwiskiem Miscione. Jej książki zostały przetłumaczone na 26 języków i były wielokrotnie nagradzane i wyróżniane.</p>',
                'details' => '<ul><li>Autor: Lisa Unger</li>
<li>Wydawnictwo W.A.B.</li>
<li>Oprawa: Miękka</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978832801535733</li>
<li>EAN: 978832801535733</li>
<li>Wymiary: 12.5x19.5 cm</li></ul>',
                'date' => new DateTime('22-01-2019'),
            ],
            [
                'id_cat' => '001005',
                'id_author' => 15,
                'id_publishing' => 1,
                'img_href' => '/images/products/Rozdarta.jpg',
                'img_alt' => 'Rozdarta',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Rozdarta',
                'promotion_price' => 0.20,
                'price' => 1.22,
                'year_publication' => 2018,
                'description' => '<p>Drugi tom "Zresetowanej", który jest w stanie bardzo namieszać. Pora zrozumieć, że życie nie zawsze jest proste i doskonale poukładane, zwłasza gdy ktoś grzebie przy Twoich wspomnieniach.</p>
<p>Kyla wciąż jeszcze ma mętlik w głowie. Zupełnie nie może się pozbierać po tym, co się wydarzyło. Nie wie, komu może, a komu nie powinna wierzyć. Zaufanie staje się dla niej powoli obcym pojęciem, a ci, w których do tej pory pokładała nadzieje, nagle przestali się liczyć. Ciągle ulega złudzeniu, że ma poważne rozdwojenie jaźni, bo coś w tym całym resetowaniu poszło zdecydowanie nie tak, jak powinno. Wspomnienia z jednej przeszłości nakładają się na drugą, nie dając chwili wytchnienia i prowokując do zadawania kolejnych pytań. Wokół niej jest wiele ludzi, ale ona nie może się oprzeć wrażeniu, że nikt nie jest z nią do końca szczery. Kyla ma rodzinę, znajomych: zarówno tych nowych, jak i starych, ale wciąż czuje się samotna. I jeszcze ta ciągła kontrola. Jeśli nie będzie na siebie uważać, odpowiednio dobierać słów, odgrywać ustalonej dla niej roli, prawdopodobnie Lorderowie pochwycą ją, wrzucą do czarnej furgonetki, a jej całe "nowe" życie skończy się szybciej niż zdołało się zacząć.W głowie wciąż słyszy głos, który nakazuje jej się poddać, odpuścić, żyć tak, jak oni chcą, jak dla nich jest wygodniej. Pragnienie odszukania Bena okazuje się jednak dużo silniejsze. Czy bliskie jej osoby naprawdę chcą dla niej dobrze? Co kryje się pod płaszczykiem czułości i troski o bezpieczeństwo? Kto wreszcie zdradzi dziewczynie prawdę, którą powinna poznać już dawno?</p>
<p>"Rozdarta" trzyma w napięciu od pierwszej do ostatniej strony. Choć na końcu wiele kwestii się wyjaśnia, wciąż pozostaje niedosyt i pytania, na które odpowiedzi mają się znaleźć dopiero w kontynuacji. Autorka doskonale buduje akcję, nie pozwalając na to, by Czytelnik poczuł nudę.</p>
<p>Teri Terry to pisarka, która w 2004 roku osiadła na stałe w Wielkiej Brytanii. Wcześniej często zmieniała miejsce zamieszkania, poznając między innymi Kanadę, Australię oraz Francję. Nim na poważnie zajęła się tworzeniem literatury, była między innymi bibliotekarką oraz nauczycielką gimnazjum. Jej cykl "Zresetowana" wzbudza ogromne emocje wśród wielu młodych Czytelniczek.</p>',
                'details' => '<ul><li>Tytuł: Rozdarta</li>
<li>Autor: Teri Terry</li>
<li>Wydawnictwo Debit</li>
<li>Seria Młody Book!, Seria Zresetowana</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 384</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380572164</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Fracturedv
<li>Tłumacz: Zarawska Patrycja</li>
<li>Nr wydania: 1</li>
<li>ISBN: 9788380572164</li>
<li>EAN: 9788380572164</li>
<li>Wymiary: 14.0x20.5x2.8 cm</li></ul>',
                'date' => new DateTime('28-01-2019'),
            ],

            //-----------------ksiazki/fantastyka-----------------

            [
                'id_cat' => '001006',
                'id_author' => 16,
                'id_publishing' => 9,
                'img_href' => '/images/products/Konan-Destylator.jpg',
                'img_alt' => 'Konan Destylator',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Konan Destylator',
                'promotion_price' => 0.20,
                'price' => 1.45,
                'year_publication' => 2016,
                'description' => '<p>Jakub Wędrowycz to przerażający wiekowy ochlapus, wiejski egzorcysta, bimbrownik i kłusownik, porażający otoczenie wyglądem, zapachem i kulturą osobistą - a raczej jej brakiem. W towarzystwie równie odrażających kumpli pije, produkuje samogon, wdaje się w awantury oraz wypełniając wolę przodków regularnie likwiduje przedstawicieli wrogiego rodu - Bardaków.</p>
<p>W postaci Wędrowycza jak w soczewce skupiają się wszelkie możliwe polskie wady, przywary i stereotypy - ale jego chamstwo, wieśniactwo, buractwo, brak rozterek i hamulców moralnych oraz bogaty arsenał broni i materiałów wybuchowych zapewniają mu przewagę nad każdym przeciwnikiem.</p>
<p>Tyle Wikipiedia, a Wy właśnie trzymacie w ręku najnowszy zbiór doprowadzających do łez, plugawych historii z życia pogromcy Wojsławic i - terenów, gdzie dociera Pekaes z Chełma.</p>',
                'details' => '<ul><li>Autor: Andrzej Pilipiuk</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Oprawa: Miękka</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379642298</li></ul>',
                'date' => new DateTime('25-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 17,
                'id_publishing' => 9,
                'img_href' => '/images/products/Zapach-szkla.jpg',
                'img_alt' => 'Zapach szkła',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zapach szkła',
                'promotion_price' => 0.20,
                'price' => 1.20,
                'year_publication' => 2016,
                'description' => '<p>Twórca Achai, cyklu znanego dziesiątkom tysięcy fanów, tym razem w opowiadaniach obsypanych najbardziej liczącymi się w polskiej fantastyce nagrodami (Zajdla, Nautilusa, Sfinksa).</p>',
                'details' => '<ul><li>Autor: Andrzej Ziemiański</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 344</li>
<li>Format: 12.5x19.5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379641260</li>
<li>Język: polski</li>
<li>Nr wydania: 3</li>
<li>ISBN: 9788379641260</li>
<li>EAN: 9788379641260</li>
<li>Wymiary: 12.5x19.5x4 cm</li></ul>',
                'date' => new DateTime('26-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 17,
                'id_publishing' => 9,
                'img_href' => '/images/products/Toy-wars.jpg',
                'img_alt' => 'Toy wars',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Toy wars',
                'promotion_price' => 0.20,
                'price' => 1.35,
                'year_publication' => 2017,
                'description' => '<p>Jeśli szukasz banalnej książeczki z grzeczną fabułą to "Toy Wars" nie spełni Twoich oczekiwań. To powieść, w której wulgarny świat wypełnia każdą stronę tej historii.</p>
<p>Zatem czas na przedstawienie tytułowej Toy, czyli Zabaweczki, która przez kilka lat zarabiała na życie wyłącznie swoim ciałem. Choć ma dwadzieścia parę lat z wyglądu przypomina licealistkę, w dodatku z takimi atutami, że żaden klient nie jest w stanie się jej oprzeć. Po pewnym czasie silnego narkotyzowania i pracy prostytutki trafia na Paula, prywatnego detektywa, która odmienia jej los.</p>
<p>"Toy Wars" to powieść z gatunku fantasy raczej dla odważnych Czytelników. Zabaweczka słodka niczym jej pseudonim jest powodem brudnych myśli u niejednego mężczyzny. Ciężko doświadczona mimo młodego wieku, staje się silnie zahartowana. Kiedy Zabaweczka po wielokrotnym wykorzystaniu i zmuszaniu do przyjmowania narkotyków trafia pod skrzydła Paula poznaje zupełnie inny smak życia. Otóż prywatny detektyw zaczyna wciągać ją w swój fach, a przy tym dba o nią niemalże z ojcowską troską. Gdy umiera, Toy zostaje sama z biurem detektywistycznym i majątkiem w wysokości 10 milionów. Jednak jest jeden warunek, by przejąć fortunę musi przez dziesięć lat pracować jako detektyw, bez zdobywania pieniędzy z innych źródeł. Zabaweczka przyzwyczajona do trudów wiedzie życie w nędzy, raz na jakiś czas dorabiając sobie na boku w tajemnicy przed prawnikami i żywiąc się kocią karmą. Pewnego dnia do jej drzwi puka klient, który zleca jej trudne, aczkolwiek dobrze płatne zadania. Czy dziewczyna temu podoła i czy weźmie sobie do serca cenne rady swego zmarłego mentora? </p>
<p>Andrzej Ziemiański jest jednym z najbardziej znanych współczesnych pisarzy z gatunku fantasy i science fiction na polskiej scenie literackiej. Jego debiutem było opowiadanie opublikowane w 1979 roku pod tytułem "Zakład zamknięty". Stworzył potem jeszcze kilkadziesiąt innych krótkich publikacji i kilkanaście powieści. Wśród Czytelników znany jest z niebanalnego stylu pisarskiego, w którym nie szczędzi wulgaryzmów, a kreacje stworzonych przez niego bohaterów są niezwykle mocne i dobitne.</p>',
                'details' => '<ul><li>Autor: Andrzej Ziemiański</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 576</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379642496</li>
<li>Język: polski</li>
<li>ISBN: 9788379642496</li>
<li>EAN: 9788379642496</li>
<li>Wymiary: 12.5x19.5x3.5 cm</li></ul>',
                'date' => new DateTime('27-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 16,
                'id_publishing' => 9,
                'img_href' => '/images/products/Wampir-z-KC.jpg',
                'img_alt' => 'Wampir z KC',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wampir z KC',
                'promotion_price' => 0.99,
                'price' => 1.12,
                'year_publication' => 2018,
                'description' => '<p>Trzecia część nietypowego wampirzego cyklu autorstwa Andrzeja Pilipiuka. Zbiór opowiadań, który może w bardzo prosty sposób zmienić stereotypowe myślenie o polskiej rzeczywistości.</p>
<p>"Wampir z KC" to zbiór opowiadań na temat "nieco bardziej martwych ludzi", czyli wampirów. Osobnicy ci żyją w Polsce i z nieco większą lub mniejszą konsternacją przyglądają się zmianom ustrojowym w kraju. Historie zgromadzone w tej książce dotyczą czasów PRL-u oraz początków kapitalizmu. Bohaterowie wybierają się na wczasy pracownicze, podczas których przeżywają niezapomniane przygody, a także zbierają grzyby w styczniu, kiedy to wreszcie otrzymują na wyłączność atlasy. Zmiana ustrojowa pokaże im, że wcześniej w zasadzie wcale nie było tak źle, jak sądzili i skłoni do różnych refleksji na temat nowego porządku. Czy wampiry odnajdą się w tym, co przyjdzie im oglądać? Czy świat nie okaże się nagle zbyt dziwaczny?</p>
<p>Andrzej Pilipiuk to jeden z bardziej znanych polskich pisarzy z gatunku fantasy. Urodził się w 1974 roku w Warszawie. W 2002 roku otrzymał nagrodę literacką im. Janusza Zajdla za utwór "Kuzynki". Sławę przyniosły mu pisane w tonie gawędy opowieści o Jakubie Wędrowyczu, który zajmował się pędzeniem bimbru oraz odprawianiem egzorcyzmów. Jego debiut literacki miał miejsce w 1996 roku, kiedy to na łamach "Fenixa" ukazało się jego opowiadanie "Hiena". W swoich powieściach Pilipiuk często wykorzystuje motywy historyczne. Jego język jest prosty w odbiorze i wciąż zyskuje uznanie kolejnych Czytelników.</p>',
                'details' => '<ul><li>Autor: Andrzej Pilipiuk</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Seria Cykl z Wampirem</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 352</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379643127</li>
<li>Język: polski</li>
<li>ISBN: 9788379643127</li>
<li>EAN: 9788379643127</li>
<li>Wymiary: 12.5x19.5x2.5 cm</li></ul>',
                'date' => new DateTime('26-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 16,
                'id_publishing' => 9,
                'img_href' => '/images/products/Aparatus.jpg',
                'img_alt' => 'Aparatus',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Aparatus',
                'promotion_price' => 0.20,
                'price' => 1.12,
                'year_publication' => 2018,
                'description' => '<p>Andrzej Pilipiuk znany jest polskim czytelnikom bardzo dobrze. Od lat jego teksty bawią i ciekawią czytelników w kraju i za granicą. Fani znają go głównie z takich książek jak Pan Samochodzik i cykl o Jakubie Wędrowyczu. Ale Andrzej Pilipiuk jest również twórcą opowiadań dziwnych, ironicznych, niekiedy przerażających, a innym razem bawiących aż do łez. Właśnie taki zbiór mamy teraz w zasięgu naszej ręki.</p>
<p>Niektóre opowiadania mogą się wydać zaskakujące, ale czy ludzkie życie jest oczywiste? Opowiadania są napisane w bardzo różnorodny sposób, a czytają się praktycznie same. Pilipiuk udowodnił, iż nie potrzeba szybkiego tempa oraz fajerwerków, aby wciągnąć czytelnika w niezwykły wir opowieści. Czytelnik nie znajdzie tu świszczących pocisków lub pędzącej fabuły. Jest natomiast nurtujące zagadka. Czytając nie możemy doczekać się rozwiązania i dalszej akcji, jaką niosą ze sobą kolejne strony książki.</p>
<p>Książka Aparatus zawiera osiem opowiadań. Dzielą się one na trzy kategorie. W dwóch rolę postaci pierwszoplanowych grają nieznani czytelnikom Pilipiuka bohaterowie. Kolejne trzy umożliwiają nam ponowne spotkanie z doktorem Skórzewskim, natomiast pozostałe przedstawiają bardzo ciekawego bohatera - Roberta Storma.</p>
<p>Zbiór Aparatus różni się od poprzednich - jest bardzo przemyślany oraz melancholijny. Tym razem autor postawił na narrację i namysł, a zabieg ten przyniósł spodziewane efekty. Aparatus to lektura obowiązkowa dla fanów Andrzeja Pilipiuka i dla wszystkich miłośników niecodziennych opowieści.</p>',
                'details' => '<ul><li>Autor: Andrzej Pilipiuk</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Oprawa: Zintegrowana</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 406</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379643677</li>
<li>Język: polski</li>
<li>ISBN: 9788379643677</li>
<li>EAN: 9788379643677</li>
<li>Wymiary: 13.0x19.0x3 cm</li></ul>',
                'date' => new DateTime('27-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 18,
                'id_publishing' => 9,
                'img_href' => '/images/products/Bestie-i-ludzie.jpg',
                'img_alt' => 'Bestie i ludzie',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Bestie i ludzie',
                'promotion_price' => 0.20,
                'price' => 1.22,
                'year_publication' => 2018,
                'description' => '<p>Potwory czają się bliżej, niż myślisz! Jacek Piekara powraca w wielkim stylu!</p>
<p>10 opowiadań, w których znajdziecie czysty, pierwotny lęk. Grozę wywołaną świadomością, że największy koszmar czeka na nas tuż obok. Przychodzi w postaci uśmiechniętego sąsiada albo smutnej dziewczyny zaczepionej w barze. Czasem w osobie kogoś, kogo znamy od wielu lat.</p>
<p>Najbardziej przerażające jest to, że o otaczającym nas świecie nie wiemy wszystkiego. A dokładniej - nie wiemy prawie nic.</p>
<p>Dlatego nie jesteśmy gotowi, by dostrzec prawdę: każdy może kryć pod maską zwyrodniałe, bestialskie oblicze.</p>',
                'details' => '<ul><li>Autor: Jacek Piekara</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 416</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379642878</li>
<li>Język: polski</li>
<li>ISBN: 9788379642878</li>
<li>EAN: 9788379642878</li>
<li>Wymiary: 12.5x19.5x2.8 cm</li></ul>',
                'date' => new DateTime('28-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 18,
                'id_publishing' => 9,
                'img_href' => '/images/products/Ja-Inkwizytor-Sluga-Bozy.jpg',
                'img_alt' => 'Ja, Inkwizytor Sługa Boży',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Ja, Inkwizytor. Sługa Boży',
                'promotion_price' => 0.20,
                'price' => 1.05,
                'year_publication' => 2015,
                'description' => '<p>Oto on - inkwizytor i Sługa Boży. Człowiek głębokiej wiary.</p>
<p>Minęło tysiąc pięćset lat, od kiedy Jezus zszedł z krzyża, utopił we krwi Jerozolimę i zdobył Rzym. Światem żądzą inkwizytorzy.</p>
<p>Oto czas, w którym czarnoksiężnicy odprawiają bluźniercze rytuały, demony zstępują na świat, czarownice knują mroczne intrygi. A temu wszystkiemu musi przeciwstawić się Mordimer Madderdin - człowiek, którego serce jest tak gorące jak ogień stosów, na które posyła swe ofiary.</p>',
                'details' => '<ul><li>Autor: Jacek Piekara</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Seria Cykl o Mordimerze Madderdinie</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 392</li>
<li>Format: 12,5x19,5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379640058</li>
<li>Język: polski</li>
<li>Nr wydania: 7</li>
<li>ISBN: 9788379640058</li>
<li>EAN: 9788379640058</li>
<li>Wymiary: 12.5x19.5x2.5 cm</li></ul>',
                'date' => new DateTime('30-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 18,
                'id_publishing' => 9,
                'img_href' => '/images/products/Ja-inkwizytor-Dotyk-zla.jpg',
                'img_alt' => 'Ja, inkwizytor. Dotyk zła',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Ja, inkwizytor. Dotyk zła',
                'promotion_price' => 0.20,
                'price' => 0.88,
                'year_publication' => 2013,
                'description' => '<p>Oto on, inkwizytor i Sługa Boży, człowiek głębokiej wiary.</p>
<p>Oto dwie minipowieści, których bohaterem jest Mordimer Madderdin, pełen wiary i zapału młody inkwizytor.</p>
<p>Dlaczego bogaty kupiec pragnie utopić we wrzącej smole ubóstwianego synka? Dlaczego zacny patrycjusz w okrutny sposób zabija ukochaną żonę? Mordimer Madderdin musi wyjaśnić jaka siła popycha ludzi do czynienia bezrozumnego zła.</p>
<p>Mordimer wpada w miłosne sidła zastawione przez śliczną i uroczą góralkę. Jak długo wytrzyma inkwizytor którego nazywa się `miodowym placuszkiem` i `szafranową babeczką`? I jak długo wytrzyma, by kierowany świętym obowiązkiem, nie zajrzeć do szafy pełnej trupów?</p>',
                'details' => '<ul><li>Tytuł: Ja inkwizytor Dotyk zła</li>
<li>Autor: Jacek Piekara</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Seria Cykl o Mordimerze Madderdinie</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2013</li>
<li>Ilość stron: 348</li>
<li>Format: 12.5x19.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788375749496</li>
<li>Język: polski</li>
<li>ISBN: 9788375749496</li>
<li>EAN: 9788375749496</li>
<li>Wymiary: 12.5x19.5x2.2 cm</li></ul>',
                'date' => new DateTime('30-01-2019'),
            ],
            [
                'id_cat' => '001006',
                'id_author' => 18,
                'id_publishing' => 9,
                'img_href' => '/images/products/Ja-inkwizytor-Miecz-Aniolow.jpg',
                'img_alt' => 'Ja, inkwizytor. Miecz Aniołów',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Ja, inkwizytor. Miecz Aniołów',
                'promotion_price' => 0.20,
                'price' => 0.95,
                'year_publication' => 2015,
                'description' => '<p>Oto on – inkwizytor i Sługa Boży. Człowiek głębokiej wiary. Minęło tysiąc pięćset lat, od kiedy Jezus zszedł z krzyża, utopił we krwi Jerozolimę i zdobył Rzym. Światem żądzą inkwizytorzy. Jeżeli zadajesz sobie pytania, strzeż się, gdyż możesz usłyszeć odpowiedź – mówi stare porzekadło. Inkwizytor Mordimer Madderdin nie waha się zadawać pytań i dążyć do odkrywania prawdy o świecie, który go otacza. Świecie pełnym intryg i zła. Świecie, w którym ludziom zagrażają demony, czarownicy oraz wyznawcy mrocznych kultów. Świecie, którego siłą napędową są nienawiść, chciwość oraz żądza.</p>',
                'details' => '<ul><li>Autor: Jacek Piekara</li>
<li>Wydawnictwo Fabryka Słów</li>
<li>Seria Cykl o Mordimerze Madderdinie</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 416</li>
<li>Format: 12.5x19.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379640072</li>
<li>Język: polski</li>
<li>Nr wydania: 7</li>
<li>ISBN: 9788379640072</li>
<li>EAN: 9788379640072</li>
<li>Wymiary: 12.5x19.5x2.5 cm</li></ul>',
                'date' => new DateTime('14-01-2019'),
            ],

            //-----------------komiksy/amerykanskie-----------------

            [
                'id_cat' => '002001',
                'id_author' => 21,
                'id_publishing' => 10,
                'img_href' => '/images/products/Rick-i-Morty-Tom-1.jpg',
                'img_alt' => 'Rick i Morty. Tom 1',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Rick i Morty. Tom 1',
                'promotion_price' => 0.20,
                'price' => 0.80,
                'year_publication' => 2018,
                'description' => '<p>Komiks science fiction oparty na amerykańskim animowanym serialu telewizyjnym pod tym samym tytułem, który w oryginalnym zamyśle miał być parodią filmu Powrót do przyszłości. Opowiada o przygodach ekscentrycznego naukowca Ricka, któremu w licznych eksperymentach towarzyszy jego czternastoletni wnuk Morty. Bohaterowie podróżują po odległych galaktykach i alternatywnych rzeczywistościach. Obaj mieszkają w jednym domu wraz z rodzicami Morty\'ego: Beth – niespełnioną zawodowo i wiecznie niezadowoloną z życia, i Jerrym – niekompetentnym pracownikiem i infantylnym mężem, oraz jego siedemnastoletnią siostrą Summer – zazdrosną o kosmiczne eskapady brata i dziadka. Niestabilne życie rodzinne w połączeniu z coraz to nowymi pomysłami szalonego Ricka tworzą kompilację przepełnioną nietuzinkowym, czarnym humorem.</p>',
                'details' => '<ul><li>Tytuł: Rick i Morty, tom 1</li>
<li>Autor: Marc Ellerby</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Rick i Morty</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 132</li>
<li>Format: 16.7 x25.5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328134768</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Rick i Morty 1</li>
<li>Tłumacz: Jacek Drewnowski</li>
<li>ISBN: 9788328134768</li>
<li>EAN: 9788328134768</li>
<li>Wymiary: 17.3x25.5x0.5 cm</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 20,
                'id_publishing' => 11,
                'img_href' => '/images/products/Bekarty-z-poludnia-Motywacja.jpg',
                'img_alt' => 'Bękarty z południa. Motywacja',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Bękarty z południa. Motywacja',
                'promotion_price' => 0.20,
                'price' => 0.95,
                'year_publication' => 2018,
                'description' => '<p>Powód, dla którego trener Boss króluje niepodzielnie w hrabstwie Craw, jest prosty – jego drużyna futbolowa odnosi zwycięstwo za zwycięstwem. Gdy jednak jego dobra passa dobiega końca, a krąg wrogów zaczyna się zacieśniać, Boss nie ma wyjścia, jak tylko wynieść swoje przestępcze życie na całkowicie nowe wyżyny.</p>
<p>Sytuację komplikuje Roberta Tubb, która pojawia się w mieście nie tylko z karabinem maszynowym pod pachą, ale także zamiarem odkrycia, jak zginął jej ojciec.</p>
<p>Kontynuacja wielokrotnie nagradzanego komiksu kryminalnego z wątkami obyczajowymi autorstwa Jasona Aarona (Skalp, Thor), Jasona Latoura (Loose Ends, Spider-Gwen) oraz Chrisa Brunnera (Loose Ends), a wraz z nim – kolejna rundka amerykańskiego futbolu, żeberek i przelewu krwi.</p>',
                'details' => '<ul><li>Autor: Jason Aaron</li>
<li>Wydawnictwo Mucha Comics</li>
<li>Seria Bękart południa</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 168</li>
<li>Format: 17.00x26.00 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365938299</li>
<li>ISBN: 9788365938299</li>
<li>EAN: 9788365938299</li>
<li>Wymiary: 17.00x26.00 cm</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 19,
                'id_publishing' => 11,
                'img_href' => '/images/products/Jessica-Jones-Wyzwolona.jpg',
                'img_alt' => 'Jessica Jones. Wyzwolona',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Jessica Jones. Wyzwolona',
                'promotion_price' => 0.20,
                'price' => 1.10,
                'year_publication' => 2018,
                'description' => '<p>JESSICA JONES POWRACA WE WŁASNEJ, ODRĘBNEJ SERII!</p>
<p>WIELE SIĘ ZMIENIŁO w Uniwersum Marvela, odkąd Jessica Jones była bohaterką własnej serii komiksowej. W cieniu czyha mnóstwo tajemnic, które może ujawnić tylko wyjątkowa kobieta – taka jak ona. Agencja detektywistyczna Alias Investigations zostanie ponownie otwarta, a spośród wielu sekretów do zbadania pierwsze śledztwo Jessiki może okazać się najniebezpieczniejszym! Niedawno wpadła na trop nowego, ukrytego zła – tak przerażającego, że była gotowa rozbić własną rodzinę, żeby ocalić przed nim najbliższych. Czy ta ofiara wystarczy? I czy istnieje sposób odbudowania jej dawnego życia? Twórcy postaci Jessiki Jones przygotowali nowy rozdział przygód słynnej pani detektyw, wyjaśniający niektóre z największych pytań, jakie zrodziło Uniwersum Marvel NOW!</p>',
                'details' => '<ul><li>Autor: Brian Michael Bendis</li>
<li>Wydawnictwo Mucha Comics</li>
<li>Seria Jessica Jones</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 144</li>
<li>Format: 17.00x26.00 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365938305</li>
<li>ISBN: 9788365938305</li>
<li>EAN: 9788365938305</li>
<li>Wymiary: 17.00x26.00 cm</li></ul>',
                'date' => new DateTime('15-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 20,
                'id_publishing' => 10,
                'img_href' => '/images/products/Tajne-wojny-Thorowie.jpg',
                'img_alt' => 'Tajne wojny. Thorowie',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Tajne wojny. Thorowie',
                'promotion_price' => 0.88,
                'price' => 0.99,
                'year_publication' => 2018,
                'description' => '<p>Wciągający komiks "Tajne wojny. Thorowie" to pozycja obowiązkowa dla każdego fana superbohaterów Marvela. Zaczytaj się w historii, pełnej akcji i niebezpiecznych przygód.</p>
<p>Bitewny Świat przez cały czas jest pełen niebezpieczeństw. Wraz z nowymi kłopotami z pomocą zjawiają się Thorowie. Wciąż niespokojne królestwo, strzeżone jest przez elitarne oddziały Gromowładnych. Mimo to dochodzi ostatnio do serii zabójstw, stanowiących wielką zagadkę. Gromowładni mają przez to spore problemy. Zadanie jednak nie będzie łatwe. W ciągu tygodnia zginęło już pięć osób. Bohaterowie zaryzykują życie, podczas wykonywania swojego zadania. Zobacz, czy uda im się odnaleźć sprawcę zbrodni.</p>
<p>"Tajne wojny. Thorowie" to album, do którego scenariusz stworzył Jason Aaron, znany przede wszystkim z komiksowych serii, takich, jak: "Grzech pierworodny", "Thor Gromowładny", "Skalp", "X-Men" czy też "Wolverine". Rysunki do tej opowieści wykonali dwaj artyści: Goran Sudžuka (znany z "Y: Ostatni z mężczyzn") oraz Chris Sprouse (znany z komiksów "Tom Strong"). </p>
<p>Pełen akcji komiks, wyróżniający się dobrze wykonaną szatą graficzną, to wybór idealny dla każdego miłośnika opowieści ze świata superbohaterów Marvela. Daj się wciągnąć w fascynującą opowieść z pełnego niebezpieczeństw Bitewnego Świata i wraz z bohaterami odkrywaj nowe tajemnice i przeżyj niezwykłe przygody. Ten album na pewno Cię nie zawiedzie!</p>',
                'details' => '<ul><li>Tytuł: Tajne wojny - Thorowie</li>
<li>Autor: Jason Aaron</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Marvel Now</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 144</li>
<li>Format: 16.7 x 25.5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328126886</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Thors</li>
<li>Tłumacz: Marceli Szpak</li>
<li>ISBN: 9788328126886</li>
<li>EAN: 9788328126886</li>
<li>Wymiary: 17.0x25.5x0.7 cm</li></ul>',
                'date' => new DateTime('16-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 19,
                'id_publishing' => 10,
                'img_href' => '/images/products/Ultimate-Spider-Man.jpg',
                'img_alt' => 'Ultimate Spider-Man',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Ultimate Spider-Man',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2018,
                'description' => '<p>Spider-Man znowu ma kłopoty! Wydaje się, że życie Petera Parkera powoli się układa. Związał się z Mary Jane, pracuje w „Daily Bugle”. Ale spokój nie trwa długo. Otto Octavius scalił się po wypadku z metalowymi odnóżami i rozpoczyna polowanie na winnych. Spider-Man postanawia się z nim zmierzyć, ale media nie zostawiają na nim suchej nitki. Co gorsza Krave, który prowadzi program telewizyjny o polowaniu na zwierzęta, ogłasza, że zabije Spier-Mana…  </p>',
                'details' => '<ul><li>Tytuł: Ultimate Spider-Man, tom 2</li>
<li>Autor: Brian Michael Bendis</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Spider-Man, Seria Marvel Classic</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 348</li>
<li>Format: 17.00x26.00 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328126855</li>
<li>Język: polski</li>
<li>Tłumacz: Starosta Marek</li>
<li>ISBN: 9788328126855</li>
<li>EAN: 9788328126855</li>
<li>Wymiary: 33.1x16.2x2.4 cm</li></ul>',
                'date' => new DateTime('02-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 19,
                'id_publishing' => 10,
                'img_href' => '/images/products/Daredevil-Nieustraszony.jpg',
                'img_alt' => 'Daredevil. Nieustraszony!',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Daredevil. Nieustraszony!',
                'promotion_price' => 0.20,
                'price' => 1.20,
                'year_publication' => 2018,
                'description' => '<p>Trzeci tom przygód Daredevila, adwokata za dnia i bezlitosnego sędziego w nocy.</p>
<p>Tym razem Matt Murdock musi zmierzyć się Alexandrem Bontem, którego kiedyś wsadził za kratki. Bont po wielu latach wreszcie wyszedł z więzienia i marzy o zemście.</p>
<p>Daredevil trafia też na spotkanie ludzi, na których życie jego działania wywarły niemały wpływ. Poczuje się tam jak wielbiony bohater czy raczej jak znienawidzony destruktor? Tymczasem Wilson Fisk kombinuje, jak uniknąć odsiadki. Jego plan polega na sprzedaniu wymiarowi sprawiedliwości dowodów na to, że Matt Murdock to Daredevil. Kingpin twierdzi, że dysponuje aktami, które to potwierdzają. Na takie dokumenty połasi się oczywiście nie tylko FBI…</p>',
                'details' => '<ul><li>Tytuł: Daredevil. Nieustraszony! tom 3</li>
<li>Autor: Brian Michael Bendis</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Marvel Classic</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 512</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328127494</li>
<li>Język: polski</li>
<li>Tłumacz: Szpak Marceli</li>
<li>ISBN: 9788328127494</li>
<li>EAN: 9788328127494</li>
<li>Wymiary: 17.7x26.5x4.5 cm</li></ul>',
                'date' => new DateTime('05-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 19,
                'id_publishing' => 10,
                'img_href' => '/images/products/Superman-Action-Comics-1000.jpg',
                'img_alt' => 'Superman Action Comics 1000',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Superman Action Comics 1000',
                'promotion_price' => 0.20,
                'price' => 0.69,
                'year_publication' => 2019,
                'description' => '<p>Ukazanie się tysięcznego numeru Action Comics zbiega się w czasie ze świętowaniem osiemdziesiątych urodzin Supermana. Przez osiem dekad Człowiek ze Stali wielokrotnie ratował Metropolis oraz Ziemię, ale to nie koniec jego niezwykłej przygody! Teraz rozpoczyna się nowy rozdział podróży tego ikonicznego już superbohatera. W jubileuszowym wydaniu Action Comics #1000 znani i cenieni scenarzyści i rysownicy oddają hołd magazynowi, od którego wszystko się zaczęło.</p>',
                'details' => '<ul><li>Autor: Brian Michael Bendis</li>
<li>Wydawnictwo Egmont</li>
<li>Seria DC Odrodzenie</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2019</li>
<li>Ilość stron: 120</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328141322</li>
<li>EAN: 9788328141322</li>
<li>Wymiary: 17.0x25.0x1.2 cm</li></ul>',
                'date' => new DateTime('07-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 20,
                'id_publishing' => 10,
                'img_href' => '/images/products/Wolverine.jpg',
                'img_alt' => 'Wolverine',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wolverine',
                'promotion_price' => 0.20,
                'price' => 0.95,
                'year_publication' => 2018,
                'description' => '<p>Wolverine to superbohater różnych serii komiksowych wydawanych przez Marvel Comics. Jest ON pochodzącym z Kanady mutantem. Charakteryzuje się zdolnością bardzo szybkiej regeneracji uszkodzonych tkanek. Posiada również kostne pazury chowane w przedramionach obu rąk.</p>
<p>Magazyn filmowy Empire oraz serwis internetowy IGN zgodnie uplasowały Wolverine\'a na 4 miejscu najlepszych postaci komiksowych. Poza komiksem Wolverine pojawia się również w serialach animowanych, filmach fabularnych i grach komputerowych. Marvel to firma znana również z przygód takich bohaterów jak Kapitan Ameryka, Iron Man, Spider-Man, Hulk, Fantastyczna Czwórka czy Avengers. Jest częścią The Walt Disney Company.</p>
<p>Wolverine. Tom 4 to materiały ze scenariuszami Jasona Aarona. Bohater wydostał się wreszcie z czeluści piekła i może zemścić się na Czerwonej Prawej Dłoni - organizacji, która go tam wysłała, a nie powiedziała jeszcze ostatniego słowa. Wolverine podejmuje się również obrony Chinatown przed narkotykami oraz trapiącymi tę dzielnicę rozmaitymi złoczyńcami. Wraca również do Japonii, gdzie Sabretooth i Mystique sieją spustoszenie. Nie będzie łatwo ich pokonać. By to zrobić Wolverine będzie musiał współpracować zarówno z Yakuzą, jak i Dłonią.</p>',
                'details' => '<ul><li>Tytuł: Wolverine, tom 4</li>
<li>Autor: Jason Aaron</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Marvel Classic</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 408</li>
<li>Format: 17.00x26.00 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328127531</li>
<li>Język: polski</li>
<li>Tłumacz: Czartoryski Bartosz</li>
<li>ISBN: 9788328127531</li>
<li>EAN: 9788328127531</li>
<li>Wymiary: 33.1x16.1x2.6 cm</li></ul>',
                'date' => new DateTime('08-02-2019'),
            ],
            [
                'id_cat' => '002001',
                'id_author' => 19,
                'id_publishing' => 11,
                'img_href' => '/images/products/Jessica-Jones-Puls.jpg',
                'img_alt' => 'Jessica Jones. Puls',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Jessica Jones. Puls',
                'promotion_price' => 0.20,
                'price' => 1.05,
                'year_publication' => 2018,
                'description' => '<p>Jessica Jones – popularna nowa bohaterka stworzona przez Briana Michaela Bendisa w przebojowej serii Alias – powraca!</p>
<p>Była członkini Avengers, która została prywatnym detektywem, rozpoczyna nowy rozdział swojego życia. Podejmuje pracę w gazecie „Daily Bugle”, w poświęconym superbohaterom nowym dodatku zatytułowanym „Puls!”. Pierwsze zlecenie: ujawnić tożsamość obdarzonego supermocami mordercy dziennikarki! Jaki związek ze sprawą ma Norman Osborn? W jaki sposób szokujące odkrycie Jessiki wpłynie na całe Uniwersum Marvela? Poszukiwanie odpowiedzi stanie się trudniejsze, gdy „Tajna Wojna” Nicka Fury’ego przeniesie się na ulice Nowego Jorku, a nawet do mieszkania Jessiki i Luke’a Cage’a! Kiedy ich życie legnie wgruzach, Jessica odpowie kontratakiem! A na koniec chwila, na którą czekaliście: narodziny dziecka Jessiki i Luke’a oraz ich ślub! Gościnnie pojawią się Spider-Man, Kapitan Ameryka, New Avengers i nie tylko!</p>',
                'details' => '<ul><li>Autorzy: Brian Michael Bendis</li>
<li>Wydawnictwo Mucha Comics</li>
<li>Seria Jessica Jones</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 360</li>
<li>Format: 17.00x26.00 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365938114</li>
<li>ISBN: 9788365938114</li>
<li>EAN: 9788365938114</li></ul>',
                'date' => new DateTime('09-02-2019'),
            ],

            //-----------------komiksy/europejskie-----------------

            [
                'id_cat' => '002002',
                'id_author' => 23,
                'id_publishing' => 12,
                'img_href' => '/images/products/William-Adams-Samuraj.jpg',
                'img_alt' => 'William Adams, Samuraj',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'William Adams, Samuraj',
                'promotion_price' => 0.20,
                'price' => 0.69,
                'year_publication' => 2017,
                'description' => '<p>Początek XVII wieku. Statek prowadzony przez angielskiego pilota Williama Adamsa rozbija się u wybrzeży Japonii.</p>
<p>Cesarstwo stoi na skraju wojny domowej, podzielone w walce o władzę pomiędzy Tokugawą i pozostałymi czterema regentami. Stawką jest tytuł szoguna.</p>
<p>Szeroka wiedza Adamsa w zakresie żeglugi morskiej i broni bardzo szybko czynią z niego instrument konfliktu.</p>
<p>Podczas gdy jego śmierci domagają się czterej regenci oraz obecni w Japonii portugalscy jezuici, nieprzychylni wobec obecności protestanta w kraju, życie ratuje mu pan Tokugawa. Od tej pory losy dwóch mężczyzn nierozerwalnie splatają się ze sobą.</p>
<p>William Adams stał się pierwowzorem postaci Johna Blackthorne’a, bohatera powieści Shōgun Jamesa Clavella oraz opartego na niej serialu Szogun, w którym główne role zagrali Richard Chamberlain i Toshirō Mifune.</p>',
                'details' => '<ul><li>Autor: Mathieu Mariolle</li>
<li>Wydawnictwo Elemental</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2017</li>
<li>Ilość stron: 112</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788394732448</li>
<li>Język: polski</li>
<li>Tłumacz: Syty Jakub</li>
<li>ISBN: 9788394732448</li>
<li>EAN: 9788394732448</li>
<li>Wymiary: 21.0x29.0x1.2 cm</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 22,
                'id_publishing' => 10,
                'img_href' => '/images/products/Thorgal-Czarna-galera.jpg',
                'img_alt' => 'Thorgal. Czarna galera',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Thorgal. Czarna galera',
                'promotion_price' => 0.20,
                'price' => 0.45,
                'year_publication' => 2016,
                'description' => '<p>Thorgal wraz ze swoją brzemienną żoną prowadzą beztroskie życie na gospodarstwie Caleba (W przekładzie Wojciecha Birka (Egmont Polska) – Kaleba). Oczekują przyjścia na świat swojego dziecka, toteż nie planują żadnych najbliższych podróży. Nastoletnia Shaniah, oczarowana Thorgalem, pragnie by ten ją zabrał w lepsze miejsca, gdzie nikt nie traktowałby jej jako niepoważnej smarkuli. Pragnie zwiększyć swe perspektywy i nie tracić życia na wsi. Gdy poznaje swój dziecinny obraz w oczach Thorgala, uprowadza mu jego wierzchowca. Kłopoty zaczynają się, gdy zostaje napadnięta przez zbiega z Czarnej Galery, kuzyna Shardara Mocarnego, który odbiera jej konia dla umożliwienia sobie ucieczki. Nazajutrz ku gospodarstwu zmierza świta pod wodzą Ewinga, wysłana przez następcę tronu - księcia Veronara - w poszukiwaniu ich najważniejszego więźnia, przywódcy rebelii, imieniem Galathorn. Odrzucona przez Thorgala zazdrosna Shaniah decyduje się z zawiści wrobić go w konszachty z przeciwnikami polityki Shardara, toteż wiking zostaje siłą zaprowadzony przed tron rozpuszczonego Veronara na Czarnej Galerze. Tam rozsierdza kapryśnego władcę uniknięciem śmierci z łap jego udomowionego lamparta, Kheeli. Thorgalowi udaje się uciec po zwycięskiej walce z dzikim kotem, który to przypłacił ją życiem. Nie będąc w stanie się ukryć, żołnierze znowu sprowadzają Aegirssona na okręt, zakuwając z innymi niewolnikami do wioseł. Wzniecając pod pokładem awanturę z poganiaczami, Thorgal trafia do kajuty Ewinga, w której dowódca straży przesłuchuje wikinga pragnąc wydobyć informacje o swoim sprzymierzeńcu, Galathornie. Wraz z nim usiłuje obalić okrutne rządy Shardara. Veronar przyłapuje podwładnego na zdradzie stanu i pragnie dokonać samosądu poprzez egzekucją Thorgala z Ewingiem. W tym samym czasie do okrętu zbliżały się okręty bojowe wikingów z Jorundem Bykiem na czele, szykujących się do abordażu. W ferworze desperackiej walki okręt zostaje zdobyty, sam Veronar zaś uśmiercony. Ewingowi już na początku walki udało się wydostać ze statku i udać z kilkoma najemnikami w stronę gospodarstwa Caleba. Żona Thorgala, Aaricia, miała posłużyć jako zakładniczka do przekonania jej męża o sensie współpracy. Całe gospodarstwo zostało spalone, a mieszkańcy zginęli z rąk awanturników. Thorgal przekonany był o śmierci swojej żony - według słów Ewinga, wolała stracić życie w morzu. Shaniah, będąca zarzewiem nieporozumień, stanowiła ostateczny powód do pojedynku między wikingiem a byłym dowódcą Veronara. Thorgal zabija przeciwnika i udaje się ze złamanym sercem przed siebie. Shaniah z poczuciem winy, nie mogąc nic ze sobą zrobić wśród martwych mieszkańców spalonej wioski, rusza jego śladem.</p>',
                'details' => '<ul><li>Tytuł: Thorgal Czarna galera Tom 4</li>
<li>Autorzy: Grzegorz Rosiński, Jean Hamme, Jean Van Hamme</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Thorgal</li>
<li>Oprawa: Twarda</li>
<li>Format: 22.0x29.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 49602201075KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: La galere noire</li>
<li>Tłumacz: Birek Wojciech</li>
<li>ISBN: 9788323725794</li>
<li>EAN: 9788323725794</li>
<li>Wymiary: 22.0x29.5x0.6 cm</li></ul>',
                'date' => new DateTime('13-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Asteriks-Wyprawa-dookola-Galii.jpg',
                'img_alt' => 'Asteriks. Wyprawa dookoła Galii',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Asteriks. Wyprawa dookoła Galii',
                'promotion_price' => 0.35,
                'price' => 0.43,
                'year_publication' => 2011,
                'description' => '<p>Rzymianie wpadają na doskonały pomysł pokonania niezwyciężonych Galów. Postanawiają wybudować wokół wioski palisadę odcinającą jej mieszkańców od świata zewnętrznego i w ten sposób zmusić ich do kapitulacji. Asteriks zakłada się z Rzymianami, że mimo przeszkody uda mu się zwiedzić całą Galię i z każdego miejsca przywieźć jakiś specjał. I rzeczywiście, bez wielkich przeszkód Asteriks razem z Obeliksem wyruszają w niezwykłą podróż. Jedynym utrudnieniem w czasie drogi są rzymskie patrole, które próbują pokrzyżować im plany.</p>',
                'details' => '<ul><li>Tytuł: Asteriks Wyprawa dookoła Galii tom 4</li>
<li>Autor: Rene Goscinny</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Asteriks</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 48</li>
<li>Format: 21.5x29.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53616901075KS</li>
<li>Język: polski</li>
<li>ISBN: 9788323746799</li>
<li>EAN: 9788323746799</li>
<li>Wymiary: 21.5x29.0x0.4 cm</li></ul>',
                'date' => new DateTime('02-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 22,
                'id_publishing' => 10,
                'img_href' => '/images/products/Thorgal-Kraina-Qa.jpg',
                'img_alt' => 'Thorgal. Kraina Qa',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Thorgal. Kraina Qa',
                'promotion_price' => 0.20,
                'price' => 0.66,
                'year_publication' => 2015,
                'description' => '<p>Dziesiąty tom przygód Thorgala. Bohater nadal mieszka z rodziną na malutkiej wyspie, na którą zaprosił przyjaciół poznanych w poprzednim tomie - Drewnianą Nogę i Tjalla. Ale idylla samotnego życia wkrótce się skończy. Syn Thorgala, Jolan, oraz Drewniana Noga zostają porwani przez obcych, którzy uwożą ich na drugi kraniec świata. Kto za tym stoi? Na scenę ponownie wkracza Kriss de Valnor - oczywiście to ona maczała palce w uprowadzeniu naszych bohaterów, ale cała sprawa jest znacznie poważniejsza niż zwykłe porwanie. Chodzi o wielką politykę, tyle że nie rozgrywającą się w Europie. Tak zaczyna się najsławniejszy i najlepszy podcykl serii o Thorgalu. Kilka następnych tomów poprowadzi czytelnika poprzez ocean ku niezwykłym krainom, które dopiero po setkach lat ponownie odkryje Kolumb...</p>',
                'details' => '<ul><li>Tytuł: Thorgal Kraina Qa Tom 10</li>
<li>Autor: Grzegorz Rosiński</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Thorgal</li>
<li>Oprawa: Twarda</li>
<li>Format: 22.2x29.4cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 44282701075KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Le pays Qa</li>
<li>Tłumacz: Birek Wojciech</li>
<li>ISBN: 9788323729716</li>
<li>EAN: 9788323729716</li>
<li>Wymiary: 22.2x29.4x0.5 cm</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 22,
                'id_publishing' => 10,
                'img_href' => '/images/products/Thorgal-Oczy-Tanatloca.jpg',
                'img_alt' => 'Thorgal. Oczy Tanatloca',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Thorgal. Oczy Tanatloca',
                'promotion_price' => 0.20,
                'price' => 0.64,
                'year_publication' => 2015,
                'description' => '<p>Wznowienie w twardej oprawie kolejnego tomu klasycznej podserii fantasy o Thorgalu, rozgrywającej się w Nowym Świecie we wczesnym średniowieczu. Jolan, syn Thorgala, i Drewniana Noga próbują uciec z miasta Xinjinów, ale nie są w stanie przebrnąć przez pustynię. Z kolei Thorgal, jego żona Aaricia, Tjall i podstępna Kriss przedzierają się przez dżunglę, by dostać się do wielkiego miasta Czaamów, którym rządzi demoniczny król-bóg - Ogotai. Ich zadaniem jest kradzież magicznego hełmu władcy miasta, nie przypuszczają jednak, że zarówno po drodze, jak i w samej stolicy napotkają tak liczne przeszkody… Władca Xinjinów z kolei odkrywa, kim tak naprawdę jest Thorgal, i uświadamia sobie, że musi zająć się "magiczną" edukacją jego syna. Kontynuacja znakomitej podserii o Thorgalu, która do dziś jest uważana za jedną z najlepszych komiksowych opowieści fantastycznych.</p>',
                'details' => '<ul><li>Tytuł: Thorgal Oczy Tanatloca Tom 11</li>
<li>Autor: Grzegorz Rosiński</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Thorgal</li>
<li>Oprawa: Twarda</li>
<li>Format: 22.0x28.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 44486301075KS</li>
<li>Język: polski</li>
<li>ISBN: 9788323729723</li>
<li>EAN: 9788323729723</li>
<li>Wymiary: 22.0x28.0x0.5 cm</li></ul>',
                'date' => new DateTime('15-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Asteriks-Gladiator.jpg',
                'img_alt' => 'Asteriks. Gladiator',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Asteriks. Gladiator',
                'promotion_price' => 0.20,
                'price' => 0.36,
                'year_publication' => 2011,
                'description' => '<p>Juliusz Cezar otrzymuje od jednego z dowódców niezwykły podarunek – Kakofoniksa – słynnego galijskiego barda. Nieświadomy sytuacji bohater jest przekonany, że czekają go występy. Jednak Cezar nie okazuje zainteresowania muzycznym talentem Kakofoniksa i po stwierdzeniu, że ten nie nadaje się na gladiatora, postanawia rzucić go lwom na pożarcie w trakcie zbliżających się Igrzysk. Na ratunek spieszą mu Asteriks i Obeliks i, by dostać się do Koloseum, w którym ma być stracony ich towarzysz, postanawiają zostać gladiatorami.</p>',
                'details' => '<ul><li>Tytuł: Asteriks Gladiator</li>
<li>Autor: Rene Goscinny</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Asteriks</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 48</li>
<li>Format: 21.5x29.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53133501075KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Asterix Gladiateur</li>
<li>Tłumacz: Kilian Jarosław</li>
<li>ISBN: 9788323747079</li>
<li>EAN: 9788323747079</li>
<li>Wymiary: 21.5x29.0x0.5 cm</li></ul>',
                'date' => new DateTime('16-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Asteriks-Zloty-sierp.jpg',
                'img_alt' => 'Asteriks. Złoty sierp',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Asteriks. Złoty sierp',
                'promotion_price' => 0.20,
                'price' => 0.25,
                'year_publication' => 2011,
                'description' => '<p>Życie małej, galijskiej wioski, która wciąż nie poddała się Rzymianom, płynie spokojnym rytmem. Pewnego jednak dnia staje się rzecz błaha na pozór, lecz straszna w skutkach. Panoramiks łamie przypadkiem złoty sierp, którego używał do ścinania gałęzi jemioły. Bez tego magiczny eliksir zapewniający Galom nadludzką siłę nie będzie miał mocy. </p>
<p>Dwaj niepokonani bohaterowie - Asteriks i Obeliks - nie zostawią druida bez pomocy. Postanawiają udać się do odległej Lutecji, gdzie daleki kuzyn Obeliksa - Ameriks - zajmuje się wyrobem najdoskonalszych w świecie złotych sierpów. Podróż jest długa i pełna niebezpieczeństw. Na dodatek po przybyciu na miejsce okazuje się, że Ameriksa porwali barbarzyńcy. Dwaj dzielni przyjaciele postanawiają ruszyć mu na ratunek.</p>
<p>Asteriks i Obeliks znani są i lubiani od lat. Ich pierwsza, komiksowa przygoda ukazała się w 1959 roku. Autorem scenariuszy do pierwszych 24 tomów serii jest René Goscinny znany chyba wszystkim młodym Czytelnikom jako twórca postaci Mikołajka. Komiksy z przygodami dzielnych Galów zdobyły sobie we Francji taką popularność, że pierwszego francuskiego satelitę nazwano właśnie imieniem Asteriksa. Autorem rysunków, a później także scenariuszy albumów, był znakomity rysownik - Albert Uderzo.</p>',
                'details' => '<ul><li>Tytuł: Asteriks i złoty sierp</li>
<li>Autor: Rene Goscinny</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Asteriks</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 48</li>
<li>Format: 21.5x29.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53133401075KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: La Serpe d\'or</li>
<li>Tłumacz: Kilian Jarosław</li>
<li>ISBN: 9788323724391</li>
<li>EAN: 9788323724391</li>
<li>Wymiary: 21.5x29.0x0.5 cm</li></ul>',
                'date' => new DateTime('16-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 22,
                'id_publishing' => 10,
                'img_href' => '/images/products/Thorgal-Aniel.jpg',
                'img_alt' => 'Thorgal. Aniel',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Thorgal. Aniel',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2018,
                'description' => '<p>Trzydziesta szósta część bestsellerowej serii fantasy ukazującej przygody Thorgala Aegirssona, bohatera wychowanego przez wikingów. Thorgal z towarzyszami i synem Arielem, którego opanowały dwa obce byty, płyną ku wybrzeżom odległego królestwa Zhar. Tam właśnie Aegirsson chce odnaleźć dawnych przyjaciół, a szczególnie mędrca Armenosa, gdyż tylko ON może wyleczyć Ariela. Na miejscu okazuje się jednak, że Zhar zostało opanowane przez tajemnicze wojowniczki. Thorgala czeka długa walka, nim dotrze do siedziby Armenosa, ale czy mędrzec będzie znał sposób na uratowanie chłopca? I czy wiking kiedykolwiek zdoła wrócić z synem do swojej rodziny, która czeka na dalekiej Północy?  </p>
<p>Scenariusz 36. tomu napisał Francuz Yann Le Pennetier, współautor innych serii z tego samego uniwersum – Louve i Thorgal: Młodzieńcze Lata. Rysunki cyklu Thorgal są dziełem wybitnego polskiego grafika Grzegorza Rosińskiego, znanego z takich komiksów jak Yans czy Skarga Utraconych Ziem.</p>',
                'details' => '<ul><li>Tytuł: Aniel, tom 36</li>
<li>Autor: Grzegorz Rosiński</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Thorgal</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 48</li>
<li>Format: 21.5 x 29.0 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328135574</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Thorgal. Aniel vol 36</li>
<li>Tłumacz: Wojciech Birek</li>
<li>ISBN: 9788328135574</li>
<li>EAN: 9788328135574</li>
<li>Wymiary: 22.8x28.7x0.6 cm</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '002002',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Asteriks-i-Kleopatra.jpg',
                'img_alt' => 'Asteriks i Kleopatra',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Asteriks i Kleopatra',
                'promotion_price' => 0.20,
                'price' => 0.36,
                'year_publication' => 2011,
                'description' => '<p>Juliusz Cezar przybywa z wizytą do Aleksandrii i swej ukochanejKleopatry. Między królewską parą dochodzi do sporu, czyj naród jestpotężniejszy. Oburzona pychą Cezara Kleopatra zakłada się, że w trzymiesiące wybuduje wspaniały pałac na jego cześć i tym samym udowodni munieustającą wielkość Aleksandrii i jej mieszkańców. Cezar bez namysłuzgadza się na zakład, pewien, że Kleopatra przegra. Królowa powierza tokarkołomne zadanie najlepszemu w Aleksandrii architektowi, Numerobisowi.Jeśli mu się nie powiedzie, zostanie rzucony krokodylom na pożarcie.Numerobis jest załamany i choć nie wierzy w sukces, przystępuje dobudowy. Gdy w Aleksandrii zjawiają się dzielni Galowie – Asteriks iObeliks – plan budowy pałacu zyskuje szansę powodzenia...</p>',
                'details' => '<ul><li>Tytuł: Asteriks i Kleopatra 5</li>
<li>Autor: Rene Goscinny</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Asteriks</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 48</li>
<li>Format: 21.5x29.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 54222501075KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Asterix et Cleopatre</li>
<li>Tłumacz: Kilian Jarosław</li>
<li>ISBN: 9788323747048</li>
<li>EAN: 9788323747048</li>
<li>Wymiary: 21.5x29.0x0.5 cm</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],

            //-----------------komiksy/polskie-----------------

            [
                'id_cat' => '002003',
                'id_author' => 26,
                'id_publishing' => 10,
                'img_href' => '/images/products/Jonka-Jonek-i-Kleks-Zloto-Alaski.jpg',
                'img_alt' => 'Jonka, Jonek i Kleks. Złoto Alaski',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Jonka, Jonek i Kleks. Złoto Alaski',
                'promotion_price' => 0.20,
                'price' => 0.33,
                'year_publication' => 2010,
                'description' => '<p>Siódmy tomik z serii Jonka, Jonek i Kleks to zaproszenie do podróży w czasie i przestrzeni. Mogą ją przeżyć zarówno dorośli fani twórczości Szarloty Pawel, wspominając swoje dzieciństwo w PRL-u, jak i nowi czytelnicy, czerpiąc czystą przyjemność z lektury. Tytułowi bohaterowie wraz z ukochaną Kleksa, księżniczką Plum, w magiczny sposób przenoszą się na Alaskę w czasy poszukiwaczy złota. Biorą udział w wyścigu psich zaprzęgów i oczywiście poszukują cennych samorodków. Lecz, jak się okaże, znajdą coś zupełnie innego...</p>',
                'details' => '<ul><li>Autor: Pawel Szarlota</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Jonka, Jonek i Kleks</li>
<li>Oprawa: Miękka</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978832810235433</li>
<li>ISBN: 9788328102354</li>
<li>EAN: 978832810235433</li>
<li>Wymiary: 17.0x26.0x0.5 cm</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 26,
                'id_publishing' => 10,
                'img_href' => '/images/products/Jonka-Jonek-i-Kleks-Pioro-contra-flamaster.jpg',
                'img_alt' => 'Jonka, Jonek i Kleks. Pióro contra flamaster',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Jonka, Jonek i Kleks. Pióro contra flamaster',
                'promotion_price' => 0.20,
                'price' => 0.32,
                'year_publication' => 2010,
                'description' => '<p>W drugim tomie Kleks zaangażuje się w konflikt pomiędzy producentem długopisów i flamastrów, bezwzględnym prezesem Jolskym z firmy Uniflamaster, a poczciwym panem Mastersem, szefem Interinkaustu produkującego znakomite pióra i atramenty.</p>',
                'details' => '<ul><li>Tytuł: Jonka, Jonek i Kleks t.2 Pióro contra flamaster</li>
<li>Autor: Pawel Szarlota</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Jonka, Jonek i Kleks</li>
<li>Oprawa: Miękka</li>
<li>Format: 170 x 260</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788323747727</li>
<li>Język: polski</li>
<li>ISBN: 9788323747727</li>
<li>EAN: 9788323747727</li>
<li>Wymiary: 17.0x26.0x0.5 cm</li></ul>',
                'date' => new DateTime('17-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 25,
                'id_publishing' => 10,
                'img_href' => '/images/products/Kajko-i-Kokosz-Szkola-latania.jpg',
                'img_alt' => 'Kajko i Kokosz. Szkoła latania',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kajko i Kokosz. Szkoła latania',
                'promotion_price' => 0.20,
                'price' => 0.37,
                'year_publication' => 2011,
                'description' => '<p>Pierwszy album z przygodami Kajko i Kokosza, zatytułowany “Szkoła latania”, to doskonały wstęp w największą dumę polskiej sztuki komiksowej.</p>
<p>Pełna humoru graficzna opowieść dla prawdziwych miłośników “Kajka i Kokosza”, jednej z najsławniejszych polskich serii komiksowych o przygodach dwóch słowiańskich wojów. "Szkoła latania" to wspaniały album, którego nie może zabraknąć na półce z komiksami.</p>
<p>Kajko i Kokosz to bohaterowie serii komiksów, której autorem jest Janusz Christa. Historia opowiadająca o przygodach dwóch słowiańskich wojowników szybko zyskała popularność i podbiła serca Czytelników, którzy chętnie sięgają po kolejne części przygód Kajka i Kokosza. Bohaterowie stworzeni przez Christę po raz pierwszy pojawili się na pasku komiksowym opublikowanym w 1972 roku.</p>
<p>Kajko i Kokosz to najlepsi przyjaciele, wspólnie przeżywają wiele ciekawych przygód. Kajko wyróżnia się inteligencją, odwagą i niskim wzrostem. Doskonale włada mieczem i celnie strzela z łuku. Inaczej sprawa wygląda w przypadku samolubnego Kokosza, który jest tęgiej budowy, a jedną z jego największych miłości jest jedzenie. Nie należy ON też do najodważniejszych.</p>
<p>"Kajko i Kokosz. Szkoła latania" to pierwszy wydany w formie albumu komiks o przygodach słowiańskich wojowników, którzy dzielnie bronią Mirmiłowa. W tej części komiksu nie zabraknie Łamignata, który narzeka na brak sił. Z pomocą rusza jego małżonka, czarownica Jaga. Łamignat otrzymuje od niej czarodziejską fujarkę, kora ma zapewnić mu nadludzkie moce. Podczas, gdy Łamignat sprawdza, czy podarunek od żony rzeczywiście ma jakieś magiczne moce, w lesie pojawia się Mirmił wracający z polowania, razem ze swoimi dzielnymi wojami. Kajko i Kokosz strzegą grodu Mirmiłów, z którego wyganiają intruzów. Wkrótce Mirmił postanawia opanować sztukę latania na miotle. Pełna humoru opowieść wyróżniająca się barwną oprawą graficzną to wspaniały sposób na udaną rozrywkę.</p>',
                'details' => '<ul><li>Tytuł: Kajko i Kokosz Szkoła latania</li>
<li>Autor: Janusz Christa</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Kajko i Kokosz</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 44</li>
<li>Format: 21.5x29.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 53496901075KS</li>
<li>Język: polski</li>
<li>ISBN: 9788323746935</li>
<li>EAN: 9788323746935</li>
<li>Wymiary: 21.5x29.0x0.2 cm</li></ul>',
                'date' => new DateTime('16-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 25,
                'id_publishing' => 10,
                'img_href' => '/images/products/Kajko-i-Kokosz-Wielki-turniej.jpg',
                'img_alt' => 'Kajko i Kokosz. Wielki turniej',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kajko i Kokosz. Wielki turniej',
                'promotion_price' => 0.20,
                'price' => 0.27,
                'year_publication' => 2011,
                'description' => '<p>Jeśli chcesz wrócić do czasów dzieciństwa oraz znów spotkać się z bohaterami opowieści, które fascynowały Cię i nie pozwalały się oderwać od lektury, to mamy dobrą wiadomość. Możesz sprawić, aby Twoje dziecko także zapoznało się zi przygodami komiksowych bohaterów. Możesz zarazić je pasją do polskiego komiksu. "Kajko i kokosz. Wielki turniej" to wielki powrót klasyki, wspaniała reedycja.</p>
<p>"Wielki turniej" to kolejny album serii. Zbójcerze wciąż dręczą mieszkańców Mirmiłowa. Tym razem posunęli się za daleko. Zarazili Mirmiła senną zmorą i tylko potężna moc Jagi może uratować mieszkańców. W międzyczasie do grodu przybywa Książęcy Prezes Krzepy i Turniejów. Okazuje się, że książę organizuje turniej z okazji Święta Barana. Każdy gród wystawi swojego zawodnika. Kajko i Kokosz poszukują dorodnego tryka, jednak Zbójcerze okazali się być szybsi. Mieszkańcy Mirmiłowa mogą jedynie wystawić sympatycznego baranka Beka. Baranek obiecuje, że stanie się niepokorny, jeśli tylko właściciele spełnią jego marzenia. Nie wszystkie, tylko dwa?</p>
<p>"Wielki turniej" jest pełen humoru i uśmiechu. Komiks posiada dynamiczną akcję, która dzieje się w różnych miejscach. Na brawa zasługuje bardzo ładna kreska. Komiks posiada również olbrzymie walory edukacyjne. Autor uwypuklił pozytywne cechy bohaterów, dzięki czemu dzieci mają wzór do naśladowania. Komiks się nie zestarzał. Przesłanie jest wciąż aktualne, a fabuła nadal wciągająca. </p>
<p>"Wielki turniej" ma w sobie wiele aluzji do czasów, w których został stworzony. Perypetie Kajka i Kokosza z pewnością przypadną do gustu każdemu miłośnikowi komiksów. To polska perełka. Wybitny i legendarny już komiks. Przepełnione kolorem i humorem strony albumu to gwarancja wspaniałego relaksu i rozrywki najwyższej jakości.</p>',
                'details' => '<ul><li>Tytuł: Kajko i Kokosz Wielki turniej</li>
<li>Autor: Janusz Christa</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Kajko i Kokosz</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 44</li>
<li>Format: 21.5x29.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 49896201075KS</li>
<li>Język: polski</li>
<li>ISBN: 9788323737520</li>
<li>EAN: 9788323737520</li>
<li>Wymiary: 21.5x29.0x0.3 cm</li></ul>',
                'date' => new DateTime('15-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 25,
                'id_publishing' => 10,
                'img_href' => '/images/products/Kajko-i-Kokosz-Na-wczasach.jpg',
                'img_alt' => 'Kajko i Kokosz. Na wczasach',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kajko i Kokosz. Na wczasach',
                'promotion_price' => 0.20,
                'price' => 0.38,
                'year_publication' => 2011,
                'description' => '<p>Najsłynniejsi słowiańscy wojowie komiksowi powracają - oto wznowienie przezabawnych przygód Kajka i Kokosza! Do Mirmiłowa zawitał Referent do Spraw Turystyki i Wypoczynku. Każdy chce odpocząć od cywilizacji, niestety, skierowanie na wczasy jest tylko jedno... Na nagrodę najbardziej zasługują Kajko i Kokosz - ale jak wysłać tylko jednego z nich? Rozwiązanie jest jedno - skierowanie dostanie Kajko, a Kokosz pojedzie z nim na gapę. Dzielni wojowie spotykają po drodze innego dzielnego woja - Wita, który szuka przygód i sławy. Wczasy okazują się wcale nie tak przyjemne, jak mogłoby się wydawać. W końcu czas wracać do Mirmiłowa - zwłaszcza że Zbójcerze nie próżnują i szykują kolejny atak. Klasyka polskiego komiksu, którą powinni przeczytać wszyscy.</p>',
                'details' => '<ul><li>Autor: Janusz Christa</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Kajko i Kokosz</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2011</li>
<li>Ilość stron: 37</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 49896301075KS</li>
<li>ISBN: 9788323737605</li>
<li>EAN: 9788323737605</li></ul>',
                'date' => new DateTime('21-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 28,
                'id_publishing' => 13,
                'img_href' => '/images/products/Kapitan-Zbik-W-pulapce.jpg',
                'img_alt' => 'Kapitan Żbik. W pułapce',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Kapitan Żbik. W pułapce',
                'promotion_price' => 0.20,
                'price' => 0.18,
                'year_publication' => 2019,
                'description' => '<p>Zakończenie opowieści z zeszytów "Dwanaście kanistrów" i "Zakręt śmierci".</p>
<p>Kazimierz Bujakowski, jednego z zawodników klubu sportowego "Korona", wie coraz więcej o przestępczej działalności prezesa klubu. Prezes próbuje zlikwidować niewygodnego świadka. Czy Kazikowi uda się spotkać z kapitanem Żbikiem i przekazać mu zdobyte informacje? Kim jest tajemniczy Damian i w jakim celu chce znaleźć prezesa?</p>',
                'details' => '<ul><li>Autor: Władysław Krupka</li>
<li>Wydawnictwo Ongrys</li>
<li>Seria Kapitan Żbik</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2019</li>
<li>Ilość stron: 32</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365803443</li>
<li>EAN: 9788365803443</li>
<li>Wymiary: 16.0x23.0x0.3 cm</li></ul>',
                'date' => new DateTime('22-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 27,
                'id_publishing' => 13,
                'img_href' => '/images/products/Wydzial-7-Operacja-Totenkopf.jpg',
                'img_alt' => 'Wydział 7. Operacja Totenkopf',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wydział 7. Operacja Totenkopf',
                'promotion_price' => 0.20,
                'price' => 0.16,
                'year_publication' => 2018,
                'description' => '<p>Rok 1962, PRL, do życia zostaje powołana nowa jednostka w ramach struktur SB, Wydział VII Departamentu 4. Tajna grupa, która w zracjonalizowanym świecie ówczesnej Polski ma za zadanie zmierzyć się ze zjawiskami paranormalnymi.</p>
<p>Nowa seria komiksów autorstwa Tomasza Kontnego i Marka Turka. Zeszyt pierwszy, Operacja Totenkopf, z rysunkami Grzegorza Pawlaka, od września w księgarniach i kioskach.</p>
<p>Pierwszy zeszyt dostępny jest w dwóch wariantach okładkowych: okładkę wersji podstawowej narysował Grzegorz Pawlak, a wersji specjalnej - Robert Adler.</p>',
                'details' => '<ul><li>Autor: Tomasz Kontny</li>
<li>Wydawnictwo Ongrys</li>
<li>Seria Wydział 7</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 32</li>
<li>Format: 17 x 24.5</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365803344</li>
<li>Język: polski</li>
<li>ISBN: 9788365803344</li>
<li>EAN: 9788365803344</li>
<li>Wymiary: 17.0x24.0x0.2 cm</li></ul>',
                'date' => new DateTime('23-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 27,
                'id_publishing' => 13,
                'img_href' => '/images/products/Wydzial-7-Larinae.jpg',
                'img_alt' => 'Wydział 7. Larinae',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wydział 7. Larinae',
                'promotion_price' => 0.20,
                'price' => 0.20,
                'year_publication' => 2018,
                'description' => '<p>Szczecin, rok 1962. Kiedy w tajemniczych okolicznościach ginie obcokrajowiec, władzom PRL zaczyna grozić blamaż.</p>
<p>Pracownicy Wydziału VII mają dyskretnie rozwiązać zagadkę, która nierozłącznie wiążę się z luksusowym lokalem „Kaskada”, ale zawiedzie ich również nad jezioro Rusałka i na przedmieścia… Wszędzie tam będą czyhały na nich zęby. Setki zębów.</p>',
                'details' => '<ul><li>Autor: Tomasz Kontny</li>
<li>Wydawnictwo Ongrys</li>
<li>Seria Wydział 7</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 32</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365803436</li>
<li>ISBN: 9788365803436</li>
<li>EAN: 9788365803436</li>
<li>Wymiary: 17.0x24.0x0.2 cm</li></ul>',
                'date' => new DateTime('24-02-2019'),
            ],
            [
                'id_cat' => '002003',
                'id_author' => 25,
                'id_publishing' => 10,
                'img_href' => '/images/products/Gucek-i-Roch.jpg',
                'img_alt' => 'Gucek i Roch',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Gucek i Roch',
                'promotion_price' => 0.20,
                'price' => 0.67,
                'year_publication' => 2014,
                'description' => '<p>Gucek i Roch – wyjątkowe wydanie dwóch opowieści Janusza Christy z przełomu lat 70. i 80. XX wieku – Tajemniczy rejs i Kurs na półwysep Jork.</p>
<p>Tajemniczy rejs - W Gdańsku w tajemniczych okolicznościach nieznani osobnicy porywają profesora Mixtura, twórcę maszyny o nazwie „Psychograj”. Aparat ten może zwiększyć lub odebrać odwagę osobie poddanej jego działaniu. Gucek i Roch, przyjaciele i marynarze z drobnicowca „Wodołaz”, ruszają śladami porywaczy. Trop zaprowadzi ich najpierw do Lizbony, a finalnie do Ameryki Południowej, gdzie będą musieli się zmierzyć z groźną szajką przestępców. Na miejscu okaże się jednak, że mogą liczyć na „uroczą” pomoc…</p>
<p>Kurs na półwysep Jork - Tym razem, płynąc z Japonii do wybrzeży Australii, drobnicowiec „Wodołaz” zatrzymuje się na krótko na jednej z wysp archipelagu malajskiego. Marynarze Gucek i Roch stają się tam świadkami dziwnych wydarzeń. Nie wiedzą jednak jeszcze, że czekają ich niespodzianki znacznie groźniejsze niż nadchodzący właśnie tajfun. Statek zostaje porwany przez gang przemytników narkotyków. Przestępcy zmuszają Gucka do nurkowania w niebezpiecznym kraterze…</p>
<p>Po dziesięciu latach od wydania albumu Kajtek, Koko i inni, w którym znalazły się przygody marynarzy w wersji czarno-białej, prezentujemy komiksy w postaci pokolorowanej.</p>',
                'details' => '<ul><li>Tytuł: Gucek i Roch</li>
<li>Autor: Janusz Christa</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Klasyka</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2014</li>
<li>Ilość stron: 96</li>
<li>Format: 22,0x29,5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328102422</li>
<li>Język: polski</li>
<li>ISBN: 9788328102422</li>
<li>EAN: 9788328102422</li>
<li>Wymiary: 22.0x30.0x1 cm</li></ul>',
                'date' => new DateTime('25-02-2019'),
            ],

            //-----------------komiksy/dla-dzieci-----------------

            [
                'id_cat' => '002004',
                'id_author' => 29,
                'id_publishing' => 10,
                'img_href' => '/images/products/Calvin-i-Hobbes-To-magiczny-swiat.jpg',
                'img_alt' => 'Calvin i Hobbes. To magiczny świat',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Calvin i Hobbes. To magiczny świat',
                'promotion_price' => 0.20,
                'price' => 0.54,
                'year_publication' => 2016,
                'description' => '<p>Pełne niezwykłego humoru przygody amerykańskiego chłopca. Calvin ma 6 lat, ukochanego przyjaciela - tygrysa Hobbesa (nie wiadomo, dlaczego niektórzy widzą w tym groźnym drapieżniku maskotkę) i masę pomysłów, jak dokuczyć Zuzi z sąsiedztwa. Zuzia zwykle okazuje się sprytniejsza, choć niewątpliwie brak jej wyobraźni. Podobnie jak pani Kornik - nauczycielce Calvina. Można by też powiedzieć parę cierpkich słów o opiekunce Rosalyn, ale - niespodzianka - w tym tomiku pokazuje nowe oblicze...Wiernym czytelnikom serii proponujemy przyjrzenie się postaci taty... Uwaga - komiks tylko dla osób, którym nieobca jest umiejętność śmiania się z samych siebie!</p>',
                'details' => '<ul><li>Tytuł: To magiczny świat, tom 9</li>
<li>Autor: Bill Watterson</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Calvin I Hobbes</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2016</li>
<li>Ilość stron: 168</li>
<li>Format: 21,5x16,5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328116085</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: It\'s a magical world</li>
<li>ISBN: 9788328116085</li>
<li>EAN: 9788328116085</li>
<li>Wymiary: 21.5x16.5x1.2 cm</li></ul>',
                'date' => new DateTime('12-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Lucky-Luke-Daisy-Town.jpg',
                'img_alt' => 'Lucky Luke. Daisy Town',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lucky Luke. Daisy Town',
                'promotion_price' => 0.57,
                'price' => 0.68,
                'year_publication' => 2018,
                'description' => '<p>Tak to zwykle na Dzikim Zachodzie bywało: najpierw na pustkowiu budowano saloon, potem więzienie i… powstawało miasto, którego banki i kasy sklepowe skutecznie przyciągały najgorszych opryszków.</p>
<p>Los ten nie ominął również cichego i spokojnego Daisy Town. Terror, kradzieże i rozboje, a nawet wojna z całym indiańskim plemieniem – oto skutki najazdu braci Daltonów. Tylko jeden człowiek i jeden koń na świecie mogą przeciwstawić się czwórce bandziorów.</p>
<p>Przed Państwem Lucky Luke i Jolly Jumper kontra bracia Daltonowie.</p>
<p>Seria Lucky Luke została stworzona przez dwie legendy frankofońskiego rynku komiksowego: pisarza René Goscinnego (1926–1977, autora bestsellerowych książek o Mikołajku oraz scenariuszy do tak słynnych cykli komiksowych jak Asteriks i Iznogud) oraz rysownika Morrisa (właśc. Maurice de Bevere, 1923–2001).</p>',
                'details' => '<ul><li>Tytuł: Daisy Town, tom 51</li>
<li>Autor: Rene Goscinny</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Lucky Luke</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 48</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328135338</li>
<li>Język: polski</li>
<li>Tłumacz: Puszczewicz Marek</li>
<li>ISBN: 9788328135338</li>
<li>EAN: 9788328135338</li>
<li>Wymiary: 28.4x21.7x0.2 cm</li></ul>',
                'date' => new DateTime('14-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 29,
                'id_publishing' => 10,
                'img_href' => '/images/products/Calvin-i-Hobbes-Jukon-czeka.jpg',
                'img_alt' => 'Calvin i Hobbes. Jukon czeka!',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Calvin i Hobbes. Jukon czeka!',
                'promotion_price' => 0.20,
                'price' => 0.38,
                'year_publication' => 2013,
                'description' => '<p>Trzeci tom przezabawnych przygód kilkuletniego Calvina i jego nieodłącznego towarzysza zabaw tygrysa Hobbesa. Tylko niewtajemniczeni uważają, że ten pluszowy zwierzak to zwykła maskotka. Tymczasem to niezastąpiony kawalarz, świetny komentator, inicjator szalonych zabaw. Dzięki Hobbesowi szkoła nie jest taka nudna, a wakacje to pasmo przygód. Z rodzicami też można jakoś wytrzymać, ale kiedy ich notowania gwałtownie spadają, z wiernym towarzyszem u boku można śmiało opuścić dom i ruszyć z wyprawą badawczą do Jukonu... </p>
<p>Drugie wydanie niezwykle popularnej na całym świecie serii komiksowej w zmienionej oprawie ze skrzydełkami.</p>',
                'details' => '<ul><li>Tytuł: Calvin i Hobbes t.3 Jukon czeka!</li>
<li>Autor: Bill Watterson</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Calvin I Hobbes</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2013</li>
<li>Ilość stron: 128</li>
<li>Format: 21.5x23.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 60511801075KS</li>
<li>Język: polski</li>
<li>Podtytuł: Tom 3</li>
<li>Oryginalny tytuł: Yukon, Ho!</li>
<li>Tłumacz: Cholewa Piotr W.</li>
<li>ISBN: 9788323761419</li>
<li>EAN: 9788323761419</li>
<li>Wymiary: 21.5x23.0x0.5 cm</li></ul>',
                'date' => new DateTime('16-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 29,
                'id_publishing' => 10,
                'img_href' => '/images/products/Calvin-i-Hobbes-Zemsta-pilnowanych.jpg',
                'img_alt' => 'Calvin i Hobbes. Zemsta pilnowanych',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Calvin i Hobbes. Zemsta pilnowanych',
                'promotion_price' => 0.20,
                'price' => 0.55,
                'year_publication' => 2013,
                'description' => '<p>Piąty tom przygód kilkuletniego Calvina i jego nieodłącznego towarzysza zabaw tygrysa Hobbesa.Calvin i jego przyjaciel znów wkraczają do akcji. Jak zwykle w życiu pełnego energii i pomysłów chłopca piętrzą się przeszkody h cokolwiek próbuje zrobić, okazuje się, że albo na drodze stają rodzice, albo nauczycielka, albo tak zwane czynniki obiektywne. Ten tom zaczyna się serią stripów o zimie, na którą Calvin czeka z utęsknieniem h śnieg, sanki, zabawy, a przede wszystkim prezenty od świętego Mikołaja! Calvin ułożył nawet listę rzeczy, które chciałby dostać: spis zaczyna się od bomby atomowej, a kończy na granatniku...Drugie polskie wydanie niezwykle popularnej na całym świecie serii komiksowej w zmienionej oprawie ze skrzydełkami.</p>',
                'details' => '<ul><li>Tytuł: Calvin i Hobbes Zemsta pilnowanych.</li>
<li>Autor: Bill Watterson</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Calvin I Hobbes</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2013</li>
<li>Ilość stron: 128</li>
<li>Format: 21.5x23.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 61613501075KS</li>
<li>Język: polski</li>
<li>Podtytuł: Tom 5</li>
<li>ISBN: 9788323761587</li>
<li>EAN: 9788323761587</li>
<li>Wymiary: 28.7x17.1x0.8 cm</li></ul>',
                'date' => new DateTime('17-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Lucky-Luke-kontra-Joss-Jamon.jpg',
                'img_alt' => 'Lucky Luke kontra Joss Jamon',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lucky Luke kontra Joss Jamon',
                'promotion_price' => 0.20,
                'price' => 0.72,
                'year_publication' => 2018,
                'description' => '<p>"Lucky Luke kontra Joss Jamon" to kolejna opowieść, pełna przygód i dobrego humoru. Dołącz do Samotnego Kowboja i daj się wciągnąć w historię, pełną emocjonujących wydarzeń. Dobra zabawa gwarantowana!</p>
<p>Kiedy wojna secesyjna powoli zaczyna dobiegać końca, w Frontier City zjawia się szóstka oszustów, którymi dowodzi Joss Jamon. Przestępcy postanawiają zdobyć władzę w mieście. Wykorzystując swoje zdolności, stopniowo zdobywają różne placówki. Zaczynają od banku, a kończą na zakładzie pogrzebowym. Już wkrótce Jamon staje się burmistrzem, który przydziela swoim kamratom kluczowe stanowiska. Lucky Luke będzie musiał przywrócić wszystko do porządku. Czy mu się uda? Złoczyńcy muszą przecież stanąć przed obliczem sprawiedliwości! Zadanie wydaje się być niezwykle trudne, jednak Samotny Kowboj nigdy się nie poddaje.</p>
<p>"Lucky Luke kontra Joss Jamon" to pełna komicznych wypadków opowieść, w której nie zabraknie rywalizacji między bohaterami. Scenariusz do tej opowieści stworzył René Goscinny. Za znakomite rysunki odpowiada natomiast niezastąpiony Morris. </p>
<p>Popularna na całym świecie seria komiksowa Lucky Luke została wymyślona przez belgijskiego rysownika i scenarzystę, Morrisa (Maurice de Bevere). Twórca słynnego kowboja urodził się 1 grudnia 1923 w Kortrijk. Zmarł 16 lipca 2001 w Brukseli. Do pracy nad komiksem dołączył również pisarz, René Goscinny (1926-1977). Po jego śmierci, kolejne scenariusze do przygód Lucky Lucka, zostały tworzone przez innych artystów.</p>',
                'details' => '<ul><li>Tytuł: Lucky Luke kontra Joss Jamon. Lucky Luke, tom 11</li>
<li>Autor: Rene Goscinny</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Lucky Luke</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 48</li>
<li>Format: 21.6 x 28.5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328135390</li>
<li>Język: polski</li>
<li>Tłumacz: Marek Puszczewicz</li>
<li>ISBN: 9788328135390</li>
<li>EAN: 9788328135390</li>
<li>Wymiary: 24.6x23.9x0.2 cm</li></ul>',
                'date' => new DateTime('12-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 24,
                'id_publishing' => 10,
                'img_href' => '/images/products/Lucky-Luke-Kuzyni-Daltonow.jpg',
                'img_alt' => 'Lucky Luke. Kuzyni Daltonów',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lucky Luke. Kuzyni Daltonów',
                'promotion_price' => 0.20,
                'price' => 0.99,
                'year_publication' => 2019,
                'description' => '<p>Następna wesoła przygoda Lucky Luke’a, najsławniejszego komiksowego kowboja z Dzikiego Zachodu! Na scenę wkraczają bracia Daltonowie! Postanawiają zostać rabusiami równie znanymi, co ich dalecy kuzyni, przed którymi drżał cały Dziki Zachód. Aby zdobyć ponurą sławę, czterej młodzieńcy będą musieli się podszkolić w bandyckim fachu. Daltonom przyświeca jeszcze jeden cel: krwawa zemsta na Lucky Luke’u, który kiedyś pokonał ich kuzynów. Szykuje się wielki pojedynek!</p>
<p>Serię Lucky Luke wymyślił znakomity francuski rysownik Morris (właśc. Maurice de Bevere, 1923–2001), który później przygotowywał ją wraz ze sławnym pisarzem René Goscinnym (1926–1977). Po śmierci Goscinnego scenariusze kolejnych odcinków serii były tworzone przez licznych kontynuatorów.</p>',
                'details' => '<ul><li>Tytuł: Kuzyni Daltonów. Lucky Luke, tom 12</li>
<li>Autorzy: Rene Goscinny, Morris</li>
<li>Wydawnictwo Egmont</li>
<li>Seria Lucky Luke</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2019</li>
<li>Ilość stron: 48</li>
<li>Format: 21.1x28.1cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788328135987</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: 12. Les cousins Dalton</li>
<li>Tłumacz: Puszczewicz Marek</li>
<li>ISBN: 9788328135987</li>
<li>EAN: 9788328135987</li>
<li>Wymiary: 21.1x28.1cm</li></ul>',
                'date' => new DateTime('16-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 30,
                'id_publishing' => 14,
                'img_href' => '/images/products/Wilk-Pies-i-Owce.jpg',
                'img_alt' => 'Wilk Pies i Owce',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wilk Pies i Owce',
                'promotion_price' => 0.20,
                'price' => 0.79,
                'year_publication' => 2013,
                'description' => '<p>Drogie Dzieci i jeszcze Drożsi Dorośli,<br/>
tak się akurat składa, że ta historia nie jest, niestety, zbyt krótka, a ja nie mam aż tyle śliny w pysku, żeby tu do Was mówić i mówić w nieskończoność, i jeszcze tłumaczyć wszystkim, dlaczego to właśnie JA jestem narratorem tej historii, a nie ktoś inny, może czystszy ode mnie albo lepiej wyczesany czy wykształcony, dlatego wszystkich zainteresowanych bajeczkami, w których grzeczne i nienagannie utrefione zwierzątka z uśmiechem na pyszczkach wcinają (tfu!) marcheweczki i popijają je soczkami jednodniowymi ze świeżo wyciśniętych (tfu!!) jabłuszek i w ogóle jest wesoło, kolorowo i (tfu!!!) całuśnie - zapraszam do najbliższego empiku albo na kolana do własnej babci.</p>
<p>Tak zaczyna się "Wilk, pies i owce", opowieść w której:<br/>
-wilk jest bardzo głodny i zrobi wszystko, by dopaść pasące się na łączce owce,<br/>
-pies jest bardzo odpowiedzialny i zrobi wszystko, by chronić pozostające pod jego opieką owce,<br/>
-owce... a owce się pasą.</p>
<p>Gdy spotkają się dwa tak bardzo zdeterminowane zwierzęta, konflikt jest nieunikniony. Kto z tego starcia wyjdzie zwycięsko?</p>
<p>"Wilk, pies i owce" to historia brawurowo opowiedziana przez Przemysława Wechterowicza, autora takich książeczek dla dzieci, jak "Mrówka wychodzi za mąż" czy "Lukrecja" oraz rysownika Bartosza Minkiewicza znanego z kultowych przygód obrońcy Opola - Wilqa.</p>',
                'details' => '<ul><li>Tytuł: Wilk Pies i Owce</li>
<li>Autor: Przemysław Wechterowicz</li>
<li>Wydawnictwo Kultura gniewu</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2013</li>
<li>Ilość stron: 64</li>
<li>Format: 18.0x24.5cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 63290702894KS</li>
<li>Język: polski</li>
<li>ISBN: 9788360915806</li>
<li>EAN: 9788360915806</li>
<li>Wymiary: 18.0x24.5x1 cm</li></ul>',
                'date' => new DateTime('16-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 31,
                'id_publishing' => 14,
                'img_href' => '/images/products/Cykada.jpg',
                'img_alt' => 'Cykada',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Cykada',
                'promotion_price' => 0.20,
                'price' => 0.68,
                'year_publication' => 2018,
                'description' => '<p>Najnowsza książka Shauna Tana to historia cykady, pracownika biurowego, którego nikt nie ceni. Cykada pracuje w biurowcu, dzień w dzień sumiennie wykonując nudne i powtarzalne czynności.</p>
<p>Nie ma jednak co liczyć na wdzięczność szefostwa, a współpracownicy go prześladują. Aż pewnego dnia cykada udaje się na dach wysokiego budynku, gdzie wydarzy się coś niezwykłego...</p>
<p>To opowieść dla wszystkich, którzy kiedykolwiek czuli się niedocenieni, pominięci, przepracowani.</p>',
                'details' => '<ul><li>Autor: Shaun Tan</li>
<li>Wydawnictwo Kultura gniewu</li>
<li>Oprawa: Twarda</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 36</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788364858918</li>
<li>Język: polski</li>
<li>ISBN: 9788364858918</li>
<li>EAN: 9788364858918</li>
<li>Wymiary: 28.6x22.0x1 cm</li></ul>',
                'date' => new DateTime('17-01-2019'),
            ],
            [
                'id_cat' => '002004',
                'id_author' => 60,
                'id_publishing' => 14,
                'img_href' => '/images/products/Wielki-zly-lis.jpg',
                'img_alt' => 'Wielki zły lis',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Wielki zły lis',
                'promotion_price' => 0.20,
                'price' => 0.99,
                'year_publication' => 2018,
                'description' => '<p>"Wielki zły lis" to niesamowicie popularny i bestsellerowy komiks opowiadający o lisie, który zupełnie nie potrafił polować - do momentu, kiedy to wpadł na genialne wyjście!</p>
<p>Nie każdy rodzi się łowcą i potrafi upolować własny obiad. Tak działo się z pewnym lisem, który absolutnie nie radził sobie z wycieczkami do kurnika. Co jednak postanowił zrobić? Dowiemy się tego z komiksu "Wielki zły lis"!</p>
<p>Oczywiście tytułowy lis wcale nie jest zły. Co więcej, ma strasznego pecha. Każda wyprawa do kurnika zakończona jest ogromnym niepowodzeniem. Wszyscy się z niego śmieją, a najbardziej kury! Nie mogąc znieść dalszego upokorzenia daje się namówić wilkowi na genialny plan. Czy trzeba polować na kury? Pewnie, że nie! Lepiej jest ukraść jajka, a potem cierpliwie je wysiadywać, odchować pisklaki i już? posiłek gotowy! Niestety - to co brzmiało atrakcyjnie w teorii, w praktyce okazało się niemożliwe. A na dodatek wyjątkowo śmieszne! </p>
<p>"Wielki zły lis" to komiks, który stał się jednym z najpopularniejszych w ostatnich latach we Francji. Otrzymał on nagrodę dla najlepszego albumu dla dzieci na festiwalu w Angoul?me, a także doczekał się filmowej adaptacji, która została nagrodzona Cezarem - francuskim odpowiednikiem Oscara dla najlepszej animacji roku. Komiks potrafi rozbawić każdego malucha, starszaka i dorosłego, a lis, który wcale nie jest zły, rozczuli serce niejednego czytelnika. W końcu tak bardzo się stara o tym, aby w końcu najeść się do syta, a tu spotykają go same porażki!</p>',
                'details' => '<ul><li>Autor: Benjamin Renner</li>
<li>Wydawnictwo Kultura gniewu</li>
<li>Seria Krótkie gatki</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2018</li>
<li>Ilość stron: 162</li>
<li>Format: 16.5 x 23.5 cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788366128040</li>
<li>Język: polski</li>
<li>Tłumacz: Krzysztof Uliszewski</li>
<li>ISBN: 9788366128040</li>
<li>EAN: 9788366128040</li>
<li>Wymiary: 16.5x23.5 cm</li></ul>',
                'date' => new DateTime('18-01-2019'),
            ],

            //-----------------komiksy/manga-anime-----------------

            [
                'id_cat' => '002005',
                'id_author' => 33,
                'id_publishing' => 16,
                'img_href' => '/images/products/Pluto-006.jpg',
                'img_alt' => 'Pluto 006',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Pluto 006',
                'promotion_price' => 0.20,
                'price' => 0.79,
                'year_publication' => 2013,
                'description' => '<p>Jak może powstać największy sztuczny umysł?</p>
<p>Czy robot, którego tok rozumowania obejmuje wszystkie decyzje, jakie mógłby podjąć każdy człowiek na Ziemi, będzie faktycznie najwspanialszy?</p>
<p>Przy takim natłoku informacji można zarówno być geniuszem, jak i popaść w szaleństwo. W świecie przedstawionym w PLUTO roboty często przyjmują bardziej ludzkie postawy niż sami ludzie. To one przeżywają traumę powojenną, cierpią po utracie najbliższych, rzucają się w gniewie w wir walki albo wręcz przeciwnie – przyjmują pacyfistyczną postawę. Dzięki temu łatwiej jest nam zrozumieć, co znaczy być człowiekiem. Atom Żelaznoręki to jedno z nieśmiertelnych dzieł japońskiej sztuki komiksowej, stworzone przez nieodżałowanego mistrza Osamu Tezukę, którego zawsze podziwiałem.</p>
<p>Dzieło porywa pokolenia czytelników od momentu powstania w 1950 roku do dziś.</p>',
                'details' => '<ul><li>Tytuł: Pluto 6</li>
<li>Autorzy: Tezuka Osamu, Urasawa Naoki</li>
<li>Wydawnictwo Hanami</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2013</li>
<li>Ilość stron: 200</li>
<li>Format: 15.0x21.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 57402402243KS</li>
<li>Język: polski</li>
<li>Tłumacz: Bolałek Radosław</li>
<li>ISBN: 9788360740699</li>
<li>EAN: 9788360740699</li>
<li>Wymiary: 15.0x21.0x1.3 cm</li></ul>',
                'date' => new DateTime('25-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 34,
                'id_publishing' => 15,
                'img_href' => '/images/products/Boruto.jpg',
                'img_alt' => 'Boruto',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Boruto',
                'promotion_price' => 0.20,
                'price' => 0.35,
                'year_publication' => 2018,
                'description' => '<p>Manga przygodowa. Wiele lat upłynęło od Wielkiej Wojny Shinobi. Dla Osady Ukrytej w Liściach nastała era pokoju. Boruto, syn Siódmego Hokage, prowadzi nudne i monotonne życie w cieniu wielkiego ojca. Jeszcze nie zdaje sobie sprawy, jak wielka katastrofa zbliża się ku Osadzie...</p>',
                'details' => '<ul><li>Autor: Masashi Kishimoto</li>
<li>Wydawnictwo Jp Fantastica</li>
<li>Seria boruto</li>
<li>Oprawa: Miękka</li>
<li>Ilość stron: 200</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788374716482</li>
<li>ISBN: 9788374716482</li>
<li>EAN: 9788374716482</li></ul>',
                'date' => new DateTime('26-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 35,
                'id_publishing' => 16,
                'img_href' => '/images/products/Balsamista.jpg',
                'img_alt' => 'Balsamista',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Balsamista',
                'promotion_price' => 0.20,
                'price' => 0.59,
                'year_publication' => 2015,
                'description' => '<p>Balsamista to opowieść o śmierci, a raczej o tym, co czują ludzie, kiedy odchodzi ktoś bliski. Smutek, żal, rozgoryczenie. Te bolesne doświadczenia ciężko jest opisać. Balsamowanie zwłok daje żyjącym możliwość pożegnania się i pomaga w zachowaniu jak najlepszych wspomnień o zmarłym.Dla Mamiya Shinjir bycie balsamistą to coś więcej niż praca. Wdzięczność rodzin zmarłych i poczucie robienia czegoś ważnego to pozytywne strony tego zawodu. Jednakże jest jeszcze aspekt negatywny wynikający z codziennego obcowania ze śmiercią...W 2007 roku na podstawie komiksu Balsamista powstał serial telewizyjny, który wyemitowała telewizja TV Tky.</p>',
                'details' => '<ul><li>Autor: Mihara Mitsukazu</li>
<li>Wydawnictwo Hanami</li>
<li>Seria Balsamista</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 176</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788360740972</li>
<li>Język: polski</li>
<li>ISBN: 9788360740972</li>
<li>EAN: 9788360740972</li>
<li>Wymiary: 15.0x21.0x1.5 cm</li></ul>',
                'date' => new DateTime('24-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 36,
                'id_publishing' => 16,
                'img_href' => '/images/products/Zoo-zima.jpg',
                'img_alt' => 'Zoo zimą',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zoo zimą',
                'promotion_price' => 0.20,
                'price' => 0.45,
                'year_publication' => 2009,
                'description' => '<p>Rok 1996. Hamaguchi, młody chłopak, przyjeżdża do Kioto, gdzie zatrudnia się w niewielkim zakładzie tekstylnym. Wolne chwile spędza z dala od kolegów z firmy ? rysując zwierzęta w zoo. Jednak jego w miarę ułożone życie zakłóca nieposłuszna córka właściciela zakładu. Co więcej, praca nie przynosi mu zadowolenia, więc gdy znajomy z Tokio mówi mu o wakacie na pewnym stanowisku, Hamaguchi rzuca wszystko i wyjeżdża do stolicy. Tam poznaje fach twórcy komiksowego i światek bohemy. Jiro Taniguchi ? urodził się w 1947 roku w prefekturze Tottori w Japonii. Zadebiutował w 1971 roku w magazynie Young Comic. Dwa lata później otrzymał nagrodę Big Comic za nowelę graficzną Toi koe (Odległy głos). Kolejne dzieła przyniosły mu coraz większy rozgłos i liczne wyróżnienia. W 1997 roku razem z Jeanem ?Moebiusem? Giraud (którego spotkał po raz pierwszy w 1974) tworzy Ikare (Ikar), komiks uważany za jedną z najważniejszych (o ile nie najważniejszą) koprodukcji europejsko-japońskich. Do początku XXI wieku zdobył lub był nominowany do niemalże wszystkich światowych nagród (Shogakkan Manga Sho, Nihon Mangaka Kyokai Sho, Alph`Art - Festival d`Angouleme, Eisner Award itd.). Taniguchi tworzy komiksy o różnorodnej tematyce, jednakże najczęściej przewijającymi się wątkami są natura i życie codzienne Japończyków. W 2009 roku Jiro Taniguchi otrzymał kolejną nominację do Eisner Award tym razem za komiks Sosakusha (Ratownik). Patronat medialny: Gildia.pl, Granice.pl, Poltergeist, Valkiria, Wirtualna Polska, Wywrota.</p>',
                'details' => '<ul><li>Tytuł: Zoo zimą</li>
<li>Autor: Taniguchi Jiro</li>
<li>Wydawnictwo Hanami</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2009</li>
<li>Ilość stron: 236</li>
<li>Format: 15.0x21.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 48740502243KS</li>
<li>Język: polski</li>
<li>Podtytuł: Komiks dla dorosłych</li>
<li>Oryginalny tytuł: Fuyu no d?butsuen</li>
<li>Tłumacz: Bolałek Radosław</li>
<li>ISBN: 9788360740255</li>
<li>EAN: 9788360740255</li>
<li>Wymiary: 15.0x21.0x1.4 cm</li></ul>',
                'date' => new DateTime('25-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 37,
                'id_publishing' => 16,
                'img_href' => '/images/products/Ikigami-6.jpg',
                'img_alt' => 'Ikigami 6',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Ikigami 6',
                'promotion_price' => 0.20,
                'price' => 0.37,
                'year_publication' => 2008,
                'description' => '<p>Decyzja czy donieść na osobę, z którą się jest blisko nie jest łatwa. Ale dla Fujimoto nadszedł czas opowiedzenia się po jednej ze stron. A może tylko jest sprawdzany i wszyscy w jego otoczeniu są głęboko związani z Roz-Krajem? Przemoc jakiej doświadczył do tej pory podczas wykonywania swojej pracy to dopiero początek. Powoli dochodzi do niego, że jest ucieleśnieniem nienawiści, jaką ludzie darzą system. IKIGAMI to bestsellerowa seria, która w Japonii sprzedała się już w ponad 3 milionach egzemplarzy. Komiks zdobył liczne nagrody i wyróżnienia (między innymi na festiwalach: Utopiales, Festival International de la Bande Dessinée d\'Angoul?me, Polymanga, Japan Expo czy Le Festival du Voyageur). W 2010 roku w Polsce seria uzyskała nominacje w większości plebiscytów komiksowych.</p>
<p></p>Motor? Mase urodził się w 1969 roku w prefekturze Aichi. W 1998 roku za komiks AREA otrzymał główną nagrodę dla debiutantów w konkursie organizowanym przez czołowe japońskie wydawnictwo Sh?gakukan. W 2005 rozpoczął pracę nad serią IKIGAMI, która, oprócz światowego uznania, przyniosła mu w 2010 nominację do prestiżowej nagrody Fauve d`Or (nagroda dla najlepszego albumu) na Międzynarodowym Festiwalu Komiksu w Angoul?me. Komiks doczekał się również filmowej adaptacji.</p>',
                'details' => '<ul><li>Tytuł: Ikigami 6</li>
<li>Autor: Mase Motoro</li>
<li>Wydawnictwo Hanami</li>
<li>Seria Ikigami</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2008</li>
<li>Ilość stron: 232</li>
<li>Format: 14.5x21.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788360740675</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: IKIGAMI</li>
<li>Tłumacz: Bolałek Radosław</li>
<li>ISBN: 9788360740675</li>
<li>EAN: 9788360740675</li>
<li>Wymiary: 14.5x21.0x1.5 cm</li></ul>',
                'date' => new DateTime('28-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 38,
                'id_publishing' => 16,
                'img_href' => '/images/products/Mushishi-3.jpg',
                'img_alt' => 'Mushishi 3',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Mushishi 3',
                'promotion_price' => 0.20,
                'price' => 0.55,
                'year_publication' => 2015,
                'description' => '<p>Mushi to byty, które mogą przybierać różne formy. Często sprowadzają choroby, cierpienie. Ale czy to ich wina? Czy trzeba je wytępić? Dla wielu mushishi, badaczy mushi, odpowiedź jest oczywista. Jednak nie dla Ginko. On stara się ich nie osądzać i nie tępić za wszelką cenę.Yuki Urushibara - urodzona 29.01.1974 w prefekturze Yamaguchi. Najbardziej znana ze swojego dzieła Mushishi za które otrzymała między innymi Nagrodę Kdansha Manga oraz grand prix Japan Media Arts Festival.</p>',
                'details' => '<ul><li>Autor: Urushibara Yuki</li>
<li>Wydawnictwo Hanami</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 242</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788360740941</li>
<li>Język: polski</li>
<li>ISBN: 9788360740941</li>
<li>EAN: 9788360740941</li>
<li>Wymiary: 15.0x21.0x1.5 cm</li></ul>',
                'date' => new DateTime('29-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 33,
                'id_publishing' => 16,
                'img_href' => '/images/products/Monster-6.jpg',
                'img_alt' => 'Monster 6',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Monster 6',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2015,
                'description' => '<p>Stara kamienica w śródmieściu Pragi z szyldem z trzema żabami... Dziesięć lat temu żyła tam kobieta z bliźniakami. Tenma usłyszał o tym od sąsiadów. Opowiadają też mu o siedzibie tajnej czechosłowackiej policji oraz o tajemniczym pożarze. Czy tymi bliźniakami mogą być Johan i Anna? W tym samym czasie Suk, młody detektyw praskiej policji, przyciąga uwagę pięknej dziewczyny z baru. Ona ma na imię Anna! Kiedy Tenma i Suk się spotkają, będą musieli zmierzyć się z jeszcze większym terrorem!!!Detektyw BKA, Lunge, jest już przekonany o udziale Johana w seryjnych morderstwach. Przybywa do Pragi, aby odkryć, czym naprawdę jest Johan i dowiedzieć się, że „Bezimienny potwór”, niesamowity picture book, który miał duży wpływ w dzieciństwie na Johana, został napisany przez agenta czechosłowackiej tajnej policji Lunge odnajduje „Dom czerwonej róży”, gdzie autor tworzył. Za cienką ścianą odkrywa stare drzwi. A za nimi czai się prawdziwy horror!Naoki Urasawa urodził się w 1960 w Tokio. Sławę przyniosła mu seria YAWARA! - opowieść o dziewczynie uprawiającej judo. Obecnie jest jednym z najbardziej rozpoznawalnych japońskich twórców komiksowych. Na Zachodzie znany głównie z ostatnich dzieł – MONSTER, 20th Century Boys i PLUTO. Otrzymał wiele nagród i nominacji, w tym jako jedyny twórca zdobył dwukrotnie Tezuka Osamu Sh. Wśród swoich inspiracji wymienia prace Katsushiro Otomo (autora Akiry).</p>',
                'details' => '<ul><li>Autor: Urasawa Naoki</li>
<li>Wydawnictwo Hanami</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2015</li>
<li>Ilość stron: 404</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788360740934</li>
<li>Język: polski</li>
<li>ISBN: 9788360740934</li>
<li>EAN: 9788360740934</li>
<li>Wymiary: 14.5x21.0x3 cm</li></ul>',
                'date' => new DateTime('26-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 39,
                'id_publishing' => 16,
                'img_href' => '/images/products/Suppli-10.jpg',
                'img_alt' => 'Suppli 10',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Suppli 10',
                'promotion_price' => 0.20,
                'price' => 0.38,
                'year_publication' => 2010,
                'description' => '<p>Wszystko się zmienia. Praca, ludzie, otoczenie, życie. Kolejny rok w agencji reklamowej nie jest taki sam jak poprzedni. Watanabe bierze ślub, Fujii jak zwykle zapracowuje się do granic możliwości, a Yugi i Koetsu tkwią w emocjonalnym letargu. Przed Saharą – zdolnym kamerzystą i fotografem pojawiają się nowe, ciekawe możliwości rozwoju kariery zawodowej. Możliwości, które wymagają przewartościowania dotychczasowego życia. Mężczyzna będzie musiał wybrać, co jest dla niego ważniejsze – spełnienie zawodowe czy uczucie do Fujii.</p>
<p>Mari Okazaki – urodzona w 1967 roku w Nagano. Ukończyła Tama Art University w Tokio. Po zakończeniu studiów do 2000 roku pracowała na pełen etat w agencji reklamowej Hakuhodo (druga co do wielkości agencja reklamowa w Japonii). Od 2000 roku zawodowo zajmuje się rysowaniem komiksów. </p>',
                'details' => '<ul><li>Tytuł: Suppli 10</li>
<li>Autor: Okazaki Mari</li>
<li>Wydawnictwo Hanami</li>
<li>Seria Suppli</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2010</li>
<li>Ilość stron: 224</li>
<li>Format: 15.0x21.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 52319202243KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Suppli 10</li>
<li>Tłumacz: Tomaszewska-Bolałek Magdalena</li>
<li>ISBN: 9788360740583</li>
<li>EAN: 9788360740583</li>
<li>Wymiary: 15.0x21.0x1.5 cm</li></ul>',
                'date' => new DateTime('02-01-2019'),
            ],
            [
                'id_cat' => '002005',
                'id_author' => 37,
                'id_publishing' => 16,
                'img_href' => '/images/products/Ikigami-3.jpg',
                'img_alt' => 'Ikigami 3',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Ikigami 3',
                'promotion_price' => 0.20,
                'price' => 0.38,
                'year_publication' => 2010,
                'description' => '<p>Fujimoto nie jest zwykłym urzędnikiem. Jego wizyta oznacza dla domowników jedno – wyznaczona osoba umrze za 24 godziny. Jest on doręczycielem, przynoszącym zawiadomienia o śmierci, zwanym potocznie „Ikigami”. Czy taką pracę należy wykonywać z pełnym zaangażowaniem emocjonalnym? A może doręczyciel powinien odciąć się od tego co robi, traktując swoje zajęcie jak każde inne – czasami nawet odpuszczając i nie przykładając się za bardzo?</p>
<p>Seria wygrała w 2010 roku „Japan Expo Awards” w kategorii seinen (dla dorosłych).</p>
<p>Motoro Mase urodził się w 1969 roku w prefekturze Aichi. W 1998 roku za komiks AREA otrzymał główną nagrodę dla debiutantów w konkursie organizowanym przez czołowe japońskie wydawnictwo Shogakukan. W 2005 rozpoczął pracę nad serią Ikigami, która, oprócz światowego uznania, przyniosła mu w 2010 nominację do prestiżowej nagrody Fauve d`Or (nagroda dla najlepszego albumu) na Międzynarodowym Festiwalu Komiksu w Angouleme. Komiks doczekał się również filmowej adaptacji.</p>',
                'details' => '<ul><li>Tytuł: Ikigami 3</li>
<li>Autor: Mase Motoro</li>
<li>Wydawnictwo Hanami</li>
<li>Seria Ikigami</li>
<li>Oprawa: Miękka</li>
<li>Rok wydania: 2010</li>
<li>Ilość stron: 216</li>
<li>Format: 15.0x21.0cm</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 52319102243KS</li>
<li>Język: polski</li>
<li>Oryginalny tytuł: Ikigami 3</li>
<li>Tłumacz: Bolałek Radosław</li>
<li>ISBN: 9788360740477</li>
<li>EAN: 9788360740477</li>
<li>Wymiary: 15.0x21.0x1.5 cm</li></ul>',
                'date' => new DateTime('07-01-2019'),
            ],

            //-----------------audiobooki/nauka-jezykow-----------------

            [
                'id_cat' => '003001',
                'id_author' => 40,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-angielski-Konwersacje.jpg',
                'img_alt' => 'FISZKI - j. angielski - Konwersacje',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. angielski - Konwersacje',
                'promotion_price' => 0.20,
                'price' => 0.22,
                'year_publication' => 2012,
                'description' => '<p>Poziom: A2-B2, intermediate (średnio zaawansowany)</p>
<p>Znajomość języka czasem nie wystarcza, aby mówić. trzeba w sobie przełamać tę barierę i ośmielić się by móc zacząć rozmawiać. Audiobook z dialogami jest przeznsczony głównie dla osób, które opanowały już gramatykę angielską i mają więcej niż podstawowy zasób słów, rozumieją artykuły i obszerne teksty w języku angielskim, ale cały czas mają opór pred tym, aby się porozumiewać. Ćwiczenia wymowy na audiobooku skutecznie zredukują te obawy. Konwersacje są prowadzone przez rodowitych Brytyjczyków, którzy poprzez ćwiczenia oswajają uczących się z oryginalną wymową. Zajęcia są interaktywne, będziemy mówić płynnie, spontanicznie i bez kompleksów.</p>
<p>85 minut nagrań native speakerów z dużym naciskiem na poprawną brytyjską wymowę<br/>
(angielska lektorka - Caroline Lebek - czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że - używając opanowanych dzięki FISZKOM słówek i zwrotów - zostaną Państwo prawidłowo zrozumiani)<br/>
ponad 700 słów z przykładami użycia umożliwiającymi naukę w kontekście<br/>
starannie dobrane słownictwo zostało usystematyzowane w 13 kategoriach tematycznych, które pozwalają na zapoznanie się z językiem zarówno rozmów towarzyskich, jak i biznesowych.<br/>
(w obrębie każdej kategorii nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek staje się łatwiejsze)<br/>
tekst nagrano w systemie: hasło polskie - hasło angielskie - przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy<br/>
rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu dużej liczby słów i zwrotów, to jest to kurs właśnie dla Państwa!</p>',
                'details' => '<ul><li>Autorzy: Joanna Leman, Patrycja Wojsyk</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 1:25:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_5E28F1EDAB</li>
<li>Język: angielski</li>
<li>ISBN: 9788362937943</li></ul>',
                'date' => new DateTime('05-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 40,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-angielski-Matura-ustna.jpg',
                'img_alt' => 'FISZKI - j. angielski - Matura ustna',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. angielski - Matura ustna',
                'promotion_price' => 0.20,
                'price' => 0.25,
                'year_publication' => 2011,
                'description' => '<p>FISZKI audio – język angielski – Matura ustna.</p>
<p>Poziom: B1/B2, intermediate (średnio zaawansowany).</p>
<p>Doskonały sposób na przygotowanie do matury ustnej z języka angielskiego. Proste zasady, wyraźne nagrania oraz możliwość podglądu tekstu na ekranie odtwarzacza to klucz do szybkiej i skutecznej nauki.</p>
<p>90 minut nagrań native speakerów z dużym naciskiem na poprawną brytyjską wymowę (angielska lektorka – Caroline Lebek – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 700 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 12 wymaganych na egzaminie maturalnym zagadnieniach, co zagwarantuje optymalne przygotowanie (w obrębie każdej kategorii nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło angielskie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy; rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni; kurs kompatybilny z tytułem książkowym FISZKI – język angielski – Matura ustna.</p>
<p>Jeśli zależy Państwu na solidnym i skutecznym przygotowaniu do egzaminu ustnego, to jest to kurs właśnie dla Państwa! Tytuł dodaje pewności siebie i gwarantuje lepszy wynik.</p>',
                'details' => '<ul><li>Autor: Patrycja Wojsyk</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2011</li>
<li>Czas trwania: 1:25:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_5DC3BAEFAB</li>
<li>Język: angielski</li>
<li>Seria Fiszki</li>
<li>ISBN: 9788362937288</li></ul>',
                'date' => new DateTime('07-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 40,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-japonski-Starter.jpg',
                'img_alt' => 'FISZKI - j. japoński - Starter',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. japoński - Starter',
                'promotion_price' => 0.20,
                'price' => 0.27,
                'year_publication' => 2011,
                'description' => '<p>FISZKI audio – język japoński – Starter.</p>
<p>Poziom: dla absolutnie początkujących.</p>
<p>Doskonały sposób na rozpoczęcie przygody z językiem japońskim. Proste zasady, wyraźne nagrania oraz możliwość podglądu tekstu na ekranie odtwarzacza to klucz do szybkiej i skutecznej nauki.</p>
<p>75 minut nagrań native speakerów z dużym naciskiem na poprawną japońską wymowę (japońska lektorka – Akiko Yuji – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 500 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 13 jednostkach lekcyjnych, które zagwarantują Państwu płynne wprowadzenie w świat języka obcego (w obrębie każdej jednostki nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek i podstawowych reguł gramatycznych staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło japońskie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy; rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni; kurs kompatybilny z tytułem książkowym FISZKI – język japoński – Starter.</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu podstaw języka japońskiego, to jest to tytuł właśnie dla Państwa! Gwarantujemy że po tym kursie wzrośnie Państwa apetyt na dalszą naukę.</p>',
                'details' => '<ul><li>Autor: Patrycja Wojsyk</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2011</li>
<li>Czas trwania: 1:10:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_110AEBA8AB</li>
<li>Język: japoński</li>
<li>Seria Fiszki</li>
<li>ISBN: 9788362937509</li></ul>',
                'date' => new DateTime('08-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 41,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-hiszpanski-Konwersacje.jpg',
                'img_alt' => 'FISZKI - j. hiszpański - Konwersacje',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. hiszpański - Konwersacje',
                'promotion_price' => 0.20,
                'price' => 0.29,
                'year_publication' => 2012,
                'description' => '<p>FISZKI audio – język hiszpański – Konwersacje.</p>
<p>Poziom: A2-B2, intermedio (średnio zaawansowany).</p>
<p>Tytuł powstał z myślą o osobach, które mimo, że uczą się języka hiszpańskiego już od jakiegoś czasu, wciąż boją się mówić w tym języku. Dzięki niemu każdy będzie w stanie przełamać barierę i zacząć mówić - płynnie, spontanicznie i bez kompleksów.</p>
<p>80 minut nagrań native speakerów z dużym naciskiem na poprawną hiszpańską wymowę (hiszpańska lektorka – Susana Alegre Raso – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 700 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 13 kategoriach tematycznych, które pozwalają na zapoznanie się z językiem zarówno rozmów towarzyskich, jak i biznesowych (w obrębie każdej kategorii nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło hiszpańskie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy; rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni.</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu dużej liczby słów i zwrotów, to jest to kurs właśnie dla Państwa!</p>',
                'details' => '<ul><li>Tytuł: FISZKI audio - j. hiszpański - Konwersacje</li>
<li>Autorzy: Kinga Perczyńska, Magdalena Kaczorowska</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 1:20:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_81959E51AB</li>
<li>Język: hiszpański</li>
<li>ISBN: 9788378430230</li></ul>',
                'date' => new DateTime('09-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 41,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-rosyjski-Slownictwo-1.jpg',
                'img_alt' => 'FISZKI - j. rosyjski - Słownictwo 1',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. rosyjski - Słownictwo 1',
                'promotion_price' => 0.20,
                'price' => 0.45,
                'year_publication' => 2012,
                'description' => '<p>FISZKI audio – język rosyjski – Słownictwo 1.</p>
<p>Poziom: A1 (podstawowy).</p>
<p>FISZKI – kultowy już produkt WYDAWNICTWA CZTERY GŁOWY – doczekał się wersji audio. Proste zasady, wyraźne nagrania oraz możliwość podglądu tekstu na ekranie odtwarzacza to klucz do szybkiej i skutecznej nauki.</p>
<p>280 minut nagrań native speakerów z dużym naciskiem na poprawną rosyjską wymowę (rosyjska lektorka – Żanna Sładkiewicz – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 2400 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 50 kategoriach tematycznych, które wyczerpująco ujmują zjawiska związane z człowiekiem i jego otoczeniem (w obrębie każdej kategorii nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło rosyjskie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy.</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu dużej liczby słów i zwrotów, to jest to kurs właśnie dla Państwa!</p>',
                'details' => '<ul><li>Tytuł: FISZKI audio - j. rosyjski - Słownictwo 1</li>
<li>Autor: Kinga Perczyńska</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 4:40:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_95E25F3CAB</li>
<li>Język: polski</li>
<li>ISBN: 9788362937820</li></ul>',
                'date' => new DateTime('12-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 41,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-norweski-Starter.jpg',
                'img_alt' => 'FISZKI - j. norweski - Starter',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. norweski - Starter',
                'promotion_price' => 0.20,
                'price' => 0.39,
                'year_publication' => 2011,
                'description' => '<p>FISZKI audio – język norweski – Starter.</p>
<p>Poziom: dla absolutnie początkujących.</p>
<p>Doskonały sposób na rozpoczęcie przygody z językiem norweskim. Proste zasady, wyraźne nagrania oraz możliwość podglądu tekstu na ekranie odtwarzacza to klucz do szybkiej i skutecznej nauki.</p>
<p>95 minut nagrań native speakerów z dużym naciskiem na poprawną norweską wymowę (norweski lektor – Piotr Rossa – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 500 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 14 jednostkach lekcyjnych, które zagwarantują Państwu płynne wprowadzenie w świat języka obcego (w obrębie każdej jednostki nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek i podstawowych reguł gramatycznych staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło norweskie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy; rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni; kurs kompatybilny z tytułem książkowym FISZKI – język norweski – Starter.</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu podstaw języka norweskiego, to jest to tytuł właśnie dla Państwa! Gwarantujemy że po tym kursie wzrośnie Państwa apetyt na dalszą naukę.</p>',
                'details' => '<ul><li>Tytuł: FISZKI audio - j. norweski - Starter</li>
<li>Autor: Kinga Perczyńska</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2011</li>
<li>Czas trwania: 1:35:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_05F78108AB</li>
<li>Język: norweski</li>
<li>Seria Fiszki</li>
<li>ISBN: 9788362937530</li></ul>',
                'date' => new DateTime('13-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 41,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-niemiecki-Starter.jpg',
                'img_alt' => 'FISZKI - j. niemiecki - Starter',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. niemiecki - Starter',
                'promotion_price' => 0.20,
                'price' => 0.39,
                'year_publication' => 2011,
                'description' => '<p>FISZKI audio – język niemiecki – Starter.</p>
<p>Poziom: dla absolutnie początkujących.</p>
<p>Doskonały sposób na rozpoczęcie przygody z językiem niemieckim. Proste zasady, wyraźne nagrania oraz możliwość podglądu tekstu na ekranie odtwarzacza to klucz do szybkiej i skutecznej nauki.</p>
<p>85 minut nagrań native speakerów z dużym naciskiem na poprawną niemiecką wymowę (niemiecka lektorka – Hanna Skrobol – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 500 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 14 jednostkach lekcyjnych, które zagwarantują Państwu płynne wprowadzenie w świat języka obcego (w obrębie każdej jednostki nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek i podstawowych reguł gramatycznych staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło niemieckie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy; rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni; kurs kompatybilny z tytułem książkowym FISZKI – język niemiecki – Starter.</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu podstaw języka niemieckiego, to jest to tytuł właśnie dla Państwa! Gwarantujemy że po tym kursie wzrośnie Państwa apetyt na dalszą naukę.</p>',
                'details' => '<ul><li>Tytuł: FISZKI audio - j. niemiecki - Starter</li>
<li>Autor: Kinga Perczyńska</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2011</li>
<li>Czas trwania: 1:30:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_38EE0F1AAB</li>
<li>Język: niemiecki</li>
<li>Seria Fiszki</li>
<li>ISBN: 9788362937295</li></ul>',
                'date' => new DateTime('14-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 41,
                'id_publishing' => 17,
                'img_href' => '/images/products/FISZKI-j-niemiecki-Slownictwo-3.jpg',
                'img_alt' => 'FISZKI - j. niemiecki - Słownictwo 3',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'FISZKI - j. niemiecki - Słownictwo 3',
                'promotion_price' => 0.20,
                'price' => 0.42,
                'year_publication' => 2011,
                'description' => '<p>FISZKI audio – język niemiecki – Słownictwo 3.</p>
<p>Poziom: B1, Mittelstufe (średnio zaawansowany).</p>
<p>FISZKI – kultowy już produkt WYDAWNICTWA CZTERY GŁOWY – doczekał się wersji audio. Proste zasady, wyraźne nagrania oraz możliwość podglądu tekstu na ekranie odtwarzacza to klucz do szybkiej i skutecznej nauki.</p>
<p>260 minut nagrań native speakerów z dużym naciskiem na poprawną niemiecką wymowę (niemiecka lektorka – Claudia Schneider – czyta hasła starannie, dbając o ich właściwą artykulację i intonację; dzięki temu zyskują Państwo pewność, że – używając opanowanych dzięki FISZKOM słówek i zwrotów – zostaną Państwo prawidłowo zrozumiani); ponad 2400 słów z przykładami użycia umożliwiającymi naukę w kontekście; starannie dobrane słownictwo zostało usystematyzowane w 50 kategoriach tematycznych, które wyczerpująco ujmują zjawiska związane z człowiekiem i jego otoczeniem (w obrębie każdej kategorii nagrania ułożone są tak, by hasła tworzyły logiczny ciąg skojarzeń; dzięki tym zabiegom przyswajanie słówek staje się łatwiejsze); tekst nagrano w systemie: hasło polskie – hasło niemieckie – przerwa na głośne powtórzenie; to zdecydowanie najskuteczniejszy sposób na zapamiętywanie i naukę poprawnej wymowy; rewelacyjna funkcja SPELL wyświetla hasła główne na ekranie odtwarzacza lub telefonu, co umożliwia bezbłędne opanowanie pisowni; kurs kompatybilny z tytułem książkowym FISZKI – język niemiecki – Słownictwo 3.</p>
<p>Jeśli zależy Państwu na szybkim i skutecznym opanowaniu dużej liczby słów i zwrotów, to jest to kurs właśnie dla Państwa!</p>',
                'details' => '<ul><li>Tytuł: FISZKI audio - j. niemiecki - Słownictwo 3</li>
<li>Autor: Kinga Perczyńska</li>
<li>Wydawnictwo Cztery Głowy</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2011</li>
<li>Czas trwania: 4:20:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_23463296AB</li>
<li>Język: niemiecki</li>
<li>Seria Fiszki</li>
<li>ISBN: 9788362937325</li></ul>',
                'date' => new DateTime('15-01-2019'),
            ],
            [
                'id_cat' => '003001',
                'id_author' => 42,
                'id_publishing' => 18,
                'img_href' => '/images/products/Angielski-Matura-ustna-Trening-wypowiedzi.jpg',
                'img_alt' => 'Angielski. Matura ustna. Trening wypowiedzi',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Angielski. Matura ustna. Trening wypowiedzi',
                'promotion_price' => 0.20,
                'price' => 0.59,
                'year_publication' => 2014,
                'description' => '<p>Trening czyni mistrza!" Kurs Matura ustna. </p>
<p>Jeśli ćwiczysz dużo, umiesz lepiej. Bez systematycznego treningu nie ma wyników, wie o tym każdy sportowiec, a także każdy nauczyciel. Trzeba powtarzać systematycznie zakres słownictwa, formy wypowiedzi, aby efektywnie przygotować się do matury. Z kursem na mp3 wszelkie powtórki do egzaminów są łatwiejsze i przyjemniejsze. Kurs systematyzuje wiedzę. Przypomina najważniejsze zwroty konwersacyjne niezbędne do tworzenia wypowiedzi w zadaniach egzaminacyjnych, zawiera ćwiczenia jak wyczerpująco odpowiadać na pytania egzaminatora i poprawnie wykonać wszystkie zadania na maturze ustnej.</p>
<p>Aby nabrać pewności w mówieniu, słuchaj i powtarzaj gotowe zwroty przydatne w rozmowie. Próbuj płynnie reagować na polecenia egzaminatora: wyrażać opinie, wątpliwości czy preferencje, sugerować, relacjonować wydarzenia, opisywać ilustrację, dokonywać wyboru. Określonych zwrotów należy nauczyć się na pamięć, to zdecydowanie podnosi pewność siebie, gdy reagujesz od razu na postawione pytanie. W ćwiczeniach oznaczonych jako Trening wypowiedzi wykonujesz polecenia lektora i samodzielnie tworzysz wypowiedzi. Przy każdej instrukcji jest podawana przykładową odpowiedź, dzięki czemu od razu sprawdzisz swoje umiejętności.</p>
<p>W kursie mp3 znajdziesz wszystkie zwroty nagrane z tłumaczeniami, polecenia egzaminatora oraz wzory odpowiedzi. W pliku PDF znajduje się pełny tekst kursu, zadania egzaminacyjne z odpowiedziami oraz ilustracje i zdjęcia. Dodatkowo w części Strategie egzaminacyjne zapoznasz się z praktycznymi radami, jak prawidłowo udzielać odpowiedzi podczas egzaminu, na co zwrócić uwagę w konkretnych zadaniach oraz o czym musisz pamiętać, aby twoja odpowiedź została dobrze oceniona przez egzaminatora.</p>
<p>Chcąc zrobić powtórkę do egzaminu skorzystaj z kursu Angielski na mp3 Konwersacje do matury. Znajdują się tu tematy najczęściej występujące w zadaniach egzaminacyjnych; utrwalisz materiał przydatny zarówno na maturze.</p>
<p>Z naszymi kursami matura będzie łatwiejsza i bez stresu.</p>',
                'details' => '<ul><li>Tytuł: Angielski Matura ustna. Trening wypowiedzi</li>
<li>Autor: Dorota Guzik</li>
<li>Wydawnictwo DIM</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2014</li>
<li>Czas trwania: 1:14:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_904E5ACEAB</li>
<li>Język: angielski</li>
<li>ISBN: 9788363099848</li></ul>',
                'date' => new DateTime('16-01-2019'),
            ],

            //-----------------audiobooki/lektury-opracowania-----------------

            [
                'id_cat' => '003002',
                'id_author' => 44,
                'id_publishing' => 4,
                'img_href' => '/images/products/Tajemniczy-ogrod.jpg',
                'img_alt' => 'Tajemniczy ogród',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Tajemniczy ogród',
                'promotion_price' => 0.20,
                'price' => 0.11,
                'year_publication' => 2012,
                'description' => '<p>Do nagrania głosu użyczył Roman Felczyński.</p>
<p>Audiobooki prezentują lektury uwzględnione w programach nauczania szkół wszystkich typów i szczebli.</p>
<p>Książki zostały opracowane przez nauczycieli specjalistów zgodnie z obowiązującą podstawą programową.</p>',
                'details' => '<ul><li>Autor: Frances Hodgson Burnett</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 10:27:22</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_C99CA5D5AB</li>
<li>Język: polski</li>
<li>ISBN: 9788326505560</li></ul>',
                'date' => new DateTime('02-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 43,
                'id_publishing' => 4,
                'img_href' => '/images/products/W-pustyni-i-w-puszczy.jpg',
                'img_alt' => 'W pustyni i w puszczy',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'W pustyni i w puszczy',
                'promotion_price' => 0.20,
                'price' => 0.15,
                'year_publication' => 2012,
                'description' => '<p>Audiobooki prezentują lektury uwzględnione w programach nauczania szkół wszystkich typów i szczebli.
Książki zostały opracowane przez nauczycieli specjalistów zgodnie z obowiązującą podstawą programową.</p>',
                'details' => '<ul><li>Autor: Henryk Sienkiewicz</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 12:04:59</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_EB48E0D6AB</li>
<li>Język: polski</li>
<li>ISBN: 9788326505591</li></ul>',
                'date' => new DateTime('03-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 43,
                'id_publishing' => 4,
                'img_href' => '/images/products/Quo-Vadis.jpg',
                'img_alt' => 'Quo Vadis',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Quo Vadis',
                'promotion_price' => 0.20,
                'price' => 0.17,
                'year_publication' => 2012,
                'description' => '<p>Rozgrywająca się na tle starożytnego Rzymu i jego barwnej obyczajowości historia miłości pięknej barbarzynki, Ligii, i patrycjusza, Marka Winicjusza teraz w formie audiobooka. Rodzącym się uczuciom bohaterów stają na przeszkodzie społeczne podziały i dworskie intrygi, a także różniąca oboje młodych ludzi religia.</p>',
                'details' => '<ul><li>Autor: Henryk Sienkiewicz</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_D791A789AB</li></ul>',
                'date' => new DateTime('12-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 45,
                'id_publishing' => 4,
                'img_href' => '/images/products/Nad-Niemnem.jpg',
                'img_alt' => 'Nad Niemnem',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Nad Niemnem',
                'promotion_price' => 0.20,
                'price' => 0.20,
                'year_publication' => 2012,
                'description' => '<p>Do nagrania głosu użyczył Anna Januszewska.</p>
<p>Audiobook prezentuje uwzględnioną lekturę w programach nauczania szkół wszystkich typów i szczebli.</p>
<p>Lektura została opracowana przez nauczycieli specjalistów zgodnie z obowiązującą podstawą programową.</p>
<p>Nad Niemnem to najbardziej znana powieść Orzeszkowej. Prezentuje ona panoramiczny obraz polskiego społeczeństwa epoki popowstaniowej. Na jego tle, wśród bujnej nadniemeńskiej przyrody, rozgrywają się ludzkie dramaty. Benedykt Korczyński jest w konflikcie z sąsiadami, żoną i własnym synem, Justyna Orzelska coraz bardziej odczuwa pustkę swego życia, Teofil Różyc trwoni majątek, pogrążając się w narkotykowym nałogu, pani Andrzejowa przeżywa osobistą tragedię z powodu niewdzięcznego syna, Marta Korczyńska nie może pozbyć się demonów przeszłości... Całość jednak utrzymana jest w optymistycznym nastroju - i zmierza ku szczęśliwemu zakończeniu.</p>',
                'details' => '<ul><li>Autor: Eliza Orzeszkowa</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 24:44:44</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_7E1A4DFAAB</li>
<li>Język: polski</li>
<li>ISBN: 9788326505539</li></ul>',
                'date' => new DateTime('14-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 46,
                'id_publishing' => 4,
                'img_href' => '/images/products/Lalka.jpg',
                'img_alt' => 'Lalka',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lalka',
                'promotion_price' => 0.20,
                'price' => 0.22,
                'year_publication' => 2012,
                'description' => '<p>Do nagrania głosu użyczył Marek Konopczak.</p>
<p>Audiobook prezentuje uwzględnioną lekturę w programach nauczania szkół wszystkich typów i szczebli.</p>
<p>Lektura została opracowana przez nauczycieli specjalistów zgodnie z obowiązującą podstawą programową.</p>',
                'details' => '<ul><li>Autor: Bolesław Prus</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2012</li>
<li>Czas trwania: 37:02:56</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_02445384AB</li>
<li>Język: polski</li>
<li>ISBN: 9788326505515</li></ul>',
                'date' => new DateTime('15-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 45,
                'id_publishing' => 4,
                'img_href' => '/images/products/Nowele-i-opowiadania.jpg',
                'img_alt' => 'Nowele i opowiadania',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Nowele i opowiadania',
                'promotion_price' => 0.20,
                'price' => 0.25,
                'year_publication' => 2014,
                'description' => '<p>Do nagrania głosu użyczyła Krystyna Czubówna.</p>
<p>Opracowania prezentują lektury uwzględnione w programach nauczania szkół wszystkich typów i szczebli.</p>
<p>Książki zostały opracowane przez nauczycieli specjalistów zgodnie z obowiązującą podstawą programową.</p>
<p>Audiobook zawiera:<br/>
- biogram autora,<br/>
- streszczenie utworu,<br/>
- obszerne, wyczerpujące omówienie treści i problematyki,<br/>
- wnikliwe charakterystyki bohaterów,<br/>
- tematy i plany najczęściej pojawiających się wypracowań związanych z lekturą</p>',
                'details' => '<ul><li>Autor: Eliza Orzeszkowa</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Rodzaj pliku: mp3</li>
<li>Czas trwania: 02:45:00</li>
<li>Stan: płta CD</li>
<li>Model: @9788376235530_31</li>
<li>Język: Język polski</li>
<li>ISBN: 9788376235530</li></ul>',
                'date' => new DateTime('16-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 45,
                'id_publishing' => 4,
                'img_href' => '/images/products/Opowiadania-i-nowele.jpg',
                'img_alt' => 'Opowiadania i nowele',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Opowiadania i nowele',
                'promotion_price' => 0.20,
                'price' => 0.24,
                'year_publication' => 2012,
                'description' => '<p>Do nagrania głosu użyczyła Anna Dereszowska.</p>
<p>Audiobook prezentuje uwzględnioną lekturę w programach nauczania szkół wszystkich typów i szczebli.</p>
<p>Lektura została opracowana przez nauczycieli specjalistów zgodnie z obowiązującą podstawą programową.</p>
<p>Każda z nich zawiera:<br/>
- starannie przygotowany, opatrzony przypisami pełny tekst utworu,<br/>
- obszerne, wyczerpujące omówienie treści i problematyki,<br/>
- tematy i plany najczęściej pojawiających się wypracowań związanych z lekturą,</p>',
                'details' => '<ul><li>Autor: Eliza Orzeszkowa</li>
<li>Wydawnictwo Zielona Sowa</li>
<li>Rodzaj pliku: mp3</li>
<li>Czas trwania: 06:17:00</li>
<li>Stan: płyta CD</li>
<li>Model: @9788376235615_31</li>
<li>Język: Język polski</li>
<li>ISBN: 9788376235615</li></ul>',
                'date' => new DateTime('17-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 43,
                'id_publishing' => 19,
                'img_href' => '/images/products/Nowele-wybrane.jpg',
                'img_alt' => 'Nowele wybrane',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Nowele wybrane',
                'promotion_price' => 0.20,
                'price' => 0.17,
                'year_publication' => 2007,
                'description' => '<p>Audiobook z powieścią o wątkach autobiograficznych</p>
<p>Autor opisuje swoją karierę jako pilota myśliwca i walkach na froncie zachodnim i afrykańskim podczas II wojny światowej. Audiobook idealny dla pasjonatów lotnictwa, dla czytelnika poszukującego wiarygodnej i realistycznej powieści wojenno-obyczajowej. Precyzyjny opis podniebnych zmagań i walk w pustynnym ukropie. Lądowanie ze spadochronem nad okupowaną Holandią oznacza dla pilota niewolę...</p>',
                'details' => '<ul><li>Autor: Henryk Sienkiewicz</li>
<li>Wydawnictwo Heraclon</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2007</li>
<li>Czas trwania: 15:26:00</li>
<li>Stan: płyta CD</li>
<li>Model: @DL_3E9982F9AB</li>
<li>Język: polski</li>
<li>ISBN: 9788362121816</li></ul>',
                'date' => new DateTime('14-01-2019'),
            ],
            [
                'id_cat' => '003002',
                'id_author' => 43,
                'id_publishing' => 19,
                'img_href' => '/images/products/Stary-sluga-Hania-Selim-Mirza.jpg',
                'img_alt' => 'Stary sługa Hania Selim Mirza',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Stary sługa Hania Selim Mirza',
                'promotion_price' => 0.20,
                'price' => 0.20,
                'year_publication' => 2018,
                'description' => '<p>Audiobook dla wielbicieli romansu, powieści batalistyczno-sensacyjno-przygodowej oraz talentu Henryka Sienkiewicza.</p>
<p>Niniejszy cykl nazwany „małą trylogią” składa się z trzech opowiadań:</p>
<p>STARY SŁUGA<br/>
Wzruszające i humorystyczne wspomnieniao starym słudze, barwnej postaci z czasów dzieciństwa Henryka. Anegdoty z udziałem kłótliwego i zrzędzącego, ale dobrodusznego i wiernego sługi. U schyłku życia, stary sługa Mikołaj powierza swoją ukochaną Hanię pod opiekę Henrykowi.</p>
<p>HANIA<br/>
Henryk odpowiedzialnie sprawuje opiekę nad Hanią, lecz pewnego dnia odkrywa, że ją pokochał. W tej samej dziewczynie zakochuje się również młody Tatar, Selim Mirza, najlepszy przyjaciel Henryka. Między przyjaciółmi dochodzi do ostrej rywalizacji.</p>
<p>SELIM MIRZA<br/>
Wybuch wojny francusko-pruskiej (1870-1871)zastaje Henryka i Selima w Paryżu. Przyjaciele rozważają czy zaciągnąć się do francuskiej armii, czy też wstąpićdo oddziału wolnych strzelców pod dowództwem sławnego La Rochenoire. Ryzykując życiem, wydostają się balonem z oblężonego Paryża. Pewnego dnia Selim ujawnia zaskoczonemu Henrykowi swoje prawdziwe plany.</p>',
                'details' => '<ul><li>Autor: Henryk Sienkiewicz</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Czas trwania: 9:02:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381461887</li>
<li>Język: polski</li>
<li>ISBN: 9788381461887</li></ul>',
                'date' => new DateTime('12-01-2019'),
            ],

            //-----------------audiobooki/fantastyka-----------------

            [
                'id_cat' => '003003',
                'id_author' => 47,
                'id_publishing' => 19,
                'img_href' => '/images/products/Star-Force-Szturm.jpg',
                'img_alt' => 'Star Force. Szturm',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Star Force. Szturm',
                'promotion_price' => 0.55,
                'price' => 0.79,
                'year_publication' => 2019,
                'description' => '<p>Siły Gwiezdne podejmują wyprawę do Układu Słonecznego, chcąc wyzwolić ludzkość spod okrutnej dyktatury imperatora Crowa. Zanosi się na wojnę domową na wielką skalę, jednak do gry wkraczają Niebiescy, a ich okręt nie przypomina niczego, z czym Riggs i jego ludzie zetknęli się do tej pory. Nowy rodzaj broni stworzyły też Siły Imperialne – niesamowite cyborgi okazują się niezwykle wymagającym przeciwnikiem. Pułkownik Riggs musi podjąć kilka trudnych decyzji, a jego oficerowie często mają odmienne zdanie.</p>
<p>Jak zakończy się ten trójstronny konflikt? Czy Siły Gwiezdne mają szansę przetrwać tę zawieruchę?</p>
<p>To już ósmy tom bestsellerowej serii B.V. Larsona, zwanego królem Amazona.</p>',
                'details' => '<ul><li>Autor: B. V. Larson</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Nośnik ilość: 1</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2019</li>
<li>Czas trwania: 9:53:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381463867</li>
<li>Język: polski</li>
<li>Seria Star force</li>
<li>ISBN: 9788381463867</li></ul>',
                'date' => new DateTime('19-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 49,
                'id_publishing' => 19,
                'img_href' => '/images/products/Eden.jpg',
                'img_alt' => 'Eden',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Eden',
                'promotion_price' => 0.20,
                'price' => 0.20,
                'year_publication' => 2016,
                'description' => '<p>Wspaniała literatura science fiction i to w najlepszym wydaniu. Stanisław Lem rozpoczął „Edenem” okres swojej tzw. dojrzałej twórczości. Niniejszy audiobook jest adaptacją powieści, która powstała u schyłku lat 50. XX wieku. Klimatem i tematem nawiązuje do twórczości Orwella, wizji społeczeństwa ograniczonego, żyjącego w systemie, funkcjonowania którego nie jest w stanie do końca pojąć, bo na końcu czyha śmiertelne niebezpieczeństwo.</p>
<p>Mimo że od powstania „Edenu” minie niedługo sześćdziesiąt lat, po tę opowieść wciąż sięga się z zainteresowaniem. To coś więcej niż historia pewnej planety.To opowieść, która trzyma w napięciu i odsłania się przed słuchaczami bardzo powoli. „Eden” jest historią pełną nadziei, ale i nieporozumień, które wynikają z faktu, że przybysze i tubylcy używają różnej technologii. Czy to może być przeszkoda w nawiązaniu współpracy? Cóż, w świecie stworzonym przez Lema to odpowiednik innego języka, a jak się w takim przypadku porozumieć?</p>
<p>Znakomita powieść, której w Lemotece nie mogło zabraknąć – polecamy ją w wersji audio w wykonaniu Jacka Rozenka.</p>',
                'details' => '<ul><li>Autor: Stanisław Lem</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2016</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379276004</li>
<li>Język: polski</li>
<li>Seria Lemoteka</li>
<li>ISBN: 9788379276004</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 49,
                'id_publishing' => 19,
                'img_href' => '/images/products/Solaris.jpg',
                'img_alt' => 'Solaris',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Solaris',
                'promotion_price' => 0.79,
                'price' => 0.99,
                'year_publication' => 2018,
                'description' => '<p>„Solaris” to najsłynniejsza powieść Lema, należąca do kanonu literatury XX wieku, przetłumaczona na ponad 40 języków i wydana w łącznym nakładzie kilkunastu milionów egzemplarzy. Pomimo dwóch nakręconych z rozmachem filmowych adaptacji „Solaris” pozostaje nieustannie odkrywane na nowo przez kolejne pokolenia. Przejmująca historia kontaktu z obcą inteligencją stanowi tło dla rozważań o ograniczeniach naszego umysłu i specyfice ludzkiego poznania. Dla jednych historia miłosna, dla innych traktat filozoficzny – arcydzieło Lema wymyka się wszelkim ostatecznym interpretacjom.</p>',
                'details' => '<ul><li>Autor: Stanisław Lem</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365864611</li>
<li>Język: polski</li>
<li>ISBN: 9788365864611</li></ul>',
                'date' => new DateTime('17-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 49,
                'id_publishing' => 19,
                'img_href' => '/images/products/Powrot-z-gwiazd.jpg',
                'img_alt' => 'Powrót z gwiazd',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Powrót z gwiazd',
                'promotion_price' => 0.20,
                'price' => 0.59,
                'year_publication' => 2017,
                'description' => '<p>"Powrót z gwiazd” w wersji audio, czyli kolejna odsłona Lemoteki.Tym razem do słuchaczy trafia historia Hala Bregga, kosmonauty, który wraca na Ziemię sto pięćdziesiąt lat po tym, jak wyruszył na wyprawę. Wszystko jest inne, czuje się więc, jakby odwiedzał obcą planetę. Ziemska cywilizacja odrzuciła konflikty, nie podejmuje już ryzyka, ceniąc nade wszystko bezpieczeństwo i zgodę. To obraz bardzo różny od tego, co Hal Bregg zostawił, wylatując w kosmos.Ta wizja Ziemi według Lema od lat fascynuje kolejnych odbiorców, a „Powrót z gwiazd” uznawany jest za jedną z najciekawszych fabuł w literackim dorobku autora. To obraz, który nie tylko przedstawia nieco utopijną rzeczywistość, ale każe słuchaczom zrewidować to, co widzą wokół siebie. Jak daleko nam do Ziemi, którą Bregg zastał po powrocie? Czy ludzkość jest w stanie sama ze sobą dojść do porozumienia, w wyniku którego będzie żyła w dostatku i zgodzie?</p>
<p>To akcja i refleksja w znakomitych proporcjach, a wszystko opowiedziane znakomitym stylem charakterystycznym dla Stanisława Lema.</p>',
                'details' => '<ul><li>Autor: Stanisław Lem</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2017</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379279197</li>
<li>Język: polski</li>
<li>ISBN: 9788379279197</li></ul>',
                'date' => new DateTime('16-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 49,
                'id_publishing' => 19,
                'img_href' => '/images/products/Opowiesci-o-pilocie-Pirxie.jpg',
                'img_alt' => 'Opowieści o pilocie Pirxie',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Opowieści o pilocie Pirxie',
                'promotion_price' => 0.20,
                'price' => 0.20,
                'year_publication' => 2018,
                'description' => '<p>Audiobook z nagraniem powieści dla dzieci i młodzieży o jednym z najbardziej popularnych pilotów-kosmonautów. Pirx dorośleje wraz z przygodami, jakie przychodzi mu przeżywać. Musi stawić czoło różnym problemom, a to sprawia, że staje się dojrzalszy i mądrzejszy. Pilot musi bowiem dowieść wartości niedoskonałego człowieczeństwa w konfrontacji ze światem maszyn i maszynowym myśleniem.</p>
<p>Stanisław Lem – urodzony we Lwowie futurolog, filozof, lekarz, krytyk literatury, a przede wszystkim: najpoczytniejszy nieanglojęzyczny pisarz science fiction. „Astronauci”, „Czas nieutracony”, „Solaris”, „Pamiętnik znaleziony w wannie”, „Wysoki Zamek”, „Katar”, „Dzienniki gwiazdowe” czy „Bajki robotów” to zaledwie niewielka część twórczości Lema, przetłumaczonej na 41 języków i wydanej w łącznym nakładzie 30 mln egzemplarzy. Prywatnie Lem był miłośnikiem marcepanu i chałwy oraz pasjonatem motoryzacji. Jego nazwiskiem nazwano planetoidę nr 3836.</p>',
                'details' => '<ul><li>Autor: Stanisław Lem</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Czas trwania: 15:32:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365983954</li>
<li>Język: polski</li>
<li>ISBN: 9788365983954</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 48,
                'id_publishing' => 19,
                'img_href' => '/images/products/Odyssey-One-W-samo-sedno.jpg',
                'img_alt' => 'Odyssey One. W samo sedno',
                'is_promotion' => 0,
                'is_novelty' => 1,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Odyssey One. W samo sedno',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2019,
                'description' => '<p>Okręt badawczy „Odyseja” powrócił z dziewiczej podróży. Powrócił, wioząc złe nowiny oraz ambasadorów – przedstawicieli innej, choć ludzkiej, cywilizacji kosmicznej, uwikłanej w krwawą wojnę z okrutnymi obcymi. Ziemianie muszą podjąć decyzję, czy angażować się w walkę, podejmować ryzyko, czy też schować głowę w piasek i udawać, że odległy konflikt nie dotyczy Układu Słonecznego.</p>
<p>Tymczasem sprawy się komplikują, jak zawsze, kiedy w grę zaczyna wchodzić polityka, a do tego pojawiają się nowe tajemnice. Kapitan Eric Weston jest gotów do czynu, czeka, aż władze jego świata pozwolą mu na działanie. Na szczęście nie musi czekać zbyt długo.</p>
<p>A kiedy zapada już decyzja i okręt wyrusza z misją, zaczynają się prawdziwe kłopoty…</p>
<p>W drugiej części cyklu poznajemy dalsze losy „Odysei”, jej nietuzinkowego dowódcy i dzielnej załogi. Powieść nie zawiedzie miłośników kosmicznej batalistyki, czytelnik zostaje wrzucony w wir akcji i są takie chwile, kiedy nie ma czasu zaczerpnąć oddechu przed kolejnym zwrotem akcji.</p>',
                'details' => '<ul><li>Autor: Evan Currie</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Nośnik ilość: 1</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2019</li>
<li>Czas trwania: 16:12:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381463683</li>
<li>Język: polski</li>
<li>Seria Odyssey One</li>
<li>ISBN: 9788381463683</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 47,
                'id_publishing' => 19,
                'img_href' => '/images/products/Star-Force-Imperium.jpg',
                'img_alt' => 'Star Force. Imperium',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Star Force. Imperium',
                'promotion_price' => 0.20,
                'price' => 0.69,
                'year_publication' => 2018,
                'description' => '<p>Kyle Riggs od dawna nie odwiedzał Ziemi. Nie ma pojęcia, co tam się dzieje. Nadchodzące raporty są coraz rzadsze i coraz dziwniejsze. Riggs, odizolowany w systemie Eden ze swoimi marines, zaczyna zdawać sobie sprawę, że przeciwko niemu formuje się sojusz. Dwie ogromne floty wkrótce ruszą, by zniszczyć siły pułkownika. Ostatni obrońcy z Sił Gwiezdnych muszą stawić czoła wrogom. Trzeba zawrzeć przymierze z obcymi biotami. Ale które gatunki są naprawdę godne zaufania?</p>
<p>B.V. Larson – niezwykle poczytny amerykański autor książek o tematyce głównie fantasy oraz SF. Na swoim koncie ma ponad 50 tytułów, które sprzedały się w łącznej liczbie ponad 2 milionów egzemplarzy. Nazywany jest królem największej internetowej księgarni. Autor serii „Star Force”, „Lost Colonies”, „Undying Mercenaries”. Jest również autorem podręczników informatyki do college’u.</p>',
                'details' => '<ul><li>Autor: B. V. Larson</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Czas trwania: 11:55:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381462532</li>
<li>Język: polski</li>
<li>Seria Star forcev
<li>ISBN: 9788381462532</li></ul>',
                'date' => new DateTime('15-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 48,
                'id_publishing' => 19,
                'img_href' => '/images/products/Atlantis-Rising-Miasto-demonow.jpg',
                'img_alt' => 'Atlantis Rising. Miasto demonów',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Atlantis Rising. Miasto demonów',
                'promotion_price' => 0.20,
                'price' => 0.72,
                'year_publication' => 2018,
                'description' => '<p>Ludzkość przegrała wojnę z demonami. Garstka wraz z Elan uciekła i schroniła się na wyspie, z dala od wrogich hord. Jednak nawet tam nie było ucieczki przed zagrożeniem. Po drugiej stronie świata demony zmieniły bowiem dawną stolicę Ziemi we własne siedlisko. Lemuria, ostatni bastion ludzkości, stał się symbolem triumfu sił piekielnych i potężnej magii.</p>
<p>I Elan wie, że istnieje tylko jeden sposób, aby zapewnić ludziom bezpieczne schronienie przed odwiecznym wrogiem. Miasto demonów musi zniknąć z powierzchni Ziemi…</p>',
                'details' => '<ul><li>Autor: Evan Currie</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowav</li>
<li>Rok wydania: 2018</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381461610</li>
<li>Język: polski</li>
<li>Seria Atlantis rising</li>
<li>ISBN: 9788381461610</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '003003',
                'id_author' => 48,
                'id_publishing' => 19,
                'img_href' => '/images/products/Hayden-War-Nowe-otwarcie.jpg',
                'img_alt' => 'Hayden War. Nowe otwarcie',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Hayden War. Nowe otwarcie',
                'promotion_price' => 0.20,
                'price' => 0.69,
                'year_publication' => 2018,
                'description' => '<p>Wojna oficjalnie się skończyła i Sorilla, czując ciężar lat spędzonych w pierwszej linii, zdecydowała się odejść z armii. Czas odłożyć pancerz bojowy i broń, czas wreszcie zacząć budować coś dla siebie. Jednak prawdziwy koniec wojny to nie decyzja zwykłych ludzi, a tych u władzy, a oni zawsze szukają dziury w całym. Nadchodzący koszmar sprawia, że Sojusz i SOLCOM muszą działać razem. A nikt nie pomoże bardziej niż doświadczona weteranka wojen kosmicznych i planetarnych starć. Służyć innym to powołanie Sorilli i jej życie.</p>',
                'details' => '<ul><li>Autor: Evan Currie</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788365983671</li>
<li>Język: polski</li>
<li>Seria Hayden War</li>
<li>ISBN: 9788365983671</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],

            //-----------------audiobooki/kryminał-sensacja-thriller-----------------

            [
                'id_cat' => '003004',
                'id_author' => 50,
                'id_publishing' => 20,
                'img_href' => '/images/products/Bez-sladu.jpg',
                'img_alt' => 'Bez śladu',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Bez śladu',
                'promotion_price' => 0.20,
                'price' => 0.88,
                'year_publication' => 2018,
                'description' => '<p>Trzecia powieść z Myronem Bolitarem - detektywem, agentem sportowym i niepoprawnym kobieciarzem.</p>
<p>Luksusowy podmiejski dom w New Jersey. Salon jakby wyszedł spod ręki Marthy Stewart. W piwnicy klocki lego... i krew.</p>
<p>Minęły lata, od kiedy poważna kontuzja położyła kres karierze koszykarskiej Myrona Bolitara. Niespodziewanie zwraca się do niego właściciel New Jersey Dragons z zaskakującą propozycją odnalezienia czołowego zawodnika drużyny. Chodzi o Grega Downinga, z którym Myron niegdyś konkurował - na boisku i o kobietę.</p>
<p>Co się stało z gwiazdą koszykówki? Czy uciekł przed gangsterami poszukującymi go za długi hazardowe? A może przed policją w związku z zabójstwem Carli, kobiety, która go szantażowała? W domu zaginionego Myron znajduje ślady krwi zamordowanej, które niebawem ktoś usuwa. Okazuje się, że cała sprawa ma związek z wydarzeniami z jego własnej przeszłości...</p>',
                'details' => '<ul><li>Autor: Harlan Coben</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: FRAUNHOFER</li>
<li>Rok wydania: 2018</li>
<li>Stan: płyta CD</li>
<li>Model: @9788381253529_31</li>
<li>ISBN: 9788381253529</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 50,
                'id_publishing' => 20,
                'img_href' => '/images/products/Tylko-jedno-spojrzenie.jpg',
                'img_alt' => 'Tylko jedno spojrzenie',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Tylko jedno spojrzenie',
                'promotion_price' => 0.20,
                'price' => 0.44,
                'year_publication' => 2008,
                'description' => '<p>Ustabilizowane życie Grace Lawson rozpada się w jednej chwili, gdy na jednym ze świeżo wywołanych zdjęć rodzinnych rozpoznaje swojego męża. Fotografia wygląda na zrobioną przed laty. Przedstawia także inne osoby, a twarz jednej z nich jest przekreślona. Jack zaprzecza, by miał coś wspólnego ze zdjęciem. Krótko potem wychodzi z domu i znika, zabierając tajemniczą odbitkę. Grace rozpoczyna poszukiwania męża, który, jak się okazuje, został porwany. Ktoś grozi jej dzieciom. Grace nie wie, komu może zaufać - wydaje się, że wszyscy jej znajomi i przyjaciele mają coś do ukrycia. Próbuje dotrzeć do prawdy. Trop prowadzi do tragicznych wydarzeń sprzed lat, gdy cudem uszła z życiem ze strzelaniny, jaka wybuchła na koncercie rockowym.</p>
<p>Spektakularny sukces powieści Nie mów nikomu uczynił z Cobena megagwiazdę współczesnego thrillera. Precyzyjnie skonstruowana intryga, mistrzowsko stopniowane napięcie, fałszywe tropy prowadzące donikąd, pozornie niemożliwe do wyjaśnienia zagadki pojawiające się niemal na każdej stronie, zaskakujące zakończenie, którego nie domyśli się nawet najbardziej przenikliwy czytelnik, to podstawowe cechy jego pisarskiego stylu.</p>',
                'details' => '<ul><li>Autor: Harlan Coben</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: FRAUNHOFER</li>
<li>Rok wydania: 2008</li>
<li>Czas trwania: 10:08:00</li>
<li>Stan: płyta CD</li>
<li>Model: @9788373597426_31</li>
<li>Język: Język polski</li>
<li>ISBN: 9788365781925</li></ul>',
                'date' => new DateTime('22-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 50,
                'id_publishing' => 20,
                'img_href' => '/images/products/Nie-odpuszczaj.jpg',
                'img_alt' => 'Nie odpuszczaj',
                'is_promotion' => 1,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Nie odpuszczaj',
                'promotion_price' => 0.77,
                'price' => 0.89,
                'year_publication' => 2018,
                'description' => '<p>Detektyw Napoleon "Nap" Dumas z przedmieść New Jersey w ostatniej klasie szkoły średniej stracił brata. Leo i jego dziewczyna Diana zostali znalezieni martwi na torach kolejowych. W tym samym czasie Maura, dziewczyna, którą Nap uważał za miłość swojego życia, zniknęła bez śladu.</p>
<p>Przez piętnaście lat Nap Dumas bezskutecznie szukał ukochanej Maury. I liczył na wyjaśnienie zagadkowej śmierci brata. Wygląda na to, że wkrótce uda mu się poznać tajemnice sprzed lat.</p>
<p>Kiedy śledczy znajdują odciski palców Maury w wynajętym samochodzie należącym do podejrzanego o morderstwo, Nap rozpoczyna gorączkowe śledztwo. Zamiast odpowiedzi natrafia jednak na kolejne niewiadome. Okazuje się, że nie wiedział nic ani o kobiecie, którą kochał, ani o przyjaciołach z dzieciństwa, ani o opuszczonej bazie wojskowej, w pobliżu której dorastał, a przede wszystkim - nie wiedział nic o Leo i Dianie, których śmierć jest o wiele bardziej mroczna i przerażająca, niż kiedykolwiek mógłby sobie wyobrazić.</p>',
                'details' => '<ul><li>Autor: Harlan Coben</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: FRAUNHOFER</li>
<li>Rok wydania: 2018</li>
<li>Stan: płyta CD</li>
<li>Model: @9788381253932_31</li>
<li>ISBN: 9788381253932</li></ul>',
                'date' => new DateTime('24-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 50,
                'id_publishing' => 20,
                'img_href' => '/images/products/Zaginiona.jpg',
                'img_alt' => 'Zaginiona',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Zaginiona',
                'promotion_price' => 0.20,
                'price' => 0.99,
                'year_publication' => 2018,
                'description' => '<p>Myron Bolitar rozwiązuje swoją dziewiątą zagadkę w kolejnym mistrzowskim thrillerze Harlana Cobena</p>
<p>Ciężko jest oprzeć się dawnej kochance. Dowiaduje się o tym Myron Bolitar, kiedy nad ranem odbiera telefon i słyszy słowa: "Przyjedź do Paryża". Ale czy obietnica namiętnego weekendu jest bezinteresowna, skoro Terese jest podejrzewana o zamordowanie byłego męża? I do nikogo oprócz Myrona nie może zwrócić się o pomoc?</p>
<p>Sprawa wygląda beznadziejnie i Myron nie zamierza jej prowadzić. Przypadkowo trafi a jednak na dowód, który sprawia, że zaczyna patrzeć na nią w zupełnie inny sposób. Wkrótce wychodzi na jaw, że Terese skrywa sekret, którego ujawnienie może zmienić życie ich dwojga na zawsze.</p>',
                'details' => '<ul><li>Autor: Harlan Coben</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: FRAUNHOFER</li>
<li>Rok wydania: 2018</li>
<li>Stan: płyta CD</li>
<li>Model: @9788381253390_31</li>
<li>ISBN: 9788381253390</li></ul>',
                'date' => new DateTime('28-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 50,
                'id_publishing' => 20,
                'img_href' => '/images/products/Najczarniejszy-strach.jpg',
                'img_alt' => 'Najczarniejszy strach',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Najczarniejszy strach',
                'promotion_price' => 0.20,
                'price' => 0.77,
                'year_publication' => 2008,
                'description' => '<p>Sensacyjna powieść mistrza grozy Harlana Cobena. Na Myrona jak grom spada wiadomość, że ma nieślubnego syna, którego istnienia nawet nie podejrzewał. Co więcej, Jeremy choruje na rzadką odmianę białaczki - by go uratować, konieczny jest przeszczep szpiku kostnego. Niestety, jedyny zarejestrowany dawca, niejaki Taylor, przepadł bez śladu. Myron ustala jego prawdziwe nazwisko - Lex. Ale Lex jest nieuchwytny, a podający się za niego człowiek przez telefon każe mu pożegnać się z chłopcem. Powtarza przy tym maniakalnie "siej ziarno". Siej Ziarno to przydomek seryjnego porywacza i mordercy opisanego w serii artykułów przez Stana Gobbsa - dziennikarza, którego media i FBI oskarżyły o fabrykowanie informacji. Są na to niepodważalne dowody. Czy rzekomy zabójca i dawca to jedna i ta sama osoba?</p>',
                'details' => '<ul><li>Autor: Harlan Coben</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: znak wodny</li>
<li>Rok wydania: 2008</li>
<li>Czas trwania: 10:40:00</li>
<li>Stan: płyta CD</li>
<li>Model: @9788373597402_31</li>
<li>Język: polski</li>
<li>ISBN: 9788373597402</li></ul>',
                'date' => new DateTime('31-01-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 51,
                'id_publishing' => 20,
                'img_href' => '/images/products/Lato-zepsucia-Zdolny-uczen.jpg',
                'img_alt' => 'Lato zepsucia. Zdolny uczeń',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lato zepsucia. Zdolny uczeń',
                'promotion_price' => 0.20,
                'price' => 0.85,
                'year_publication' => 2018,
                'description' => '<p>Todd Bowden wpada na trop hitlerowskiego zbrodniarza, który pod przybranym nazwiskiem ukrywa się w amerykańskim miasteczkiem. Trzynastoletni chłopak okaże się bardzo pojętym uczniem oprawcy z Auschwitz...</p>
<p>"Taki zwykły temat. Esesman, jakich przecież nadal wielu - ukrywających się na Zachodzie i w Stanach. Dlaczego więc jest to jedna z najbardziej przerażających pozycji w dorobku Kinga? Dlatego, że jest zwykła. Niebezpiecznie tchnie realizmem i prawdopodobieństwiem... Młody chłopak spotyka na swej drodze staruszka, będącego byłym hitlerowcem. Byłym, a jednak na wskroś przesiąkniętym "ideałami" przeszłych lat. A nasz ciekawy życia bohater żądny jest jego opowieści. Nachodzi go więc i zmusza do o..." - Laryska (Biblionetka.pl)</p>
<p>Książka jest jedną z opowieści wchodzących w skład zbiorku "Cztery Pory Roku". Zdolny uczeń jest drugą z nowel tzw. Letnią opowieścią, opublikowanych w powyższym zbiorze.</p>',
                'details' => '<ul><li>Autor: Stephen King</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: FRAUNHOFER</li>
<li>Czas trwania: 08:18:00</li>
<li>Stan: płyta CD</li>
<li>Model: @9788378852155_31</li>
<li>Język: Język polski</li>
<li>ISBN: 9788378852155</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 51,
                'id_publishing' => 20,
                'img_href' => '/images/products/Cujo.jpg',
                'img_alt' => 'Cujo',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Cujo',
                'promotion_price' => 0.20,
                'price' => 0.65,
                'year_publication' => 2014,
                'description' => '<p>Cujo jest imieniem psa rasy bernardyn. Mieszka wraz z rodziną Cambers na farmie niedaleko Castle Rock. Jest spokojnym i przyjaźnie nastawionym zwierzęciem. Wszystko zmienia się, gdy podczas pogoni za królikiem zostaje ukąszony przez nietoperza zarażonego wirusem wścieklizny. Zachorował, zaczął pogrążać się w szaleństwie i stał się bezlitosną maszyną do zabijania. Czyta Krzysztof Gosztyła. Czas nagrania: 15 godz. 24 min.</p>',
                'details' => '<ul><li>Tytuł: Cujo</li>
<li>Autor: Stephen King</li>
<li>Wydawnictwo Albatros</li>
<li>Nośnik: CD-MP3</li>
<li>Nośnik ilość: 1</li>
<li>Oprawa: Etui</li>
<li>Rok wydania: 2014</li>
<li>Czas trwania: 15:24:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788378854463</li>
<li>Język: polski</li>
<li>Seria Castle Rock</li>
<li>ISBN: 9788378854463</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 52,
                'id_publishing' => 19,
                'img_href' => '/images/products/Alex.jpg',
                'img_alt' => 'Alex',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Alex',
                'promotion_price' => 0.20,
                'price' => 0.86,
                'year_publication' => 2018,
                'description' => '<p>Pierwsza część cyklu „Kryminały Joe Alexa”. Precyzyjnie skonstruowana i trzymająca w napięciu intryga, chłodna logika kryminalnej zagadki –wszystko to sprawia, że kolejne wydania powieści Alexa cieszą się niesłabnącą popularnością wśród miłośników klasycznej powieści detektywistycznej.ZAWARTOŚĆ PAKIETU:Cichym ścigałam go lotem – Czyta: Włodzimierz Press – Czas trwania: 6 godz.Jesteś tylko diabłem – Czyta: Jacek Rozenek – Czas trwania: 9 godz. 10 minPowiem wam, jak zginął – Czyta: Leszek Filipowicz – Czas trwania: 8 godz. 43 minŚmierć mówi w moim imieniu – Czyta: Arkadiusz Bazak – Czas trwania: 6 godz. 5 min</p>',
                'details' => '<ul><li>Autor: Alex Joe</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Czas trwania: 29:58:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381460538</li>
<li>Język: polski</li>
<li>ISBN: 9788381460538</li></ul>',
                'date' => new DateTime('17-02-2019'),
            ],
            [
                'id_cat' => '003004',
                'id_author' => 50,
                'id_publishing' => 20,
                'img_href' => '/images/products/Na-goracym-uczynku.jpg',
                'img_alt' => 'Na gorącym uczynku',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Na gorącym uczynku',
                'promotion_price' => 0.20,
                'price' => 0.95,
                'year_publication' => 2018,
                'description' => '<p>Siedemnastoletnia Haley McWaid, chluba rodziców, pewnego dnia znika. Po trzech miesiącach poszukiwań jej najbliżsi są przygotowani na najgorsze.</p>
<p>Dan Mercer, pracownik opieki społecznej, troszczący się szczególnie o los dzieci, wpada w pułapkę zastawioną przez Wendy Tynes, która w swoim programie telewizyjnym "Przyłapani na gorącym uczynku" demaskuje przestępców seksualnych. W jego komputerze policja znajduje obciążający materiał i wszystko wskazuje na to, że mógł mieć związek z zaginięciem Haley.</p>
<p>Wendy Tynes nie zrobiłaby jednak kariery jako dziennikarka, gdyby dostrzegała tylko to, co oczywiste. Zaczyna podejrzewać, że padła ofiarą manipulacji.</p>',
                'details' => '<ul><li>Autor: Harlan Coben</li>
<li>Wydawnictwo Albatros</li>
<li>Rodzaj pliku: mp3</li>
<li>Licencja: FRAUNHOFER</li>
<li>Rok wydania: 2018</li>
<li>Stan: płyta CD</li>
<li>Model: @9788381253543_31</li>
<li>ISBN: 9788381253543</li></ul>',
                'date' => new DateTime('09-02-2019'),
            ],

            //-----------------audiobooki/podroze-----------------

            [
                'id_cat' => '003005',
                'id_author' => 53,
                'id_publishing' => 19,
                'img_href' => '/images/products/Niewolnicy-slonca.jpg',
                'img_alt' => 'Niewolnicy słońca',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Niewolnicy słońca',
                'promotion_price' => 0.20,
                'price' => 0.79,
                'year_publication' => 2018,
                'description' => '<p>Najprościej ujmując „Niewolnicy słońca” to relacja z podróży po Afryce Zachodniej, odbytej w latach 20. XX wieku. Lecz to, jak Ossendowski filtruje doświadczenia z wędrówki, przeplatając je barwnymi opisami kolonizatorów, plemion, ich tradycji i wierzeń, czyni z „Niewolników słońca” magiczną mieszankę reportażu podróżniczego, dziennika, mitu i eseju. Pozycja obowiązkowa nie tylko dla miłośników podróży i Czarnego Lądu!</p>',
                'details' => '<ul><li>Autor: Antoni Ferdynand Ossendowski</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381461214</li>
<li>Język: polski</li>
<li>ISBN: 9788381461214</li></ul>',
                'date' => new DateTime('12-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 54,
                'id_publishing' => 21,
                'img_href' => '/images/products/Zycie-na-miare.jpg',
                'img_alt' => 'Życie na miarę',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Życie na miarę',
                'promotion_price' => 0.20,
                'price' => 0.69,
                'year_publication' => 2016,
                'description' => '<p>Dobra prezencja bywa kluczem do sukcesu, a metka na ubraniu ma znaczenie. Czasem to kwestia życia lub śmierci. Dla niektórych ? dosłownie. </p>
<p>W 2013 roku zawalenie się budynku Rana Plaza, w którym mieściły się fabryki szyjące ubrania dla zachodnich firm, zwróciło oczy całego świata na przemysł odzieżowy w Bangladeszu. Wielu z nas po raz pierwszy usłyszało o halach niespełniających żadnych wymogów bezpieczeństwa i przemęczonych pracownikach, którym na każdym kroku grozi utrata zdrowia, a nawet życia. Zachodnie organizacje pozarządowe nie kryły oburzenia z powodu głodowych pensji szwaczek, a szefowie koncernów tłumaczyli, że nie wiedzieli, w jakich warunkach produkuje się ubrania dla ich firm. Marek Rabij pojechał do Bangladeszu kilkanaście dni po zawaleniu się Rana Plaza. Rok później ? gdy ucichł szum medialny wokół tragedii ? powrócił do Dhaki, aby lepiej poznać życie pracowników tamtejszej branży odzieżowej. Rozmawiał ze szwaczkami, próbował spotkać się z dyrektorami fabryk, poznał życie codzienne mieszkańców slumsów i szlaki przemytnicze, którymi wędrują podróbki lub resztki kolekcji znanych firm. Notując swoje spostrzeżenia, bezlitośnie uświadamia nam, klientom sieciówek, za co właściwie płacimy, kto na tym traci, a kto zyskuje. </p>
<p>Czyta: Andrzej Ferenc</p>',
                'details' => '<ul><li>Tytuł: Życie na miarę. Odzieżowe niewolnictwo</li>
<li>Autor: Marek Rabij</li>
<li>Wydawnictwo Biblioteka Akustyczna</li>
<li>Nośnik: CD-MP3</li>
<li>Nośnik ilość: 1</li>
<li>Oprawa: Etui</li>
<li>Rok wydania: 2016</li>
<li>Czas trwania: 5:14:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788380820234</li>
<li>Język: polski</li>
<li>Seria Seria Podróżnicza</li>
<li>ISBN: 9788380820234</li></ul>',
                'date' => new DateTime('14-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 55,
                'id_publishing' => 19,
                'img_href' => '/images/products/Dziesiec-bram-swiata.jpg',
                'img_alt' => 'Dziesięć bram świata',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Dziesięć bram świata',
                'promotion_price' => 0.20,
                'price' => 0.45,
                'year_publication' => 2015,
                'description' => '<p>Autor podróżniczej książki „Dziesięć bram świata” zjeździł niemal cały Trzeci Świat i przeżył dramatyczne chwile. Spośród setek miejsc i dziesiątek zapierających dech w piersiach przygód, wybrał dziesięć, które wywarły na nim największe wrażenie. Zabiera czytelnika na krańce świata pokonując granice, których nie ma na mapach.</p>
<p>Dociera na Jawę, by towarzyszyć górnikom wydobywającym w skrajnie niebezpiecznych warunkach siarkę z dna czynnego wulkanu. Przenosi się do Indii, gdzie atakuje go nożownik i spotyka przerażających żebraków oraz „świętych mężów”. Płynie po Amazonce, przedziera się przez dżunglę i poznaje niezwykłego Indianina. W Boliwii unika śmiertelnie niebezpiecznego więzienia przedostając się przez zieloną granicę do Peru, by uczestniczyć tam w krwawej ofierze potomków Inków. W afrykańskim Mali szuka zaginionego podczas wojny przyjaciela, a w dolinie rzeki Omo w Etiopii poznaje dzikie plemiona, których za kilka lat nie będzie, by potem uciekać stamtąd przed powodzią, w której ginie siedemset osób. W Betlejem pomaga ranionej przez izraelskich żołnierzy pięknej palestyńskiej dziewczynie, a dwa lata później poznaje w Damaszku jej ojca, syryjskiego terrorystę. W Stambułu podczas trzęsienia ziemi wali się hotel, w którym mieszka, w Kurdystanie opowiada mu o swoim życiu stary bojownik kurdyjski, który nienawidzi Turków, a w Nikozji poznaje skrzywdzonego przez los cypryjskiego Turka, który nienawidzi Greków.</p>
<p>Jest to książka o świecie, w którym natura, historia, nędza, okrucieństwa i wojny kształtują losy i charaktery ludzi. A równocześnie cudowna pięknem opisanych bohaterów, pełna emocji i wydarzeń „nie z tej ziemi”. Kiedy się ją kończy, fascynacja łączy się z ulgą, że żyjemy tu, a nie tam.</p>',
                'details' => '<ul><li>Autor: Tadeusz Biedzki</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2015</li>
<li>Czas trwania: 5:43:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379274123</li>
<li>Język: polski</li>
<li>ISBN: 9788379274123</li></ul>',
                'date' => new DateTime('16-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 56,
                'id_publishing' => 19,
                'img_href' => '/images/products/Broad-Peak-Niebo-i-pieklo.jpg',
                'img_alt' => 'Broad Peak. Niebo i piekło',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Broad Peak. Niebo i piekło',
                'promotion_price' => 0.20,
                'price' => 0.88,
                'year_publication' => 2018,
                'description' => '<p>Czy wraz z tragedią na Broad Peak kończy się w Polsce himalaizm, jaki znaliśmy dotychczas?</p>
<p>Autorzy próbują odpowiedzieć na to pytanie, analizując krok po kroku najważniejsze wydarzenia podczas polskiej wyprawy na Broad Peak w 2013 roku. Przeprowadzają dramatyczne rozmowy ze świadkami wydarzeń, przyjaciółmi tragicznie zmarłych i ich rodzinami. Dokonują wiwisekcji etyki polskiego himalaizmu. Piszą też o granicach pasji, zastanawiają się, czy wspinaczka jest hymnem wolności, czy też raczej najwyższe góry powinniśmy nazywać Himalajami egoizmu?</p>
<p>W tej książce nie znajdziecie spekulacji i sensacji. To rzetelna relacja z dokonań „Lodowych Wojowników”, porywająca opowieść o wyjątkowych ludziach, którzy przesunęli granicę naszych możliwości i na zawsze przejdą do historii. Wierzę, że każdy z bohaterów tej książki zginął robiąc to, co kochał najbardziej i nie nam, którzy pozostali bezpiecznie na nizinach, to oceniać. Warto przeczytać „Broad Peak. Niebo i piekło” i szczerze odpowiedzieć sobie na pytanie, jaka jest cena marzeń, którą warto zapłacić.</p>',
                'details' => '<ul><li>Autor: Przemysław Wilczyński</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Czas trwania: 13:06:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381461955</li>
<li>Język: polski</li>
<li>ISBN: 9788381461955</li></ul>',
                'date' => new DateTime('17-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 53,
                'id_publishing' => 19,
                'img_href' => '/images/products/Przez-kraj-ludzi-zwierzat-i-bogow.jpg',
                'img_alt' => 'Przez kraj ludzi, zwierząt i bogów',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Przez kraj ludzi, zwierząt i bogów',
                'promotion_price' => 0.20,
                'price' => 0.89,
                'year_publication' => 2018,
                'description' => '<p>To nie tylko zapiski z podróży po Azji. To żywe świadectwo przeżyć Antoniego Ferdynanda Ossendowskiego – znanego globtrotera, naukowca, awanturnika, szpiega, dyplomaty i dziennikarza.</p>
<p>Uciekając przed bolszewikami przez syberyjską tajgę i stepy w Mongolii aż do Chin, doświadcza rzeczy i zjawisk, o których nie śniło się filozofom. Niesamowite okazy fauny i flory, azjatycka odmienność kulturowa, wspaniałe budowle, magiczne rytuały tubylców… wszystko to opisane zostało z najprawdziwszą pasją i swadą. Dzięki sugestywnemu głosowi Michała Breitenwalda i my możemy na chwilę znaleźć się w tym „rozgorzałym od namiętności politycznych azjatyckim kotle”.</p>',
                'details' => '<ul><li>Autor: Antoni Ferdynand Ossendowski</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2018</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788381462303</li>
<li>Język: polski</li>
<li>ISBN: 9788381462303</li></ul>',
                'date' => new DateTime('18-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 53,
                'id_publishing' => 19,
                'img_href' => '/images/products/Gasnace-ognie.jpg',
                'img_alt' => 'Gasnące ognie',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Gasnące ognie',
                'promotion_price' => 0.20,
                'price' => 0.77,
                'year_publication' => 2017,
                'description' => '<p>Gasnące ognie. Podróż po Palestynie, Syrji, Mezopotamji</p>
<p>Ossendowski zabiera nas na niespieszny spacer po obszarach, gdzie narodziły się trzy wielkie religie - judaizm, chrześcijaństwo i islam. To nie tylko delektowanie się ichnią egzotyka, różnorodnością ras, wyznań, bogactwem kulturowym, roślinnością czy architekturą. To spotkanie z całkiem odmienną obyczajowością: zachowaniem, zwyczajami, poglądami. "Podróż po Palestynie, Syrji, Mezopotamji" obficie okraszono anegdotami i wtrętami historycznymi i biblijnymi. Delicje dla ucha!</p>',
                'details' => '<ul><li>Autor: Antoni Ferdynand Ossendowski</li>
<li>Wydawnictwo Heraclon</li>
<li>Oprawa: Plastikowa</li>
<li>Stan: końcówka nakładu, książki są nowe</li>
<li>Model: 978837927473433</li>
<li>ISBN: 9788379274734</li></ul>',
                'date' => new DateTime('13-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 57,
                'id_publishing' => 19,
                'img_href' => '/images/products/Spalic-paszport.jpg',
                'img_alt' => 'Spalić paszport',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Spalić paszport',
                'promotion_price' => 0.20,
                'price' => 0.20,
                'year_publication' => 2017,
                'description' => '<p>Fascynująca opowieść polskiego franciszkanina z Ugandy ? zapis ponad piętnastu lat pobytu w kraju nazywanym przez wielu podróżników ?perłą Afryki?</p>
<p>Większość misjonarzy prędzej czy później przeżywa szok kulturowy. Kryzys dopada każdego misjonarza, który musi się ?dzielić? swoimi parafianami z przewodnikami tradycyjnych religii afrykańskich. Afrykańczycy przyjmują chrzest, przychodzą na msze, ale gdy dopadają ich lęki i choroby, idą po skuteczniejsze pomoce do swych czarowników, zielarzy.</p>
<p>Ojcowie Biali, pierwsi misjonarze tego kontynentu, palili po przyjeździe swoje paszporty, odcinając sobie możliwość odwrotu, gdy przygniecie ich poczucie obcości i bezsensu swoich wysiłków. Ojciec Dąbrowski tego nie uczynił, ale czy rzeczywiście ma jeszcze możliwość wyjazdu, skoro on teraz już ani biały, ani czarny, jak wyznaje...</p>',
                'details' => '<ul><li>Autor: Bogusław Kalungi Dąbrowski</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2017</li>
<li>Czas trwania: 9:10:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379279845</li>
<li>Język: polski</li>
<li>ISBN: 9788379279845</li></ul>',
                'date' => new DateTime('15-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 58,
                'id_publishing' => 19,
                'img_href' => '/images/products/Pod-gore.jpg',
                'img_alt' => 'Pod górę',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Pod górę',
                'promotion_price' => 0.20,
                'price' => 0.68,
                'year_publication' => 2017,
                'description' => '<p>Odważna i bezkompromisowa dziewczyna w podróż do Hiszpanii wyruszyła z rowerem, namiotem i przyczepką. </p>
<p>Jej głównym celem było pokonanie najwyższego rowerowego podjazdu Europy, drugiego pod względem wysokości szczytu gór Sierra Nevada, czyli Pico del Veleta (3398 m n.p.m.). Oto zapis jej przygód. Uwaga! Przygód mrożących krew w żyłach!</p>
<p>Czyta Weronika Nockowska</p>',
                'details' => '<ul><li>Autor: Ewa Kołodziej</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2017</li>
<li>Czas trwania: 9:51:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379278107</li>
<li>Język: polski</li>
<li>ISBN: 9788379278107</li></ul>',
                'date' => new DateTime('02-02-2019'),
            ],
            [
                'id_cat' => '003005',
                'id_author' => 59,
                'id_publishing' => 19,
                'img_href' => '/images/products/Lece-dalej-Tanie-podniebne-podroze.jpg',
                'img_alt' => 'Lecę dalej. Tanie podniebne podróże',
                'is_promotion' => 0,
                'is_novelty' => 0,
                'is_bestseller' => 0,
                'is_sellout' => 0,
                'name' => 'Lecę dalej. Tanie podniebne podróże',
                'promotion_price' => 0.20,
                'price' => 0.79,
                'year_publication' => 2016,
                'description' => '<p>Niezbędnik podróżnika amatora.</p>
<p>Jeśli chcesz podróżować tanio i ciekawie, a przy tym wykorzystywać wszystkie możliwości, jakie stwarzają nam lotniska, sięgnij po ten audiobook. Posłuchaj, co warto i co można, latając tanimi liniami na drugą półkulę. Audiobook składa się z dwóch części. W pierwszej autorka opisuje dwanaście podróży, które odbyła w ciągu przeszło roku (jedna w 2010, i jedenaście w 2011 r.): korzystając z promocji w tanich i regularnych liniach lotniczych. Część druga to nieocenione kompendium wiedzy na temat tanich lotów, z którego można się dowiedzieć m.in. gdzie i kiedy szukać promocji; jak kupić bilet za 3 euro do Fezu i dlaczego na Ibizę najlepiej lecieć przez Sztokholm; jak płacić, żeby nie przepłacić; co zrobić, żeby nie musieć urywać kółek od walizki; jak się wyspać na terminalu; dlaczego warto czytać regulaminy oraz do czego może służyć płachta budowlana i ołówki.</p>
<p>Czyta Kamila Kuboth-Schuchardt</p>',
                'details' => '<ul><li>Autor: Marzena Filipczak</li>
<li>Wydawnictwo Heraclon</li>
<li>Nośnik: CD-MP3</li>
<li>Oprawa: Plastikowa</li>
<li>Rok wydania: 2016</li>
<li>Czas trwania: 9:08:00</li>
<li>Stan: nowy, pełnowartościowy produkt</li>
<li>Model: 9788379276790</li>
<li>Język: polski</li>
<li>Podtytuł: Tanie podniebne podróże</li>
<li>ISBN: 9788379276790</li></ul>',
                'date' => new DateTime('06-02-2019'),
            ],

        ]);
    }
}
