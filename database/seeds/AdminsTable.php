<?php

use Illuminate\Database\Seeder;

class AdminsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'login' => 'admin',
            'password' => '$2y$10$YJkK.be01otXJsiDeYBOWec1979zdd6pcEVWVdJ0NMTRLPmrRJfv2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
