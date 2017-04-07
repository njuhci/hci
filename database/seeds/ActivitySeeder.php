<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time1 = '2015-10-20 19:05:30';
        $time2 = '2015-10-20 20:05:30';
        $time3 = '2015-10-21 08:00:00';
        $time4 = '2015-10-21 08:30:00';
        for ($i = 1; $i < 25; $i++) {
            Activity::create([
                'topic'=>'南京大学鼓楼校区夜跑活动之'.$i,
                'start_time'=>date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day")),
                'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                'type'=>0,
                'address'=>'南京大学鼓楼校区田径场',
                'content'=>'南京大学鼓楼校区夜跑活动，是非常有意义的活动哦，在田径场不见不散！',
                'remark'=>'所有人都可以来参与哦',
                'user_id'=>$i,
            ]);
            Activity::create([
                'topic'=>'南京大学鼓楼校区晨练活动之'.$i,
                'start_time'=>date("Y-m-d H:i:s",strtotime($time3 . "+".$i." day")),
                'end_time'=>date("Y-m-d H:i:s",strtotime($time4 . "+".$i." day")),
                'type'=>0,
                'address'=>'南京大学鼓楼校区体育馆里面',
                'content'=>'南京大学鼓楼校区晨练活动，是非常有意义的活动哦，在体育馆不见不散！',
                'remark'=>'所有人都可以来参与哦',
                'user_id'=>$i,
            ]);
        }

        for ($i = 1; $i <= 18; $i++) {
            for($j = $i*2+1; $j <= $i*2+11; $j++) {
                DB::insert('insert into activity_user (activity_id, user_id) values (?, ?)', [$j, $i]);
            }
        }
        for ($i = 19; $i <= 24; $i++) {
            for($j = ($i-19)*2+1; $j <= ($i-19)*2+11; $j++) {
                DB::insert('insert into activity_user (activity_id, user_id) values (?, ?)', [$j, $i]);
            }
        }

    }
}
