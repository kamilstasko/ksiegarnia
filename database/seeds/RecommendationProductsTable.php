<?php

use Illuminate\Database\Seeder;

class RecommendationProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5000; ++$i) {
            $time = new DateTime(rand(1,28).'-0'.rand(1,2).'-2019');

            DB::table('recommendation_products')->insert([
                'id_products' => rand(1,144),
                'id_users' => rand(1,100),
                'date' => $time,
            ]);
        }
    }
}
