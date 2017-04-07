<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HealthController extends Controller
{
    public function index() {
        if (\Auth::user() == NULL)
            return redirect('/auth/login');
        return redirect('/health/sports');
    }

    public function setGoal() {
        $goal = \Auth::user()->goal;
        $heat = $goal->heat;
        $distance = $goal->distance;
        $step = $goal->step;
        $weight = $goal->weight;
        return view('health/goal', compact('heat', 'distance', 'step', 'weight'));
    }

    public function updateGoal() {
        $goal = \Auth::user()->goal;
        $goal->heat = $_POST['heat'];
        $goal->distance = $_POST['distance'];
        $goal->step = $_POST['step'];
        $goal->weight = $_POST['weight'];
        $goal->save();
        return redirect('/health');
    }

    public function sports() {
        $start = date("Y-m-d",strtotime("-1 week Monday"));
        $end =  date("Y-m-d",strtotime("+0 week Sunday"));
        $result = DB::select('select sum(heat) as heat, sum(distance) as distance,
            sum(step) as step from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ?', [$start, $end, \Auth::user()->id]);
        $result = $result[0];
        $goal = \Auth::user()->goal;
        $per = array();
        if ($result->heat >= $goal->heat) $per['heat'] = 100;
        else $per['heat'] = $result->heat * 100.0 / $goal->heat;
        if ($result->distance >= $goal->distance) $per['distance'] = 100;
        else $per['distance'] = $result->distance * 100.0 / $goal->distance;
        if ($result->step >= $goal->step) $per['step'] = 100;
        else $per['step'] = $result->step * 100.0 / $goal->step;

        $a1 = DB::select('select ifnull(sum(heat),0) as heat, ifnull(sum(distance),0) as distance,
            ifnull(sum(step),0) as step, ifnull(sum(sports_time),0) as time from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ? and type = 0', [$start, $end, \Auth::user()->id])[0];
        $a2 = DB::select('select ifnull(sum(heat),0) as heat, ifnull(sum(distance),0) as distance,
            ifnull(sum(step),0) as step, ifnull(sum(sports_time),0) as time from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ? and type = 1', [$start, $end, \Auth::user()->id])[0];
        $a3 = DB::select('select ifnull(sum(heat),0) as heat, ifnull(sum(sports_time),0) as time from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ? and type = 2', [$start, $end, \Auth::user()->id])[0];
        $a4 = DB::select('select ifnull(sum(heat),0) as heat, ifnull(sum(distance),0) as distance,
            ifnull(sum(sports_time),0) as time from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ? and type = 2', [$start, $end, \Auth::user()->id])[0];
        $a5 = DB::select('select ifnull(sum(heat),0) as heat, ifnull(sum(distance),0) as distance,
            ifnull(sum(sports_time),0) as time from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ? and type = 4', [$start, $end, \Auth::user()->id])[0];

        $all = DB::select('select sum(heat) as heat, sum(distance) as distance, sum(sports_time) as time,
            sum(step) as step from data_sports where user_id = ?', [\Auth::user()->id])[0];

        return view('health/sports', compact('result', 'goal', 'per', 'a1', 'a2', 'a3', 'a4', 'a5', 'all'));
    }

    public function getSportsData($para) {
        $start = date("Y-m-d",strtotime("-1 week Monday"));
        $end =  date("Y-m-d",strtotime("+0 week Sunday"));
        if ($para == 0) $data = DB::select('select * from data_sports where date(start_time) = ? and user_id=?',
            [date("Y-m-d",time()), \Auth::user()->id]);
        else if ($para == 1) $data = DB::select('select * from data_sports where date(start_time) >= ?
            and date(start_time) <= ? and user_id = ?', [$start, $end, \Auth::user()->id]);
        else if ($para == 2) $data = DB::select("select * from data_sports where strftime('%Y',start_time) = ? and
           strftime('%m',start_time) = ? and user_id = ?", [date('Y',time()), date('m',time()), \Auth::user()->id]);
        else if ($para == 3) $data = DB::select('select * from data_sports where user_id=?', [\Auth::user()->id]);
        else $data = DB::select('select * from data_sports where date(start_time) = ? and user_id=?', [$para, \Auth::user()->id]);

        foreach($data as $temp) {
            if ($temp->type == 0) $temp->type = '跑步';
            if ($temp->type == 1) $temp->type = '步行';
            if ($temp->type == 2) $temp->type = '健身';
            if ($temp->type == 3) $temp->type = '游泳';
            if ($temp->type == 4) $temp->type = '骑行';
            if ($temp->distance == null) $temp->distance = 0;
            if ($temp->step == null) $temp->step = 0;
        }
        return response()->json($data);
    }

    public function health() {
        $goal = \Auth::user()->goal;
        $goal_weight = $goal->weight;
        $data = DB::select('select * from data_health where user_id = ? order by time desc limit 1',
            [\Auth::user()->id]);
        if ($data == null) $real_weight = 0;
        else $real_weight = $data[0]->weight;
        return view('health/health', compact('goal_weight', 'real_weight'));
    }

    public function getHealthData($count) {
        $data = DB::select('select * from data_health where user_id = ? order by time desc limit ?, 1',
            [\Auth::user()->id, $count-1,]);
        if ($data == null) return null;
        else $data == $data[0];
        return response()->json($data);
    }

    public function getHealthChartData() {
        $data = DB::select('select * from data_health where user_id = ? order by time desc limit 10',
            [\Auth::user()->id]);
        return response()->json($data);
    }

    public function sleep() {
        $data = DB::select('select * from data_sleep where user_id = ? order by start_time desc limit 1',
            [\Auth::user()->id]);
        if ($data == null) {
            $flag = 1;
        } else {
            $data = $data[0];
            $flag = 0;
        }
        return view('health/sleep', compact('data', 'flag'));
    }

    public function getSleepData() {
        $data = DB::select('select * from data_sleep where user_id = ? order by start_time desc',
            [\Auth::user()->id]);
        return response()->json($data);
    }

    public function getSleepChartData() {
        $data = DB::select('select * from data_sleep where user_id = ? order by start_time desc limit 10',
            [\Auth::user()->id]);
        return response()->json($data);
    }

}
