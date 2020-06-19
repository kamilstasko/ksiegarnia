<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Sliders\Slider;
use Illuminate\Support\Facades\DB;
use \App\Product;
use Illuminate\Support\Facades\Auth;

class Homepage extends Controller
{
    public function index()
    {
        $data = array(
            'isHomepage' => true,
            'data' => Controller::dataPages('homepage_infobox'),
            'config' => Controller::config(),
            'slider' => Slider::generateHomeSlider(),
            'infobox' => Homepage::infobox(),
            'recommended' => Product::recommended(Auth::check())
        );

        return view('homepage.homepage')->with($data);
    }

    private function infobox()
    {
        $data = DB::table('pages')->where('slug', 'homepage_infobox')->get();

        $tab = array();

        foreach ($data as $value)
        {
            $tab['sub_title'] = $value->sub_title;
            $tab['title'] = $value->title;
            $tab['content'] = $value->	content;
            $tab['img_url'] = $value->img_url;
            $tab['img_alt'] = $value->img_alt;
            $tab['redirect_url'] = $value->redirect_url;
            $tab['redirect_desc'] = $value->redirect_desc;
        }

        return $tab;
    }
}
