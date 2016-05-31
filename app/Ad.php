<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

    protected $fillabe = [
        'product_name', 'product_desc', 'city', 'price', 'image'
    ];
}
