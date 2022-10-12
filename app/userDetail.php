<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    protected $fillable = [
        'id_user',
        'user_number',
        'gender',
        'blood_group',
        'address',
        'phone',
        'photo',
    ];
}
