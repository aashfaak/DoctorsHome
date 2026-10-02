<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $data = $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'nullable|email|max:150',
        'phone'   => 'nullable|string|max:20',
        'message' => 'required|string|max:2000',
    ]);

    ContactMessage::create($data);

    return back()->with('success', 'Message sent! We will get back to you soon.');
}
}
