<?php

use Illuminate\Database\Seeder;

class PagesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug' => 'homepage_infobox',
            'sub_title' => 'O naszej',
            'title' => 'księgarni',
            'preface' => '',
            'content' => 'Księgarnia internetowa działa prężnie na rynku! Każdego dnia, cegiełka po cegiełce budujemy zaufanie naszych Klientów, z którego jesteśmy najbardziej dumni.',
            'meta_title' => 'Księgarnia internetowa',
            'img_url' => '/images/bookcase.jpg',
            'img_alt' => 'księgarnia',
            'redirect_url' => 'about-us',
            'redirect_desc' => 'Dowiedz się więcej',
        ]);

        DB::table('pages')->insert([
            'slug' => 'about-us',
            'sub_title' => 'O nas',
            'title' => 'O nas',
            'preface' => 'Księgarnia internetowa działa prężnie na rynku! Każdego dnia, cegiełka po cegiełce budujemy zaufanie naszych Klientów, z którego jesteśmy najbardziej dumni. Wasze zaufanie to skarb, który pielęgnujemy i na który każdego dnia chcemy od nowa zasłużyć.',
            'content' => '<p>Wypożyczamy książki w całej Polsce. W ofercie posiadamy również komisky oraz audiobooki. Każdego dnia nasz zespół pracuje nad tym, aby każde z Waszych zamówie zostało zrealizowane z najwyższą jakością. Nasza placówka jest zawsze dla Was otwarta. Cieszymy się każdą Waszą wizytą!</p>
<p>Dziękujemy za okazane zaufanie – to dzięki niemu rozwijamy się w tak szybkim tempie. Dołożymy wszelkich starań aby każdy z Klientów był zadowolony z wysokiej jakości obsługi i niskich cen, jakie oferujemy.</p>',
            'meta_title' => 'O nas',
            'img_url' => '/images/bookcase.jpg',
            'img_alt' => 'księgarnia',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'contact',
            'sub_title' => 'Skontaktuj sie z nami',
            'title' => 'Kontakt',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Kontakt',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'regulations',
            'sub_title' => '',
            'title' => 'Regulamin',
            'preface' => '',
            'content' => '<p align="center" style="text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>REGULAMIN ŚWIADCZENIA USŁUG DROGĄ ELEKTRONICZNĄ ORAZ ZAWIERANIA UM&Oacute;W SPRZEDAŻY NA ODLEGŁOŚĆ </b></span></span></span></p>

                    <p align="center" style="text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">w ramach księgarni internetowej</span></span></span></p>

                    <p align="center" style="text-align:center; margin:0cm 0cm 8pt">&nbsp;</p>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>&sect; 1&nbsp;</b></span></span></span></p>

                    <p align="center" style="text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>Definicje</b></span></span></span></p>

                    <p style="text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Dla potrzeb interpretacji Regulaminu, poniższe postanowienia oznaczają:</span></span></span></p>

                    <ol>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Księgarnia -&nbsp;księgarnia internetowa prowadzony przez Sprzedawcę pod adresem internetowym ksiegarnia-internetowa.pl</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Sprzedawca &ndash; Kamil Staśko z&nbsp;siedzibą w&nbsp;miejscowości Wilkowisko 696, 34-617 Wilkowisko,</span></span></span></li>
                    </ol>

                    <p style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Sąd Rejestrowy: Sądu Rejonowego dla Krakowa-Śródmieścia w Krakowie, numer KRS: 0000000000, NIP: 0000000000, REGON: 000000000;</span></span></span></p>

                    <ol start="3">
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Konsument &ndash; osoba fizyczna posiadająca pełną zdolność do czynności prawnych lub ograniczoną zdolność do czynności prawnej za zgodą przedstawiciela ustawowego, zawierająca ze Sprzedawcą umowę w&nbsp;ramach Księgarni, kt&oacute;rej przedmiot nie jest związany bezpośrednio z&nbsp;jej działalnością gospodarczą lub zawodową.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Przedsiębiorca &ndash; osoba fizyczna, osoba prawna i&nbsp;jednostka organizacyjna nie posiadająca osobowości prawnej, kt&oacute;rej ustawa przyznaje zdolność prawną, prowadząca we własnym imieniu działalność gospodarczą lub zawodową.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient &ndash; Konsument lub Przedsiębiorca zawierający Umowę Sprzedaży za pośrednictwem Księgarni</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Użytkownik &ndash; każdy pojedynczy użytkownik sieci Internet, korzystający z&nbsp;Usług elektronicznych świadczonych w&nbsp;Księgarni internetowej, w&nbsp;tym zawierający ze Sprzedawcą Umowę o&nbsp;Świadczenie Usług.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Umowa zawarta na odległość &ndash; umowa sprzedaży zawarta z&nbsp;Klientem w&nbsp;ramach zorganizowanego systemu zawierania um&oacute;w na odległość (w ramach Księgarni), bez jednoczesnej fizycznej obecności stron, z&nbsp;wyłącznym wykorzystaniem jednego lub większej liczby środk&oacute;w porozumiewania się na odległość do chwili zawarcia umowy włącznie.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Regulamin -&nbsp;niniejszy regulamin.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Rejestracja &ndash; jednorazowa czynność, polegająca na utworzeniu przez Klienta Konta, dokonana z&nbsp;wykorzystaniem formularza rejestracyjnego udostępnionego przez Sprzedawcę na stronie Księgarni internetowej.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Zam&oacute;wienie -&nbsp;oświadczenie woli Klienta składane za pomocą Formularza Zam&oacute;wienia i&nbsp;zmierzające bezpośrednio do zawarcia Umowy Sprzedaży Produktu lub Produkt&oacute;w ze Sprzedawcą.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Konto Klienta /&nbsp;Konto &ndash; przestrzeń udostępniana Klientowi w&nbsp;ramach Księgarni zgodnie z&nbsp;Umową o&nbsp;Świadczenie Usług, pozwalająca na korzystanie przez Klienta z&nbsp;dodatkowych funkcjonalności/usług. Klient uzyskuje dostęp do Konta Klienta za pomocą loginu i&nbsp;hasła lub innych dostępnych metod logowania. Klient loguje się na swoje Konto po dokonaniu rejestracji na stronie internetowej Księgarni.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Formularz zam&oacute;wienia -&nbsp;interaktywny formularz dostępny w&nbsp;Księgarniaie umożliwiający złożenie Zam&oacute;wienia, w&nbsp;szczeg&oacute;lności poprzez dodanie Produkt&oacute;w do Koszyka oraz określenie warunk&oacute;w Umowy Sprzedaży, w&nbsp;tym sposobu dostawy i&nbsp;płatności.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Umowa o&nbsp;Świadczenie Usług -&nbsp;niniejszy dokument określający zasady zawierania Um&oacute;w Sprzedaży oraz zasady świadczenia i&nbsp;korzystania z&nbsp;bezpłatnych usług oferowanych przez Sprzedawcę za pośrednictwem Księgarni na rzecz Klient&oacute;w i&nbsp;Użytkownik&oacute;w. W&nbsp;zakresie usług świadczonych drogą elektroniczną niniejszy Regulamin jest regulaminem, o&nbsp;kt&oacute;rym mowa w&nbsp;<i>art. 8&nbsp;ustawy z&nbsp;dnia 18 lipca 2002 r. o&nbsp;świadczeniu usług drogą elektroniczną (Dz.U. z&nbsp;2002 r.</i> Nr 144, poz. 1204 z&nbsp;p&oacute;źn. zm.).</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Usługi elektroniczne &ndash; usługi świadczone przez Sprzedawcę drogą elektroniczną w&nbsp;rozumieniu przepis&oacute;w&nbsp; ustawy z&nbsp;dnia 18 lipca 2002 r. o&nbsp;świadczeniu usług drogą elektroniczną (Dz.U. z&nbsp;2002 r. Nr 144, poz. 1204 z&nbsp;p&oacute;źn. zm.).</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Koszyk &ndash; element oprogramowania Księgarni, w&nbsp;kt&oacute;rym widoczne są wybrane przez Klienta Produkty do zakupu, a&nbsp;także istnieje możliwość ustalenia i&nbsp;modyfikacji danych Zam&oacute;wienia, w&nbsp;szczeg&oacute;lności ilości produkt&oacute;w.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Produkt -&nbsp;dostępna w&nbsp;Księgarniaie rzecz ruchoma będąca przedmiotem Umowy Sprzedaży między Klientem, a&nbsp;Sprzedawcą.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Umowa Sprzedaży -&nbsp;umowa sprzedaży Produktu zawierana między Klientem, a&nbsp;Sprzedawcą za pośrednictwem Księgarni internetowego -&nbsp;Umowa zawarta na odległość.</span></span></span></li>
                        <li style="text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Wymagania Techniczne -&nbsp;minimalne wymagania techniczne, kt&oacute;rych spełnienie jest niezbędne do korzystania ze Księgarni, zawarcia Umowy o&nbsp;Świadczenie Usług lub zawarcia Umowy Sprzedaży, tj.: posiadanie komputera lub innego urządzenia podłączonego do sieci Internet, wyposażonego w&nbsp;jedną z&nbsp;następujących przeglądarek internetowych (we wskazanych lub nowszych wersjach): MS IE 11, MS Edge 16, Mozilla Firefox 57, Chrome 63, Opera 49, iOS Safari 11, Android Browser 62, Chrome dla Android 62. Aby utworzyć Konto, dokonać zakup&oacute;w w&nbsp;Księgarniaie i&nbsp;zapisać się na newsletter Klient musi posiadać ważny/aktywny adres e-mail.</span></span></span></li>
                    </ol>

                    <p style="margin:0cm 0cm 8pt 36pt">&nbsp;</p>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>&sect; 2</b></span></span></span></p>

                    <p align="center" style="margin-bottom:12.0pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>Og&oacute;lne zasady korzystania ze Księgarni</b></span></span></span></p>

                    <ol>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Korzystanie ze Księgarni wymaga spełnienia przez urządzenie końcowe i&nbsp;system teleinformatyczny, z&nbsp;kt&oacute;rego korzysta Użytkownik, minimalnych Wymagań Technicznych.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Akceptacja Regulaminu jest dobrowolna, ale konieczna w&nbsp;celu dokonania zakupu w&nbsp;Księgarni lub utworzenia Konta Klienta. Klient może korzystać z&nbsp;usług świadczonych przez Usługodawcę określonych w&nbsp;&sect; 4&nbsp;ust. 1&nbsp; Regulaminu w&nbsp;wybranym przez siebie zakresie.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Sprzedawca informuje, że korzystanie przez Użytkownika ze Księgarni za pośrednictwem przeglądarki internetowej, w&nbsp;tym składanie Zam&oacute;wienia, a&nbsp;także nawiązywanie połączenia telefonicznego ze Sprzedawcą może być związane z&nbsp;koniecznością poniesienia przez Użytkownika koszt&oacute;w połączenia z&nbsp;siecią Internet (opłata za przesyłanie danych) lub koszt&oacute;w połączenia telefonicznego. Powyższe opłaty nie są pobierane przez Sprzedawcę, ale przez dostawcę publicznie dostępnych usług telekomunikacyjnych w&nbsp;rozumieniu ustawy Prawo telekomunikacyjne, z&nbsp;kt&oacute;rego usług korzysta Użytkownik. Dostawca, o&nbsp;kt&oacute;rym mowa w&nbsp;zdaniu poprzednim, nie jest podwykonawcą Sprzedawcy.</span></span></span></li>
                    </ol>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt">&nbsp;</p>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>&sect; 3</b></span></span></span></p>

                    <p align="center" style="text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>Kontakt ze Sprzedawcą</b></span></span></span></p>

                    <p style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Kontakt ze Sprzedawcą</span></span></span></p>

                    <ol>
                        <li style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Siedziba Sprzedawcy: Wilkowisko 146, 34-617 Wilkowisko</span></span></span></li>
                        <li style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Adres pod kt&oacute;rym można składać reklamacje: Wilkowisko 696, 34-617 Wilkowisko</span></span></span></li>
                        <li style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Adres e-mail Sprzedawcy: zamowienia@ksiegarnia-internetowa.pl</span></span></span></li>
                        <li style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt 36pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Numer telefonu Sprzedawcy: 503527888</span></span></span></li>
                    </ol>

                    <p style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Każdy Użytkownik może porozumiewać się ze Sprzedawcą za pomocą adres&oacute;w i&nbsp;numer&oacute;w telefon&oacute;w podanych w&nbsp;niniejszym paragrafie.</span></span></span></p>

                    <p style="margin-bottom:.0001pt; margin:0cm 0cm 8pt">&nbsp;</p>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>&sect; 4</b></span></span></span></p>

                    <p align="center" style="margin-bottom:12.0pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>Zawarcie i&nbsp;rozwiązanie Umowy o&nbsp;świadczenie Usług</b></span></span></span></p>

                    <ol>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Sprzedawca świadczy za pośrednictwem Księgarni w&nbsp;szczeg&oacute;lności następujące nieodpłatne Usługi elektroniczne na rzecz Użytkownik&oacute;w:</span></span></span></li>
                    </ol>

                    <ol style="list-style-type:lower-alpha">
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">umożliwienie utworzenia Konta Klienta;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">umożliwianie składania Zam&oacute;wień oraz zawierania Um&oacute;w Sprzedaży;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">umożliwienie korzystania z&nbsp;usług Koszyka;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">umożliwienie przeglądania treści umieszczonych przez Sprzedawcę w&nbsp;ramach Księgarni.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Podtrzymanie sesji.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Przechowywanie historii zam&oacute;wień.</span></span></span></li>
                    </ol>

                    <ol start="2">
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">W ramach Księgarni Sprzedawca zobowiązuje się do świadczenia usług, o&nbsp;kt&oacute;rych mowa w&nbsp;ust. 1, nieodpłatnie, w&nbsp;zakresie i&nbsp;na warunkach określonych w&nbsp;Regulaminie. Korzystanie z&nbsp;usług wskazanych w&nbsp;ust. 1&nbsp;nie wiąże się z&nbsp;obowiązkiem uiszczenia przez Użytkownika wynagrodzenia na rzecz Sprzedawcy.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Umowa o&nbsp;Świadczenie Usług zostaje zawarta z&nbsp;chwilą skutecznego wypełnienia i&nbsp;zaakceptowania przez Użytkownika (przesłania Sprzedawcy) formularza rejestracyjnego w&nbsp;celu utworzenia Konta Klienta. Zawarcie Umowy o&nbsp;Świadczenie Usług wymaga akceptacji Regulaminu. W&nbsp;przypadku korzystania przez Użytkownika ze Księgarni bez utworzenia Konta i&nbsp;bez dokonywania zakupu Produkt&oacute;w, powinien on przestrzegać postanowień Regulaminu w&nbsp;zakresie w&nbsp;jakim faktycznie korzysta z&nbsp;usług świadczonych przez Sprzedawcę.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Utrwalenie, zabezpieczenie, udostępnienie oraz potwierdzenie Użytkownikowi i&nbsp;istotnych postanowień Umowy o&nbsp;Świadczenie Usług następuje w&nbsp;drodze wiadomości e-mail przesłanej na adres e-mail podany przez Użytkownika w&nbsp;formularzu rejestracyjnym.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Umowa o&nbsp;Świadczenie Usług jest zawierana w&nbsp;ramach Księgarni w&nbsp;języku polskim, na czas nieoznaczony.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Użytkownik zobowiązany jest w&nbsp;szczeg&oacute;lności do:</span></span></span></li>
                    </ol>

                    <ol style="list-style-type:lower-alpha">
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">podawania w&nbsp;Zam&oacute;wieniu oraz w&nbsp;formularzach rejestracyjnych przy tworzeniu Konta Klienta wyłącznie prawdziwych, aktualnych i&nbsp;wszystkich koniecznych danych;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">niezwłocznego aktualizowania danych, w&nbsp;tym danych osobowych, podanych przez Użytkownika Sprzedawcy w&nbsp;związku z&nbsp;zawarciem Umowy o&nbsp;Świadczenie Usług lub Umowy Sprzedaży, w&nbsp;szczeg&oacute;lności w&nbsp;zakresie w&nbsp;jakim jest to konieczne dla prawidłowego ich wykonania;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">korzystania z&nbsp;usług oferowanych przez Sprzedawcę w&nbsp;spos&oacute;b zgodny z&nbsp;przepisami obowiązującego prawa, postanowieniami Regulaminu, a&nbsp;także z&nbsp;przyjętymi w&nbsp;danym zakresie zwyczajami i&nbsp;zasadami wsp&oacute;łżycia społecznego w&nbsp;tym w&nbsp;spos&oacute;b nieuciążliwy dla pozostałych Użytkownik&oacute;w oraz dla Sprzedawcy i&nbsp;niezakł&oacute;cający pracy Sprzedawcy lub Księgarni;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">terminowej zapłaty ceny i&nbsp;innych ustalonych przez Użytkownika i&nbsp;Sprzedawcę koszt&oacute;w;</span></span></span></li>
                    </ol>

                    <ol start="7">
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Użytkownik może rozwiązać Umowę o&nbsp;Świadczenie Usług ze skutkiem natychmiastowym, w&nbsp;każdym czasie, bez wskazywania przyczyn i&nbsp;ponoszenia koszt&oacute;w, poprzez przesłanie odpowiedniego oświadczenia Sprzedawcy, w&nbsp;formie:</span></span></span>

                            <ol style="list-style-type:lower-alpha">
                                <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">pisemnej; albo</span></span></span></li>
                                <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">wiadomości e-mail na adres: zamowienia@ksiegarnia-internetowa.pl</span></span></span></li>
                            </ol>
                        </li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Sprzedawca może w&nbsp;każdym czasie rozwiązać Umowę o&nbsp;Świadczenie Usług z&nbsp;Użytkownikiem za odpowiednim, co najmniej 14&ndash;dniowym okresem wypowiedzenia, z&nbsp;ważnych powod&oacute;w rozumianych wyłącznie jako: naruszanie przez Użytkownika postanowień Regulaminu lub podejmowania przez Użytkownika działań sprzecznych z&nbsp;prawem lub szkodliwych dla Księgarni. Sprzedawca swoje oświadczenie w&nbsp;tym zakresie wysyła na adres e-mail podany przez Użytkownika podczas utworzenia Konta Klienta.</span></span></span></li>
                    </ol>

                    <p style="margin-bottom:.0001pt; margin:0cm 0cm 8pt">&nbsp;</p>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>&sect; 5</b></span></span></span></p>

                    <p align="center" style="margin-bottom:12.0pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>Reklamacje Usług</b></span></span></span></p>

                    <ol>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Użytkownik ma prawo do zgłoszenia reklamacji usług świadczonych przez Sprzedawcę w&nbsp;terminie 14 dni od stwierdzenia nieprawidłowości w&nbsp;świadczonych przez Sprzedawcę usługach.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Użytkownik może zgłosić Sprzedawcy reklamację świadczonych przez niego usług korzystając w&nbsp;szczeg&oacute;lności na piśmie albo drogą mailową na dane wskazane w&nbsp;&sect; 3&nbsp;Regulaminu. W&nbsp;celu przyspieszenia rozpatrzenia reklamacji, zaleca się podanie w&nbsp;zgłoszeniu reklamacyjnym kr&oacute;tkiego opisu przyczyn uzasadniających reklamację oraz dane kontaktowe Użytkownika zgłaszającego reklamację.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Reklamacja zostanie rozpatrzona przez Sprzedawcę w&nbsp;terminie 14 dni od otrzymania przez Sprzedawcę zgłoszenia reklamacyjnego Użytkownika.</span></span></span></li>
                    </ol>

                    <p style="margin:0cm 0cm 8pt">&nbsp;</p>

                    <p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>&sect; 6</b></span></span></span></p>

                    <p align="center" style="text-align:center; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif"><b>Przyjmowanie Zam&oacute;wień. Zawieranie Umowy Sprzedaży.</b></span></span></span></p>

                    <ol>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Zam&oacute;wienia na Produkty można składać 24h na dobę 7&nbsp;dni w&nbsp;tygodniu.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Zam&oacute;wienie na Produkty może zostać złożone zar&oacute;wno przez Klienta, kt&oacute;ry posiada Konto,<b> </b>jak r&oacute;wnież Klienta, kt&oacute;ry nie posiada Konta.</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient składa Zam&oacute;wienie w&nbsp;następujący spos&oacute;b:</span></span></span></li>
                    </ol>

                    <ol>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient dodaje wybrany/e Produkt/y do Koszyka po czym przechodzi do formularza Zam&oacute;wienia;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient w&nbsp;formularzu Zam&oacute;wienia wskazuje:</span></span></span></li>
                    </ol>

                    <ul>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">zamawiany Produkt i&nbsp;ilość zamawianego Produktu; </span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">adres, na jaki ma być dostarczony Produkt;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">adres elektroniczny (e-mail) i&nbsp;telefon kontaktowy;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">spos&oacute;b dostawy;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">spos&oacute;b płatności.</span></span></span></li>
                    </ul>

                    <ol start="3">
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient, kt&oacute;ry posiada Konto potwierdza dane niezbędne do złożenia Zam&oacute;wienia i&nbsp;wykonania Umowy Sprzedaży;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient, kt&oacute;ry nie posiada Konta, uzupełnia dane niezbędne do złożenia Zam&oacute;wienia i&nbsp;wykonania Umowy Sprzedaży;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">do momentu uruchomienia przez Klienta funkcjonalności oznaczonej komunikatem &bdquo;Potwierdzam rezerwację&rdquo; (moment złożenia Zam&oacute;wienia) Klient ma możliwość samodzielnego korygowania wprowadzonych do Koszyka lub Zam&oacute;wienia danych, w&nbsp;szczeg&oacute;lności ich edycji i&nbsp;poprawy, w&nbsp;tym ma on możliwość dodawania/usuwania Produktu/t&oacute;w, modyfikacji sposobu płatności lub sposobu doręczenia, zmiany adresu do doręczeń;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Klient składa Sprzedawcy Zam&oacute;wienie poprzez uruchomienie funkcjonalności Księgarni oznaczonej komunikatem &bdquo;Potwierdzam rezerwację&rdquo;. Złożenie Zam&oacute;wienia stanowi oświadczenie woli Klienta wyrażające bezpośrednią wolę zawarcia Umowy Sprzedaży na odległość, za pośrednictwem Księgarni i&nbsp;oznacza złożenie zam&oacute;wienia pociągającego za sobą obowiązek zapłaty;</span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Sprzedawca w&nbsp;odpowiedzi na Zam&oacute;wienie Klienta niezwłocznie wysyła do Klienta wiadomość elektroniczną, na podany w&nbsp;tym celu przez Klienta adres, e-mail z&nbsp;potwierdzeniem otrzymania Zam&oacute;wienia i&nbsp;przyjęciem oferty składanej przez Klienta bądź informacji o&nbsp;braku możliwości jej przyjęcia. </span></span></span></li>
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Z chwilą potwierdzenia, poprzez wiadomość e-mail, przyjęcia Zam&oacute;wienia do realizacji przez Sprzedawcę, Umowa Sprzedaży uważana jest za zawartą. Umowa Sprzedaży jest zawierana w&nbsp;języku polskim.</span></span></span></li>
                    </ol>

                    <ol start="4">
                        <li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 8pt"><span style="font-size:11pt"><span style="line-height:150%"><span style="font-family:Calibri,sans-serif">Utrwalenie, zabezpieczenie, udostępnienie oraz potwierdzenie Klientowi istotnych postanowień zawieranej Umowy Sprzedaży następuje poprzez przesłanie Klientowi wiadomości e-mail z&nbsp;potwierdzeniem złożonego Zam&oacute;wienia i&nbsp;zawarcia Umowy Sprzedaży na odległość oraz poprzez dołączenie do przesyłki zawierającej Produkt fiskalnego dowodu zakupu &ndash; paragonu lub faktury VAT w&nbsp;zależności od wyboru dokonanego przez Klienta w&nbsp;momencie składania Zam&oacute;wienia.</span></span></span></li>
                    </ol>',
            'meta_title' => 'Regulamin',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'privacy-policy',
            'sub_title' => '',
            'title' => 'Polityka prywatności',
            'preface' => '',
            'content' => '<p align="center" style="margin-bottom:.0001pt; text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">POLITYKA PRYWATNOŚCI I&nbsp;COOKIES</span></span></b></span></span></span></p>  
            <p align="center" style="margin-bottom:18.0pt; text-align:center; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><i><span style="font-size:12.0pt"><span cambria="" style="font-family:">Obowiązuje od 01.01.2019 r.</span></span></i></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt">&nbsp;</p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">W celu realizacji zasady zgodnego z&nbsp;prawem, rzetelnego i&nbsp;przejrzystego przetwarzania danych osobowych Klient&oacute;w w&nbsp;trakcie korzystania z&nbsp;naszych usług, przyjmujemy dokument zwany Polityką Prywatności i&nbsp;Cookies.</span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">1. POJĘCIA UŻYWANE W&nbsp;POLITYCE PRYWATNOŚCI</span></span></b></span></span></span></p>  <ol style="list-style-type:lower-alpha"> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Księgarnia</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:"> &ndash; Księgarnia Internetowa, KRS </span></span><span style="font-size:12.0pt"><span cambria="" style="font-family:">0000000000</span></span><span style="font-size:12.0pt"><span cambria="" style="font-family:">, NIP 0000000000, zwana dalej r&oacute;wnież: &bdquo;<b>Administratorem</b>&rdquo;.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Dane osobowe</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:"> &ndash; oznaczają informacje o&nbsp;zidentyfikowanej lub możliwej do zidentyfikowania osobie fizycznej; możliwa do zidentyfikowania osoba fizyczna to osoba, kt&oacute;rą można bezpośrednio lub pośrednio zidentyfikować, w&nbsp;szczeg&oacute;lności na podstawie identyfikatora takiego jak imię i&nbsp;nazwisko, numer identyfikacyjny, dane o&nbsp;lokalizacji, identyfikator internetowy lub jeden bądź kilka szczeg&oacute;lnych czynnik&oacute;w określających fizyczną, fizjologiczną, genetyczną, psychiczną, ekonomiczną, kulturową lub społeczną tożsamość osoby fizycznej, w&nbsp;tym IP urządzenia, dane o&nbsp;lokalizacji, identyfikator internetowy oraz informacje gromadzone za pośrednictwem plik&oacute;w cookie oraz innej podobnej technologii.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Plik cookie</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:">- </span></span><span style="font-size:12.0pt"><span style="background:white"><span cambria="" style="font-family:">Niewielki&nbsp;<b>plik</b>&nbsp;zapisywany na komputerze użytkownika, w&nbsp;kt&oacute;rym przechowywane są ustawienia i&nbsp;inne informacje używane na odwiedzanych przez niego stronach.&nbsp;<b>Pliki cookie</b>&nbsp;mogą zawierać ustawienia witryn lub być używane do śledzenia interakcji użytkownik&oacute;w z&nbsp;witryną dla dostosowania treści do preferencji użytkownika.</span></span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">RODO &ndash;</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:">&nbsp;Rozporządzenie Parlamentu Europejskiego i&nbsp;Rady (UE) 2016/679 z&nbsp;dnia 27 kwietnia 2016 r. w&nbsp;sprawie ochrony os&oacute;b fizycznych w&nbsp;związku z&nbsp;przetwarzaniem danych osobowych i&nbsp;w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (og&oacute;lne rozporządzenie o&nbsp;ochronie danych).</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Serwis &ndash;</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:">&nbsp;serwis internetowy należący do&nbsp;Księgarnia, w&nbsp;ramach kt&oacute;rych Administrator świadczy usługi. Serwis umieszczony jest pod następującym adresem: <a href="http://www.ksiegarnia-internetowa.pl">www.ksiegarnia-internetowa.pl</a></span></span></span></span></span></li>	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Użytkownik &ndash;</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:">&nbsp;każda osoba fizyczna odwiedzająca serwisy należące do Księgarnia</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Klient &ndash;</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:">&nbsp;użytkownik zarejestrowany lub niezarejestrowany składający zam&oacute;wienia w&nbsp;sklepie internetowym</span></span></span></span></span></li> </ol>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">2.ADMINISTRATOR</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">Administratorem Serwisu</span></span></b><span style="font-size:12.0pt"><span cambria="" style="font-family:"> oraz Administratorem Danych osobowych Użytkownik&oacute;w Serwisu w&nbsp;rozumieniu RODO jest Księgarnia Internetowa&nbsp; z&nbsp;siedzibą w&nbsp;Wilkowsku 146, 34-617 Wilkowisko, wpisana do rejestru przedsiębiorc&oacute;w Krajowego Rejestru Sądowego prowadzonego przez Sądu Rejonowego dla Krakowa-Śródmieścia w Krakowie, XII Wydział Gospodarczy KRS pod numerem KRS 0000000000. </span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">E-mail: biuro@ksiegarnia-internetowa.pl</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">3. JAKIE DANE OSOBOWE SĄ PRZETWARZANE</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Księgarnia przetwarza dane osobowe podane przez Klienta podczas rejestracji lub zam&oacute;wienia produkt&oacute;w w&nbsp;księgarni internetowej takie jak:</span></span></span></span></span></p>  <ol style="list-style-type:lower-alpha"> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Imię </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Nazwisko</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Firma</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Kod pocztowy</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Miejscowość wraz z&nbsp;ulicą i&nbsp;numerem posesji/mieszkania</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Kraj</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Numer telefonu kontaktowego</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 10pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Adres e-mail</span></span></span></span></span></li> </ol>  
            <p style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Księgarnia przetwarza dane osobowe Użytkownika podane przy wypełnianiu formularza kontaktowego takie jak: imię, nazwisko, e-mail, numer telefonu kontaktowego</span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">4. CELE PRZETWARZANIA &nbsp;DANYCH OSOBOWYCH</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Księgarnia może przetwarzać dane osobowe Klient&oacute;w w&nbsp;celu: </span></span></span></span></span></p>  <ol style="list-style-type:lower-alpha"> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">zawarcia i&nbsp;wykonania umowy o&nbsp;świadczenie usług drogą elektroniczną &ndash; podstawą przetwarzania jest niezbędność do wykonania umowy o&nbsp;świadczenie usług drogą elektroniczną (art. 6&nbsp;ust. 1&nbsp;lit. b&nbsp;RODO); </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">realizacji zam&oacute;wień w&nbsp;księgarni internetowej pod adresem </span></span><a href="http://www.ksiegarnia-internetowa.pl" style="color:blue; text-decoration:underline"><span style="font-size:12.0pt"><span cambria="" style="font-family:">www.ksiegarnia-internetowa.pl</span></span></a><span style="font-size:12.0pt"><span cambria="" style="font-family:"> &ndash; podstawą przetwarzania jest niezbędność do zawarcia i&nbsp;wykonania umowy sprzedaży zawartej na odległość za pośrednictwem sklepu internetowego (art. 6&nbsp;ust. 1&nbsp;lit. b&nbsp;RODO); </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">prowadzenia dokumentacji rachunkowej związanej z&nbsp;zawieranymi umowami sprzedaży &ndash; podstawą przetwarzania jest niezbędność wypełnienia obowiązku prawnego ciążącego na Administratorze (art. 6&nbsp;ust. 1&nbsp;lit c&nbsp;RODO),</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">komunikacji z&nbsp;Klientem &ndash; podstawą przetwarzania jest zgoda Klienta, </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">informowania o&nbsp;statusie zam&oacute;wienia -&nbsp;podstawą przetwarzania jest niezbędność do zawarcia i&nbsp;wykonania umowy sprzedaży zawartej na odległość za pośrednictwem sklepu internetowego (art. 6&nbsp;ust. 1&nbsp;lit. b&nbsp;RODO);, </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">przesyłania newslettera, jeśli Klient wyraził chęć jego otrzymywania &ndash; podstawą przetwarzania jest uzasadniony interes Księgarnia polegający na prowadzeniu marketingu bezpośredniego towar&oacute;w i&nbsp;usług, </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">udzielenia odpowiedzi na zapytania zgłaszane przez formularz kontaktowy &ndash; podstawą przetwarzania jest uzasadniony interes Księgarnia polegający na prowadzenie marketingu bezpośredniego towar&oacute;w i&nbsp;usług, </span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">uczestnictwa w&nbsp;konkursach organizowanych w&nbsp;Serwisie &ndash; podstawa przetwarzania danych będzie każdorazowo wskazana w&nbsp;Regulaminie konkursu.</span></span></span></span></span></li> </ol>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt">&nbsp;</p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">5. CZAS PRZETWARZANIA DANYCH OSOBOWYCH?</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Dane osobowe Administrator przechowuje przez okres posiadania konta w&nbsp;Serwisie. Po usunięciu konta dane zostają usunięte z&nbsp;baz danych Serwis&oacute;w.</span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Dane osobowe Użytkownik&oacute;w niezarejestrowanych są przechowywane w&nbsp;historii zam&oacute;wień. Dane osobowe są przechowywane przez czas wynikający z&nbsp;obowiązujących przepis&oacute;w prawa dotyczących przechowywania dokumentacji rachunkowej. </span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">6.PRAWA KLIENT&Oacute;W ZWIĄZANE Z&nbsp;PRZETWARZANIEM DANYCH OSOBOWYCH </span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Administrator zapewnia realizację uprawnień wskazanych poniżej. Klient może realizować swoje prawa przez zgłoszenie żądania drogą mailową na adres </span></span><a href="mailto:biuro@ksiegarnia-internetowa.pl" style="color:blue; text-decoration:underline">biuro@ksiegarnia-internetowa.pl</a><span style="font-size:12.0pt"><span cambria="" style="font-family:"> lub przez formularz kontaktowy na stronie www.ksiegarnia-internetowa.pl, kt&oacute;re to żądanie będzie rozpoznane niezwłocznie, w&nbsp;godzinach urzędowania Księgarnia.</span></span></span></span></span></p>  <ol style="list-style-type:lower-alpha"> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Klient ma prawo uzyskać od nas potwierdzenie, czy przetwarzamy jego dane osobowe</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Prawo do&nbsp;sprzeciwu wobec wykorzystania danych.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Prawo do cofnięcia zgody na przetwarzanie danych, gdy podstawą przetwarzania jest zgoda Użytkownika.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Prawo do&nbsp;usunięcia danych (&bdquo;prawo do&nbsp;bycia zapomnianym&rdquo;) Po zgłoszeniu żądania usunięcia danych osobowych i&nbsp; jego realizacji nie będziemy mogli świadczyć usług z&nbsp;udziałem danych osobowych. Klient ma prawo do&nbsp;żądania usunięcia wszystkich lub niekt&oacute;rych danych osobowych.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Klient ma prawo do&nbsp;żądania ograniczenia przetwarzania jego danych osobowych. Jeżeli klient zgłosi takie żądanie, do&nbsp;czasu jego rozpatrzenia nie będziemy wykorzystywać jego danych.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Prawo wglądu do danych osobowych, ich poprawy, aktualizacji.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Prawo przekazania danych osobowym przez Księgarnia innemu administratorowi na życzenie Klienta.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Klient może zgłaszać do&nbsp;nas skargi, zapytania i&nbsp;wnioski dotyczące przetwarzania danych osobowych oraz realizacji przysługujących mu uprawnień.</span></span></span></span></span></li> 	<li style="margin-bottom:18.0pt; margin:0cm 0cm 10pt 36pt" value="1"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Jeżeli Klient uważa, że jego prawo do&nbsp;ochrony danych osobowych lub inne prawa przyznane mu na mocy RODO zostały naruszone, ma prawo do&nbsp;wniesienia skargi Prezesa Urzędu Ochrony Danych Osobowych.</span></span></span></span></span></li> </ol>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">7. BEZPIECZEŃSTWO DANYCH OSOBOWYCH</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Dokładamy wszelkich starań, aby zapewnić bezpieczeństwo danych osobowych Klienta. Serwisy używają szyfrowanej transmisji danych (SSL) podczas rejestracji i&nbsp;pracy naszych konsultant&oacute;w, co zapewnia ochronę identyfikujących danych oraz znacząco utrudnia przechwycenie dostępu do&nbsp;danych osobowych Klient&oacute;w i&nbsp; Użytkownik&oacute;w przez nieupoważnione systemy lub osoby.</span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">8. &nbsp;PLIKI COOKIES</span></span></b></span></span></span></p>  <ol style="list-style-type:lower-alpha"> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Serwis korzysta z&nbsp;plik&oacute;w cookies.</span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Pliki cookies (tzw. &bdquo;ciasteczka&rdquo;) stanowią dane informatyczne, w&nbsp;szczeg&oacute;lności pliki tekstowe, kt&oacute;re przechowywane są w&nbsp;urządzeniu końcowym Użytkownika Serwisu i&nbsp;przeznaczone są do korzystania ze stron internetowych Serwisu. Cookies zazwyczaj zawierają nazwę strony internetowej, z&nbsp;kt&oacute;rej pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny numer.</span></span></span></span></span></span></li> <li style="margin-bottom:.0001pt; margin:0cm 0cm 10pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Podmiotem zamieszczającym na urządzeniu końcowym Użytkownika Serwisu pliki cookies oraz uzyskującym do nich dostęp jest Administrator Serwisu.</span></span></span></span></span></span></li> </ol>  
            <p style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Pliki cookies wykorzystywane są w&nbsp;następujących celach:</span></span></span></span></span></span></p>  <ol start="3" style="list-style-type:lower-alpha"> 	<li style="list-style-type:none"> 	<ul style="list-style-type:disc"> 		<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">tworzenia statystyk, kt&oacute;re pomagają zrozumieć, w&nbsp;jaki spos&oacute;b Użytkownicy Serwisu korzystają ze stron internetowych, co umożliwia ulepszanie ich struktury i&nbsp;zawartości;</span></span></span></span></span></span></li> 		<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">utrzymanie sesji Użytkownika Serwisu (po zalogowaniu), dzięki kt&oacute;rej Użytkownik nie musi na każdej podstronie Serwisu ponownie wpisywać loginu i&nbsp;hasła;</span></span></span></span></span></span></li> 		<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">określania profilu użytkownika w&nbsp;celu wyświetlania mu dopasowanych materiał&oacute;w w&nbsp;sieciach reklamowych, w&nbsp;szczeg&oacute;lności sieci Google.</span></span></span></span></span></span></li> 	</ul> 	</li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">W ramach Serwisu stosowane są dwa zasadnicze rodzaje plik&oacute;w cookies: &bdquo;sesyjne&rdquo; (session cookies) oraz &bdquo;stałe&rdquo; (persistent cookies). Cookies &bdquo;sesyjne&rdquo; są plikami tymczasowymi, kt&oacute;re przechowywane są w&nbsp;urządzeniu końcowym Użytkownika do czasu wylogowania, opuszczenia strony internetowej lub wyłączenia oprogramowania (przeglądarki internetowej). &bdquo;Stałe&rdquo; pliki cookies przechowywane są w&nbsp;urządzeniu końcowym Użytkownika przez czas określony w&nbsp;parametrach plik&oacute;w cookies lub do czasu ich usunięcia przez Użytkownika.</span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; text-align:justify; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Żaden z&nbsp;plik&oacute;w cookie używanych przez Serwis, nie zawiera informacji osobistych i&nbsp;nie może posłużyć do identyfikacji konkretnego Użytkownika.</span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Oprogramowanie do przeglądania stron internetowych (przeglądarka internetowa) zazwyczaj domyślnie dopuszcza przechowywanie plik&oacute;w cookies w&nbsp;urządzeniu końcowym Użytkownika. Użytkownicy Serwisu mogą dokonać zmiany ustawień w&nbsp;tym zakresie. Przeglądarka internetowa umożliwia usunięcie plik&oacute;w cookies. Możliwe jest także automatyczne blokowanie plik&oacute;w cookies Szczeg&oacute;łowe informacje na ten temat zawiera pomoc lub dokumentacja przeglądarki internetowej.</span></span> <span style="font-size:12.0pt"><span cambria="" style="font-family:">Sekcja &bdquo;pomoc&rdquo; w&nbsp;przeglądarce najlepiej opisze jak wyłączyć i&nbsp;skasować pliki cookie. Poniżej zamieszczamy linki do instrukcji zarządzania plikami cookies dla najpopularniejszych przeglądarek:</span></span></span></span></span></span></li> </ol>  <ul> 	<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span lang="EN-GB" style="font-size:12.0pt"><span cambria="" style="font-family:">Firefox <a href="http://support.mozilla.org/pl/kb/ciasteczka">http://support.mozilla.org/pl/kb/ciasteczka</a></span></span></span></span></span></span></li> 	<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span lang="EN-GB" style="font-size:12.0pt"><span cambria="" style="font-family:">Internet Explorer <a href="http://support2.microsoft.com/kb/278835/pl">http://support2.microsoft.com/kb/278835/pl</a></span></span></span></span></span></span></li> 	<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span lang="EN-GB" style="font-size:12.0pt"><span cambria="" style="font-family:">Chrome <a href="https://support.google.com/chrome/answer/95647?hl=pl&amp;ref_topic=3421433">https://support.google.com/chrome/answer/95647?hl=pl&amp;ref_topic=3421433</a></span></span></span></span></span></span></li> 	<li style="margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span lang="EN-GB" style="font-size:12.0pt"><span cambria="" style="font-family:">Edge <a href="https://support.microsoft.com/pl-pl/help/10607">https://support.microsoft.com/pl-pl/help/10607</a></span></span><a href="https://support.microsoft.com/pl-pl/help/10607"> </a></span></span></span></span></li> </ul>  <ol start="7" style="list-style-type:lower-alpha"> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Ograniczenia stosowania plik&oacute;w cookies mogą wpłynąć na niekt&oacute;re funkcjonalności dostępne na stronach internetowych Serwisu.</span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Pliki cookies zamieszczane w&nbsp;urządzeniu końcowym Użytkownika Serwisu i&nbsp;wykorzystywane mogą być r&oacute;wnież przez wsp&oacute;łpracujących z&nbsp;operatorem Serwisu reklamodawc&oacute;w oraz partner&oacute;w.</span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt" value="1"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Zalecamy przeczytanie polityki ochrony prywatności tych firm, aby poznać zasady korzystania z&nbsp;plik&oacute;w cookie wykorzystywane w&nbsp;statystykach: Polityka ochrony prywatności Google Analytics <a href="https://policies.google.com/privacy?hl=pl&amp;gl=ZZ"><b>https://policies.google.com/privacy?hl=pl&amp;gl=ZZ</b></a></span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 0.0001pt 36pt" value="10"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Pliki cookie mogą być wykorzystane przez sieci reklamowe, w&nbsp;szczeg&oacute;lności sieć Google, do wyświetlenia reklam dopasowanych do sposobu, w&nbsp;jaki użytkownik korzysta z&nbsp;Serwisu. W&nbsp;tym celu mogą zachować informację o&nbsp;ścieżce nawigacji użytkownika lub czasie pozostawania na danej stronie.</span></span></span></span></span></span></li> 	<li style="margin-bottom:.0001pt; margin:0cm 0cm 10pt 36pt"><span style="font-size:11pt"><span style="background:white"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">W zakresie informacji o&nbsp;preferencjach użytkownika gromadzonych przez sieć reklamową Google użytkownik może przeglądać i&nbsp;edytować informacje wynikające z&nbsp;plik&oacute;w cookies przy pomocy narzędzia: https://www.google.com/ads/preferences/</span></span></span></span></span></span></li> </ol>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt">&nbsp;</p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">9. ORGANIZACJA KONKURS&Oacute;W</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Do każdego organizowanego przez Serwis konkursu tworzony jest regulamin i&nbsp;zostaje udostępniony w&nbsp;Serwisie.</span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt">&nbsp;</p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><b><span style="font-size:12.0pt"><span cambria="" style="font-family:">10. ZMIANY W&nbsp;POLITYCE PRYWATNOŚCI I&nbsp;COOKIES</span></span></b></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Administrator zastrzega sobie zmiany w&nbsp;Polityce Prywatności i&nbsp;Cookies stosownie do&nbsp;zmian prawnych RODO oraz informatycznych. O&nbsp;wszelkich zmianach lub uzupełnieniach poinformujemy poprzez zamieszczenie odpowiednich informacji na naszej stronie internetowej www.Księgarnia-sa.com oraz  .ksiegarnia-internetowa.pl.</span></span></span></span></span></p>  
            <p style="margin-bottom:18.0pt; margin:0cm 0cm 10pt"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt"><span cambria="" style="font-family:">Polityka Prywatności nie ogranicza żadnych uprawnień przysługujących Ci zgodnie z&nbsp;przepisami prawa. </span></span></span></span></span></p>',
            'meta_title' => 'Polityka prywatności',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'login',
            'sub_title' => '',
            'title' => 'Logowanie',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Zaloguj się',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'register',
            'sub_title' => 'Dołącz do nas',
            'title' => 'Rejestracja',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Zarejestruj się',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'verify-email',
            'sub_title' => '',
            'title' => 'Zweryfikuj swój adres e-mail',
            'preface' => '',
            'content' => 'Weryfikacja zakończona powodzeniem.',
            'meta_title' => 'Zweryfikuj swój adres e-mail',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'reset-password',
            'sub_title' => '',
            'title' => 'Zresetuj hasło',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Zresetuj hasło',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'forgot-password',
            'sub_title' => '',
            'title' => 'Przypomnij hasło',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Przypomnij hasło',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'reset-password-complete',
            'sub_title' => '',
            'title' => 'Zresetuj hasło',
            'preface' => '',
            'content' => 'Zmiana hasła zakończona powodzeniem.',
            'meta_title' => 'Zresetuj hasło',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'account',
            'sub_title' => '',
            'title' => 'Moje konto',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Moje konto',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'edit',
            'sub_title' => '',
            'title' => 'Edycja danych',
            'preface' => '',
            'content' => 'Edycja danych zakończona powodzeniem.',
            'meta_title' => 'Edycja danych',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'change-password',
            'sub_title' => '',
            'title' => 'Zmiana hasła',
            'preface' => '',
            'content' => 'Zmiana hasła zakończona powodzeniem',
            'meta_title' => 'Zmiana hasła',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'orders',
            'sub_title' => '',
            'title' => 'Historia wypożyczeń',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Historia wypożyczeń',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);

        DB::table('pages')->insert([
            'slug' => 'cart',
            'sub_title' => '',
            'title' => 'Koszyk',
            'preface' => '',
            'content' => '',
            'meta_title' => 'Koszyk',
            'img_url' => '',
            'img_alt' => '',
            'redirect_url' => '',
            'redirect_desc' => '',
        ]);
    }
}
