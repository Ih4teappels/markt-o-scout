<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{

    protected $fillabe = [
        'product_name', 'product_desc', 'city', 'price', 'image', 'category_id',
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function comments() {
    	return $this->belongsTo('App\Comment');
    }
}
