<?php

use Illuminate\Database\Seeder;
use App\DataSport;

class SportsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time1 = '2015-09-10 20:05:30';
        $time2 = '2015-09-10 20:35:30';
        $type = 0;
        for($i = 0; $i < 130; $i++) {
            for ($j = 1; $j <=24; $j++) {
                if ($type == 0) {
                    DataSport::create([
                        'user_id'=>$j,
                        'type'=>0,
                        'start_time'=>date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day")),
                        'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                        'sports_time'=>30,
                        'heat'=>200,
                        'distance'=>5,
                        'step'=>5000,
                    ]);
                } else if ($type == 1) {
                    DataSport::create([
                        'user_id'=>$j,
                        'type'=>1,
                        'start_time'=>date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day")),
                        'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                        'sports_time'=>30,
                        'heat'=>100,
                        'distance'=>3,
                        'step'=>3500,
                    ]);
                } else if ($type == 2) {
                    DataSport::create([
                        'user_id'=>$j,
                        'type'=>2,
                        'start_time'=>date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day")),
                        'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                        'sports_time'=>30,
                        'heat'=>180,
                    ]);
                } else if ($type == 3) {
                    DataSport::create([
                        'user_id'=>$j,
                        'type'=>3,
                        'start_time'=>date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day")),
                        'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                        'sports_time'=>30,
                        'heat'=>220,
                        'distance'=>4,
                    ]);
                } else {
                    DataSport::create([
                        'user_id'=>$j,
                        'type'=>4,
                        'start_time'=>date("Y-m-d H:i:s",strtotime($time1 . "+".$i." day")),
                        'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                        'sports_time'=>30,
                        'heat'=>150,
                        'distance'=>10,
                    ]);
                }
                print_r($i.' '.$j.' | ');
                sleep(0.1);
            }
            $type++;
            if ($type == 5) $type = 0;
        }
    }
}
