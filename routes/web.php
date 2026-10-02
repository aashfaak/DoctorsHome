<?php

use App\Http\Controllers\AppointmentController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $doctors = Doctor::with('specialty')->where('is_active', true)->latest()->get();
    return view('home', compact('doctors'));
});

Route::get('/doctors', function () {
    $doctors = Doctor::with('specialty')->where('is_active', true)->latest()->get();
    return view('doctors', compact('doctors'));
});

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::view('/services', 'services');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');