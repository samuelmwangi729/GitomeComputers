<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'ProductId',
        'ProductName',
        'ProductSlug',
        'ProductText',
        'ProductCategory',
        'ProductBrand',
        'SellingPrice',
        'Description',
        'ProductCount',
        'ProductImage',
        'FrontView',
        'Status',
    ];
}
