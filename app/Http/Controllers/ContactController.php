<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Redirect;
use App\Models\Message;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactFormRequest $request)
    {
    	$message = Message::create($request->all());
    	$mailable = new ContactMessageCreated($message);
    	Mail::to(config('laracarte.admin_support_email'))->send($mailable);

    	flashy('Message envoyé avec succès. Nous vous répondrons incessamment.', '#');
    	return Redirect::to(route('home'));
    }
}
