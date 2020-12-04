<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = ['code', 'patient_id', 'doctor_id', 'service_id', 'day', 'time', 'status'];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'patient_id', 'id');
    }

    public function medico()
    {
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }
}
