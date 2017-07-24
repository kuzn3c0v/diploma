<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule_finish extends Model
{
    //

    protected $table = 'schedule_finish';

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
