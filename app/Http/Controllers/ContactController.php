<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string|max:5000',
            'honeypot' => 'present|max:0', // Spam protection — must be empty
        ]);

        // Reject if honeypot was filled (bot)
        if (!empty($validated['honeypot'])) {
            return back()->with('success', 'Thank you for your message!');
        }

        unset($validated['honeypot']);

        ContactSubmission::create([
            ...$validated,
            'source_page' => 'contact',
            'ip_address' => $request->ip(),
        ]);

        return back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');
    }
}
