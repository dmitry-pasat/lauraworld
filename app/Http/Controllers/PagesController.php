<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages.index');
    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getServices(){
        return view('pages.services');
    }

    public function getGallery(){
        return view('pages.gallery');
    }

    public function getOrigin(){
        return view('pages.origin');
    }

    public function getProducts(){
        return view('pages.products');
    }

    public function getContact(){
        return view('pages.contact_page');
    }

    public function postContact(request $request){

        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        ];

        Mail::send('emails.welcome', $data, function($message) use ($data){

            $message->from($data['email'],'Lauraworld Contact form');
            $message->to(env('CONTACT_EMAIL'));
        });

        Session::flash('success', 'Your email was send!');

        return redirect()->route('contact');
    }
}
