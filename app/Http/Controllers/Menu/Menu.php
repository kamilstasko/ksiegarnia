<?php

namespace App\Http\Controllers\Menu;
use Illuminate\Support\Facades\DB;

class Menu
{
    public static function generateMenuHeader()
    {
        $data = DB::table('menu')->where('type',1)->get();

        $menu = '<nav><ul>';
        foreach ($data as $value) {
            $menu .= '<li class="" data-id="'.$value->id.'">';
            $menu .= '<a href="'.url($value->link).'">'.$value->title.'</a>';
            $menu .= '<div class="megaMenuContainer"></div></li>';
        }

        $menu .= '</ul></nav>';

        return eval("?> $menu <?php ");
    }

    public static function generateMenuFooter($type)
    {
        $data = DB::table('menu')->where('type', $type)->get();

        $menu = '<nav class="footerNav"><ul>';
        foreach ($data as $value) {
            $menu .= '<li class="" data-id="'.$value->id.'">';
            $menu .= '<a href="'.url($value->link).'">'.$value->title.'</a></li>';
        }

        $menu .= '</ul></nav>';

        return eval("?> $menu <?php ");
    }

}