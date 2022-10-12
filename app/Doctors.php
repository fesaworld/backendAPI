<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = [
        'id_doctors',
        'name',
        'gender',
        'phone',
        'address',
        'specialist',
        'status',
        'created_at',
        'updated_at',
    ];
}
