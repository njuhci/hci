<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataHealth extends Model
{
    protected $table = 'data_health';

    protected $fillable = ['user_id', 'time', 'height', 'weight', 'fat_percentage', 'muscle_percentage',
        'visceral_fat', 'metabolic_rate', 'moisture_percentage', 'protein', 'bone_mass',
        'bmi', 'heart_rate', 'blood_pressure'];
}
