<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;
use App\Mail\BookingSuccessMail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new booking
        $booking = Booking::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ]);

        // Send booking email
        Mail::to('gorillaberingeisa@gmail.com')->send(new BookingMail($booking));

        // Send booking success email to the user
        Mail::to($booking->email)->send(new BookingSuccessMail($booking));

        return redirect()->back()->with('success', 'Booking successful! A confirmation email has been sent to you.');
    }
}

