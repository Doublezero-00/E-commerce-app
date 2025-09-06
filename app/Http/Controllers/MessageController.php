<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message() {
        $messages = Contact::all();
        return view('pages.message.messages', compact('messages'));
    }

}
