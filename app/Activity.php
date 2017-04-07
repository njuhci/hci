<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['topic', 'start_time', 'end_time', 'type', 'address', 'content',
        'remark', 'user_id'];

}
