<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:2000',
        ]);

        // Kirim email
        Mail::raw("
        Name: {$validated['first_name']} {$validated['last_name']}
        Email: {$validated['email']}
        Phone: " . ($validated['phone'] ?? '-') . "
        Message:
        {$validated['message']}
    ", function ($mail) use ($validated) {
            $mail->to('kev190264@gmail.com') // ganti dengan email tujuanmu
                ->subject('New Contact Message from ' . $validated['first_name']);
        });

        // Balikkan response JSON
        return response()->json(['success' => 'Pesan berhasil dikirim!']);
    }

}
