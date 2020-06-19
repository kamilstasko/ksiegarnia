<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public static function create(){
        $data = array(
            'isHomepage' => false,
            'data' => Controller::dataPages('contact'),
            'config' => Controller::config()
        );

        return view('pages.contact')->with($data);
    }

    public function store(Requests\ContactFormRequest $request)
    {
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['subject'] = $request->get('subject');
        $contact['message'] = $request->get('message');
        $contact['agreement'] = $request->get('agreement');
        $contact['rodo'] = $request->get('rodo');

        Mail::to('kolo8788@wp.pl')->send(new ContactEmail($contact));
        return redirect()->route('contact.create');
    }

}