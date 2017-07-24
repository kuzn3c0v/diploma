<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule_start extends Model
{
    //

    protected $table = 'schedule_start';

    protected $fillable = [
        '*'
    ];

    protected $dates = [
        'mon',
        'tue',
        'wed',
        'thu',
        'fri',
        'sat',
        'sun',
    ];

    protected $dateFormat = 'H:i:s';
}
