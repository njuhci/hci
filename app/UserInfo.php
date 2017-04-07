<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info';

    public $timestamps = false;

    protected $fillable = ['id', 'real_name', 'nickname', 'gender', 'province', 'city', 'birthday',
        'introduction', 'avatar_url'];

}
