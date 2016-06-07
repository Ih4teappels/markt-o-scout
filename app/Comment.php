<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillabe = [
        'content', 'ad_id', 'user_id',
    ];

    // public function comment() {
    // 	return $this->belongsTo('App\User');
    // }
}
