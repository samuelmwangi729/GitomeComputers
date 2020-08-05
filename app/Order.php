<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'OrderId',
        'FirstName',
        'LastName',
        'Company',
        'County',
        'Town',
        'PostalCode',
        'Address',
        'Phone',
        'Email',
        'Status',
    ];
}
