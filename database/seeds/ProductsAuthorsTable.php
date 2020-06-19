<?php

use Illuminate\Database\Seeder;

class ProductsAuthorsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_authors')->insert([
            /*01*/ ['name' => 'Nadia', 'surname' => 'Berkane'],
            /*02*/ ['name' => 'Joanna', 'surname' => 'Krzyżanek'],
            /*03*/ ['name' => 'Bogusław', 'surname' => 'Michalec'],
            /*04*/ ['name' => 'Kiera', 'surname' => 'Cass'],
            /*05*/ ['name' => 'Agnieszka', 'surname' => 'Stelmaszyk'],
            /*06*/ ['name' => 'John', 'surname' => 'Flanagan'],
            /*07*/ ['name' => 'Agnieszka', 'surname' => 'Janiszewska'],
            /*08*/ ['name' => 'Jackie', 'surname' => 'Collins'],
            /*09*/ ['name' => 'Bogusław', 'surname' => 'Śliwerski'],
            /*10*/ ['name' => 'Brunon', 'surname' => 'Hołyst'],
            /*11*/ ['name' => 'Stanisław', 'surname' => 'Sedlaczek'],
            /*12*/ ['name' => 'Katarzyna', 'surname' => 'Marszałek'],
            /*13*/ ['name' => 'Tomasz', 'surname' => 'Konatkowski'],
            /*14*/ ['name' => 'Lisa', 'surname' => 'Unger'],
            /*15*/ ['name' => 'Teri', 'surname' => 'Terry'],
            /*16*/ ['name' => 'Andrzej', 'surname' => 'Pilipiuk'],
            /*17*/ ['name' => 'Andrzej', 'surname' => 'Ziemiański'],
            /*18*/ ['name' => 'Jacek', 'surname' => 'Piekara'],
            /*19*/ ['name' => 'Brian', 'surname' => 'Bendis'],
            /*20*/ ['name' => 'Jason', 'surname' => 'Aaron'],
            /*21*/ ['name' => 'Marc', 'surname' => 'Ellerby'],
            /*22*/ ['name' => 'Grzegorz', 'surname' => 'Rosiński'],
            /*23*/ ['name' => 'Mathieu', 'surname' => 'Mariolle'],
            /*24*/ ['name' => 'Rene', 'surname' => 'Goscinny'],
            /*25*/ ['name' => 'Janusz', 'surname' => 'Christa'],
            /*26*/ ['name' => 'Paweł', 'surname' => 'Szarlota'],
            /*27*/ ['name' => 'Tomasz', 'surname' => 'Kontny'],
            /*28*/ ['name' => 'Władysław', 'surname' => 'Krupka'],
            /*29*/ ['name' => 'Bill', 'surname' => 'Watterson'],
            /*30*/ ['name' => 'Przemysław', 'surname' => 'Wechterowicz'],
            /*31*/ ['name' => 'Shaun', 'surname' => 'Tan'],
            /*32*/ ['name' => 'Bill', 'surname' => 'Watterson'],
            /*33*/ ['name' => 'Urasawa', 'surname' => 'Naoki'],
            /*34*/ ['name' => 'Masashi', 'surname' => 'Kishimoto'],
            /*35*/ ['name' => 'Mihara', 'surname' => 'Mitsukazu'],
            /*36*/ ['name' => 'Taniguchi', 'surname' => 'Jiro'],
            /*37*/ ['name' => 'Mase', 'surname' => 'Motoro'],
            /*38*/ ['name' => 'Urushibara', 'surname' => 'Yuki'],
            /*39*/ ['name' => 'Okazaki', 'surname' => 'Mari'],
            /*40*/ ['name' => 'Patrycja', 'surname' => 'Wojsyk'],
            /*41*/ ['name' => 'Kinga', 'surname' => 'Perczyńska'],
            /*42*/ ['name' => 'Dorota', 'surname' => 'Guzik'],
            /*43*/ ['name' => 'Henryk', 'surname' => 'Sienkiewicz'],
            /*44*/ ['name' => 'Frances', 'surname' => 'Burnett'],
            /*45*/ ['name' => 'Eliza', 'surname' => 'Orzeszkowa'],
            /*46*/ ['name' => 'Bolesław', 'surname' => 'Prus'],
            /*47*/ ['name' => 'B. V.', 'surname' => 'Larson'],
            /*48*/ ['name' => 'Evan', 'surname' => 'Currie'],
            /*49*/ ['name' => 'Stanisław', 'surname' => 'Lem'],
            /*50*/ ['name' => 'Harlan', 'surname' => 'Coben'],
            /*51*/ ['name' => 'Stephen', 'surname' => 'King'],
            /*52*/ ['name' => 'Alex', 'surname' => 'Joe'],
            /*53*/ ['name' => 'Antoni', 'surname' => 'Ossendowski'],
            /*54*/ ['name' => 'Marek', 'surname' => 'Rabij'],
            /*55*/ ['name' => 'Tadeusz', 'surname' => 'Biedzki'],
            /*56*/ ['name' => 'Przemysław', 'surname' => 'Wilczyński'],
            /*57*/ ['name' => 'Bogusław', 'surname' => 'Dąbrowski'],
            /*58*/ ['name' => 'Ewa', 'surname' => 'Kołodziej'],
            /*59*/ ['name' => 'Marzena', 'surname' => 'Filipczak'],
            /*60*/ ['name' => 'Benjamin', 'surname' => 'Renner'],
        ]);
    }
}
