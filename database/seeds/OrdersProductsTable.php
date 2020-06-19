<?php

use Illuminate\Database\Seeder;

class OrdersProductsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 1000; ++$i) {
            $count = rand(3,10);
            $last_item = 0;

            for ($j = 0; $j < $count; ++$j) {
                $item = rand(1,352);
                while($item == $last_item)
                    $item = rand(1,352);

                $time = rand(1,28).'-0'.rand(1,5).'-2019';
                $date_rental = new DateTime($time);
                $date_return = new DateTime($time);;
                date_add($date_return, date_interval_create_from_date_string(rand(1,14).' days'));

                DB::table('orders_products')->insert([
                    'id_orders' => $i,
                    'id_products_items' => $item,
                    'date_rental' => $date_rental,
                    'date_return' => $date_return,
                    'price' => rand(24,145)/100,
                    'rate' => rand(1,5),
                ]);
            }
        }
    }
}
