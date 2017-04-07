<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ActivityController extends Controller
{

    public function index()
    {
        if (\Auth::user() == NULL)
            return redirect('/auth/login');
        return view('activity/index');
    }

    public function add()
    {
        return view('activity/create');
    }

    public function create()
    {
        $activity = new Activity();
        $activity->topic = $_POST['topic'];
        $activity->start_time = $_POST['start_time'];
        $activity->end_time = $_POST['end_time'];
        $activity->content = $_POST['content'];
        $activity->type = 0;
        $activity->remark = $_POST['remark'];
        $activity->address = $_POST['address'];
        $activity->user_id = \Auth::user()->id;
        $activity->save();
        return redirect('/activity');
    }

    public function delete($id)
    {
        $activity = Activity::find($id);
        if ($activity->user_id != \Auth::user()->id) return response('Unauthorized.', 401);
        $activity->delete();
        return redirect('/activity');
    }

    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('activity/edit', compact('activity'));
    }

    public function update()
    {
        $activity = Activity::find($_POST['id']);
        $activity->topic = $_POST['topic'];
        $activity->start_time = $_POST['start_time'];
        $activity->end_time = $_POST['end_time'];
        $activity->content = $_POST['content'];
        $activity->type = 0;
        $activity->remark = $_POST['remark'];
        $activity->address = $_POST['address'];
        if ($activity->user_id != \Auth::user()->id) return response('Unauthorized.', 401);
        $activity->save();
        return redirect('/activity/detail/' . $_POST['id']);
    }

    public function detail($id)
    {
        $activity = Activity::find($id);
        $data = DB::select('select nickname from activity_user left join user_info on activity_user.user_id=
          user_info.id WHERE activity_user.activity_id=?', [$id]);
        $isJoin = DB::select('select * from activity_user where user_id=? and activity_id=?', [\Auth::user()->id, $id]);
        if ($isJoin == null) $join = 0;
        else $join = 1;
        $count = count($data);
        return view('/activity/detail', compact('activity', 'data', 'count', 'join'));
    }

    public function join($id)
    {
        $activity = Activity::find($id);
        $isJoin = DB::select('select * from activity_user where user_id=? and activity_id=?', [\Auth::user()->id, $id]);
        if ($isJoin == null) {
            DB::insert('insert into activity_user values (?, ?)', [$id, \Auth::user()->id]);
        } else {
            DB::delete('delete from activity_user where activity_id=? and user_id=?', [$id, \Auth::user()->id]);
        }
        return redirect('/activity/detail/' . $id);
    }

    public function getAllData($para = 0)
    {
        if ($para == 0) {
            $data = DB::select('select activities.id, topic, start_time, address, nickname, (select count(*) from activity_user where activity_id=activities.id) as count
          from activities left join user_info on activities.user_id=user_info.id order by created_at desc');
        } else if ($para == 1) {
            $data = DB::select('select activities.id, topic, start_time, address, nickname, (select count(*) from activity_user where activity_id=activities.id) as count
          from activities  left join user_info on activities.user_id=user_info.id where user_id=? order by created_at desc', [\Auth::user()->id]);
        } else if ($para == 2) {
            $data = DB::select('select activities.id, topic, start_time, address, nickname, (select count(*) from activity_user where activity_id=activities.id) as count
          from activities left join user_info on activities.user_id=user_info.id
          where activities.id in (select activity_id from activity_user where user_id=?)
          order by created_at desc', [\Auth::user()->id]);
        }
        return response()->json($data);
    }

}
