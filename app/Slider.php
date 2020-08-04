<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=[
        'Image',
        'Headline',
        'Text',
        'LinkText',
        'Link',
    ];
}
