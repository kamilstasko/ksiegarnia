<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Pages extends Controller
{
    public function index($slug)
    {
        $check = DB::table('pages')->where('slug', $slug)->count();
        if (!$check)
            return redirect()->route('404');

        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages($slug)
        );

        return view('pages/'.$slug)->with($data);
    }


}
