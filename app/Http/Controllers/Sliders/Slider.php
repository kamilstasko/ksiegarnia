<?php

namespace App\Http\Controllers\Sliders;
use Illuminate\Support\Facades\DB;

class Slider
{
    public static function generateHomeSlider()
    {
        $data = DB::table('sliders')->get();

        $slider = array();

        foreach ($data as $value)
        {
            $slide['title'] = $value->title;
            $slide['description'] = $value->description;
            $slide['link'] = $value->link;
            $slide['button_description'] = $value->button_description;
            $slide['img_href'] = $value->img_href;
            $slide['img_alt'] = $value->img_alt;

            array_push($slider, $slide);
        }

        return $slider;
    }
}
