<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = ['code', 'patient_id', 'doctor_id', 'service_id', 'date', 'status'];
}
