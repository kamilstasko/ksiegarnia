<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class StatementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {
        $data = array(
            'isHomepage' => false,
            'config' => Controller::config(),
            'data' => Controller::dataPages($slug)
        );

        return view('pages.statement')->with($data);
    }


}
