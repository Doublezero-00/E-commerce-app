<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact.contactus');
    }

    public function store(Request $request) {
        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($validated_data);
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
