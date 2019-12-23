<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class join_us extends Model
{
    protected $table = 'join_us';

    protected $fillable = [
        'name', 'phone', 'email', 'city', 'content',
    ];

}
