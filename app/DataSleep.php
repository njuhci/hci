<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSleep extends Model
{
    protected $table = 'data_sleep';

    protected $fillable = ['user_id', 'start_time', 'end_time', 'sleeping_time',
        'deep_sleeping_time', 'wake_up_times', 'sleep_points'];
}
