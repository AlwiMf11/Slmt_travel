<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ]);

        // In production, send email or store in database
        // For now, just redirect with success message
        
        return redirect()->route('contact.index')
            ->with('success', 'Pesan Anda telah dikirim. Terima kasih telah menghubungi kami!');
    }
}
