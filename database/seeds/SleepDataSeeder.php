<?php

use Illuminate\Database\Seeder;
use App\DataSleep;

class SleepDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time1 = '2015-10-06 22:05:30';
        $time2 = '2015-10-07 06:30:30';
        for($i = 0; $i < 60; $i++) {
            for ($j = 1; $j <= 24; $j++) {
                $start_time = date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day"));
                $end_time =date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day"." +".($i*5)." minute"));
                $temp = strtotime($end_time) - strtotime($start_time);
                $h = intval($temp/3600);
                $temp = $temp%3600;
                $m = intval($temp/60);
                $s = $temp%60;
                $sleeping_time = str_pad($h,2,"0",STR_PAD_LEFT).':'.str_pad($m,2,"0",STR_PAD_LEFT).':'.str_pad($s,2,"0",STR_PAD_LEFT);
                $deep_sleeping_time = '06:00:00';
                $wake_up_times = random_int(0, 3);
                $sleep_points = 80 + pow(-1, $i)*(-0.25)*$i;
                DataSleep::create([
                    'user_id'=>$j,
                    'start_time' => $start_time,
                    'end_time' => $end_time,
                    'sleeping_time' => $sleeping_time,
                    'deep_sleeping_time' => $deep_sleeping_time,
                    'wake_up_times' => $wake_up_times,
                    'sleep_points' => $sleep_points,
                ]);
            }
        }
    }
}
