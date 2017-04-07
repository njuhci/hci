<?php

use Illuminate\Database\Seeder;

use App\User;
use App\UserGoal;


class HealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user) {
            UserGoal::create([
                'user_id' => $user->id,
                'heat' => 2000,
                'distance' => 50,
                'step' => 100000,
                'weight' => 60,
            ]);
        }
    }
}
