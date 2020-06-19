<?php

use Illuminate\Database\Seeder;

class OrdersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 1000; ++$i) {
            DB::table('orders')->insert([
                'id_users' => rand(1,100),
                'date' => new DateTime(rand(1,28).'-0'.rand(1,2).'-2019'),
                'paid_status' => 1,
            ]);
        }
    }
}
