<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ErrorController
{
    public function index()
    {
        $data = array(
            'isHomepage' => false,
            'config' => ErrorController::config(),
            'data' => [
                'meta_title' => '404 - Księgarnia internetowa'
            ]
        );

        return view('pages/404')->with($data);
    }

    private function config()
    {
        $data = DB::table('config')->get();

        $tab = array();

        foreach ($data as $value)
        {
            $tab['firm'] = $value->firm;
            $tab['address'] = $value->address;
            $tab['town'] = $value->town;
            $tab['email'] = $value->email;
            $tab['phone'] = $value->phone;
            $tab['service_name'] = $value->service_name;
            $tab['service_url'] = $value->service_url;
        }

        return $tab;
    }
}
