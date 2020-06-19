<?php

use Illuminate\Database\Seeder;

class ConfigTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->insert([
            'firm' => 'Praca licencjacka',
            'address' => '34-617 Wilkowisko',
            'town' => 'Wilkowisko 146',
            'email' => 'kolo8788@wp.pl',
            'phone' => '503527862',
            'service_name' => 'Księgarnia internetowa',
            'service_url' => '192.168.10.129',
            'krs' => '0000000000',
            'krs_text' => 'XII Wydział  Gospodarczy Krajowego Rejestru Sądowego Sądu Rejonowego dla Krakowa-Śródmieścia w Krakowie',
            'krs_text2' => 'Wysokość kapitału zakładowego: 10 000 000 zł',
            'nip' => '000-00-00-000',
            'regon' => '000000000',
            'bank_name' => 'Narodowy Bank Polski Oddział Okręgowy w Krakowie',
            'bank_number' => '00 0000 0000 0000 0000 0000 0000',
            'office_person' => 'Kamil Staśko',
            'office_phone' => '503527862',
            'office_email' => 'kolo8788@wp.pl',
        ]);
    }
}
