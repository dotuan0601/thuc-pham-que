<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agency';

    protected $fillable = array('first_name', 'last_name', 'full_name', 'email', 'phone_number', 'password',
        'facebook', 'avatar', 'is_actived', 'is_blocked', 'average_point', 'register_source', '	address', 'created_at');
}
