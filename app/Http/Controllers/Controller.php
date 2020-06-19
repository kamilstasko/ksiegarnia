<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function config()
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
            $tab['krs'] = $value->krs;
            $tab['krs_text'] = $value->krs_text;
            $tab['krs_text2'] = $value->krs_text2;
            $tab['nip'] = $value->nip;
            $tab['regon'] = $value->regon;
            $tab['bank_name'] = $value->bank_name;
            $tab['bank_number'] = $value->bank_number;
            $tab['office_person'] = $value->office_person;
            $tab['office_phone'] = $value->office_phone;
            $tab['office_email'] = $value->office_email;
        }

        return $tab;
    }

    public static function dataPages($slug)
    {
        $data = DB::table('pages')->where('slug', $slug)->get();

        $tab = array();

        foreach ($data as $value)
        {
            $tab['meta_title'] = $value->meta_title;
            $tab['sub_title'] = $value->sub_title;
            $tab['slug'] = $value->slug;
            $tab['title'] = $value->title;
            $tab['preface'] = $value->preface;
            $tab['content'] = $value->	content;
            $tab['img_url'] = $value->img_url;
            $tab['img_alt'] = $value->img_alt;
            $tab['redirect_url'] = $value->redirect_url;
            $tab['redirect_desc'] = $value->redirect_desc;
        }

        return $tab;
    }
}
