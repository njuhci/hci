<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Advice;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 14; $i++) {
            Question::create([
                'topic'=>'医生你们好，我想问你们一个问题 '.$i,
                'content'=>'医生你们好，我想问你们一个问题 '.$i.'，最近一直拉肚子，一吃东西就拉，是什么问题呢？',
                'type'=>1,
                'user_id'=>$i,
            ]);
        }
        for ($i = 1; $i <= 14; $i++) {
            Question::create([
                'topic'=>'教练你们好，我想问你们一个问题 '.$i,
                'content'=>'教练你们好，我想问你们一个问题 '.$i.'，最近想减肥，但是人懒，请问有机会吗？',
                'type'=>2,
                'user_id'=>$i,
            ]);
        }

        for ($i = 3; $i <= 13; $i++) {
            Advice::create([
                'content'=>'唉，你吃错东西啦，赶紧去医院吧~~~~',
                'question_id'=>$i,
                'user_id'=>2,
            ]);
        }
        for ($i = 15; $i <= 19; $i++) {
            for ($j = $i-14; $j < $i-5; $j++) {
                Advice::create([
                    'content'=>'唉，你吃错东西啦，赶紧去医院吧~~~~',
                    'question_id'=>$j,
                    'user_id'=>$i,
                ]);
            }
        }

        for ($i = 17; $i <= 27; $i++) {
            Advice::create([
                'content'=>'唉，人懒并不能减肥啊...',
                'question_id'=>$i,
                'user_id'=>3,
            ]);
        }
        for ($i = 20; $i <= 24; $i++) {
            for ($j = $i-20+14; $j < $i; $j++) {
                Advice::create([
                    'content'=>'唉，人懒并不能减肥啊...',
                    'question_id'=>$j,
                    'user_id'=>$i,
                ]);
            }
        }
    }
}
