<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'role', 'phone', 'skype', 'sex', 'birthday', 'office',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'birthday',
    ];

    public function office(){
        return $this->belongsTo('App\Office', 'office', 'id');
    }

    public function position(){
        return $this->belongsTo('App\Position', 'role', 'id');
    }

    public function mySubordinate(){
        return $this->belongsToMany('App\User', 'company_structure', 'boss', 'subordinate');
    }

    public function myBoss(){
        return $this->belongsToMany('App\User', 'company_structure', 'subordinate', 'boss');
    }

    public function schedule_start(){
        return $this->hasOne('App\Schedule_start', 'user_id', 'id');
    }

    public function schedule_finish(){
        return $this->hasOne('App\Schedule_finish', 'user_id', 'id');
    }

    const WEEKDAYS = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
}
