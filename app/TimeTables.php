<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTables extends Model
{
    protected $fillable = [
        'id_timetables',
        'id_doctors',
        'id_timeduration',
        'hari',
        'kuota',
    ];
}
