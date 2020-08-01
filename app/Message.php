<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=[
        'ChatId',
        'From',
        'Subject',
        'Slug',
        'To',
        'Message',
        'Status'
    ];
}
