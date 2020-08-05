<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
        'AppointmentId',
        'Names',
        'Email',
        'Phone',
        'Day',
        'Month',
        'Time',
        'Topic',
        'Message',
        'Status',
    ];
}
