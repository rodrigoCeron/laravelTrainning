<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
    	$msg=request()->validate([
    		'name' => 'required',
    		'email' => 'required',
    		'subject' => 'required',
    		'content' => 'required'
    	]);

    	//enviar email
    	Mail::to('raceron19@gmail.com')->send(new ContactMail($msg));
    	return new ContactMail($msg);

    	return 'Mensaje enviado';
    }
}
