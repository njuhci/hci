<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DataSport;
use App\DataHealth;
use App\DataSleep;

class DataController extends Controller
{
    public function sportsCreate() {
        return view('data/sports');
    }

    public function healthCreate() {
        return view('data/health');
    }

    public function sleepCreate() {
        return view('data/sleep');
    }

    public function sportsStore() {
        DataSport::create([
            'user_id'=>\Auth::user()->id,
            'type'=>$_POST['type'],
            'start_time'=>$_POST['start_time'],
            'end_time'=>$_POST['end_time'],
            'sports_time'=>$_POST['sports_time'],
            'heat'=>$_POST['heat'],
            'distance'=>$_POST['distance'],
            'step'=>$_POST['step'],
        ]);
        return redirect('/data/sports/create');
    }

    public function healthStore() {
        DataHealth::create([
            'user_id'=>\Auth::user()->id,
            'time' => $_POST['time'],
            'height' => $_POST['height'],
            'weight' => $_POST['weight'],
            'fat_percentage' => $_POST['fat_percentage'],
            'muscle_percentage' => $_POST['muscle_percentage'],
            'visceral_fat' => $_POST['visceral_fat'],
            'metabolic_rate' => $_POST['metabolic_rate'],
            'moisture_percentage' => $_POST['moisture_percentage'],
            'protein' => $_POST['protein'],
            'bone_mass' => $_POST['bone_mass'],
            'bmi' => $_POST['bmi'],
            'heart_rate' => $_POST['heart_rate'],
            'blood_pressure' => $_POST['blood_pressure'],
        ]);
        return redirect('/data/health/create');
    }

    public function sleepStore() {
        DataSleep::create([
            'user_id'=>\Auth::user()->id,
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'sleeping_time' => $_POST['sleeping_time'],
            'deep_sleeping_time' => $_POST['deep_sleeping_time'],
            'wake_up_times' => $_POST['wake_up_times'],
            'sleep_points' => $_POST['sleep_points'],
        ]);
        return redirect('/data/sleep/create');
    }
}
