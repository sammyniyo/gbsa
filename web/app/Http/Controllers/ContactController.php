<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ThankYouMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request with custom rules and messages
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', 'regex:/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,6}$/'],
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
            'message' => 'required|string',
        ], [
            'email.regex' => 'The email address must be a valid format.',
            'phone.regex' => 'The phone number must be exactly 10 digits.',
        ]);

        // Create a new contact message
        $contact = Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Send an email notification to the admin
        Mail::to('gorillaberingeisa@gmail.com')->send(new ContactMail($contact));

        // Send a thank you email to the user
        Mail::to($contact->email)->send(new ThankYouMail($contact));

        return redirect()->back()->with('success', 'Message sent successfully! Thank you for contacting us.');
    }
}
