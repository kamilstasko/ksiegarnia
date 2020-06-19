<?php

use Illuminate\Database\Seeder;

class RecommendationCategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["001001", "001002", "001003", "001004", "001005", "001006", "002001", "002002", "002003", "002004", "002005", "003001", "003002", "003003", "003004", "003005"];

        for ($i = 1; $i <= 1000; ++$i) {
            $time = new DateTime(rand(1,28).'-0'.rand(1,2).'-2019');

            DB::table('recommendation_category')->insert([
                'id_cat' => $categories[rand(0,(sizeof($categories))-1)],
                'id_users' => rand(1,100),
                'date' => $time,
            ]);
        }
    }
}
