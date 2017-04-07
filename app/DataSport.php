<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSport extends Model
{
    protected $table = 'data_sports';

    protected $fillable = ['user_id', 'type', 'start_time', 'end_time', 'sports_time', 'heat',
        'distance', 'step'];

}
