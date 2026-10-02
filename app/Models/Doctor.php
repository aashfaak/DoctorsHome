<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['specialty_id', 'name', 'photo', 'experience_years', 'fee', 'bio', 'is_active'];

protected $casts = ['is_active' => 'boolean'];

public function specialty()
{
    return $this->belongsTo(Specialty::class);
}

public function appointments()
{
    return $this->hasMany(Appointment::class);
}
}
