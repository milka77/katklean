<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use function Termwind\render;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    // public function showContact() {
    //     return view('components.site.contact');
    // }

    public function contactMessage(ContactRequest $request) {

        $content = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('info@katklean.co.uk')->send(new ContactMail($content));
        
        return back()->with('success', "Thank you for your message! We will be in touch with you shortly.");
    }
}
