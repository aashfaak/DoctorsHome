<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
protected $fillable = ['doctor_id', 'type', 'name', 'email', 'phone', 'date', 'time', 'notes', 'status'];

protected $casts = ['date' => 'date'];

public function doctor()
{
    return $this->belongsTo(Doctor::class);
}
}
