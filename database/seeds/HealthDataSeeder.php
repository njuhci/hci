<?php

use Illuminate\Database\Seeder;
use App\DataHealth;

class HealthDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = '2015-10-08 19:00:00';
        for($i = 0; $i < 60; $i++) {
            for ($j = 1; $j <=24; $j++) {
                $height = 175 + 0.1*$i;
                $weight = 65  + pow(-1, $i)*0.05*$i;
                DataHealth::create([
                    'user_id'=>$j,
                    'time' => date("Y-m-d H:i:s",strtotime($time . "+".$i." day")),
                    'height' => $height,
                    'weight' => $weight,
                    'fat_percentage' => 20,
                    'muscle_percentage' => 30,
                    'visceral_fat' => 2,
                    'metabolic_rate' => 10,
                    'moisture_percentage' => 65,
                    'protein' => 15,
                    'bone_mass' => 3.2,
                    'bmi' => $weight*1.0/pow($height*1.0/100, 2),
                    'heart_rate' => 75,
                    'blood_pressure' => '125/80',
                ]);
                print_r($i.' '.$j.' | ');
                sleep(0.1);
            }
        }
    }
}
