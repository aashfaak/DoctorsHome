<?php

namespace App\Http\Controllers;
    use App\Models\Appointment;
    use Illuminate\Http\Request;

class AppointmentController extends Controller
{
public function store(Request $request)
{
    $data = $request->validate([
        'type'  => 'required|in:video,home,clinic,lab,checkup',
        'name'  => 'required|string|max:100',
        'email' => 'nullable|email|max:150',
        'phone' => 'required|string|max:20',
        'date'  => 'required|date|after_or_equal:today',
        'time'  => 'required',
        'notes' => 'nullable|string|max:1000',
        'doctor_id' => 'nullable|exists:doctors,id',
    ]);

    Appointment::create($data);

    return back()->with('success', 'Appointment booked! We will contact you soon to confirm.');
}
}
