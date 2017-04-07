<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    protected $fillable = ['content', 'question_id', 'user_id'];

}
