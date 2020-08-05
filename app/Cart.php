<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=[
        'clientId',
        'ProductId',
        'Qty',
        'Total',
        'Status',
    ];
}
