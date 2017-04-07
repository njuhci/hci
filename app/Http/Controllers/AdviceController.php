<?php

namespace App\Http\Controllers;

use App\UserInfo;
use Illuminate\Http\Request;
use App\Question;
use App\Advice;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Excel;

class AdviceController extends Controller
{
    public function index()
    {
        if (\Auth::user() == NULL)
            return redirect('/auth/login');
        $role = \Auth::user()->hasRole(['doctor', 'coach']);
        if ($role == false) $para = 0;
        else $para = 1;
        if (\Auth::user()->hasRole(['doctor'] == true)) $type = 1;
        else $type = 2;
        return view('advice/index', compact('type', 'para'));
    }

    public function addQuestion()
    {
        return view('advice/add_question');
    }

    public function createQuestion()
    {
        Question::create([
            'topic' => $_POST['topic'],
            'content' => $_POST['content'],
            'type' => $_POST['type'],
            'user_id' => \Auth::user()->id,
        ]);
        return redirect('/expert');
    }

    public function editQuestion($id)
    {
        $q = Question::find($id);
        return view('/advice/edit_question', compact('q'));
    }

    public function updateQuestion()
    {
        $q = Question::find($_POST['id']);
        $q->topic = $_POST['topic'];
        $q->content = $_POST['content'];
        $q->save();
        return redirect('/expert/detail/' . $_POST['id']);
    }

    public function deleteQuestion($id)
    {
        $q = Question::find($id);
        if ($q->user_id != \Auth::user()->id) return response('Unauthorized.', 401);
        $q->delete();
        return redirect('/expert');
    }

    public function getQuestionData($para = 0, $type = 0)
    {
        $info = \Auth::user()->info;
        $role = \Auth::user()->hasRole(['doctor', 'coach']);
        $role1 = \Auth::user()->hasRole(['doctor']);
        $role2 = \Auth::user()->hasRole(['coach']);
        if ($para == 0) {
            if ($type == 0) {
                $data = DB::select('select * from questions where user_id=? order by id desc', [\Auth::user()->id]);
            } else if ($type == 1) {
                $data = DB::select('select * from questions where type = 1 and user_id=? order by id desc', [\Auth::user()->id]);
            } else if ($type == 2) {
                $data = DB::select('select * from questions where type = 2 and user_id=? order by id desc', [\Auth::user()->id]);
            }
        } else if ($para == 1) {
            if ($type == 0) {
                $data = Question::all();
                return response('Unauthorized.', 401);
            } else if ($type == 1) {
                $data = DB::select('select * from questions where type = 1 order by id desc');
                if ($role1 == false) {
                    return response('Unauthorized.', 401);
                }
            } else if ($type == 2) {
                $data = DB::select('select * from questions where type = 2 order by id desc');
                if ($role2 == false) {
                    return response('Unauthorized.', 401);
                }
            }
        } else if ($para == 2) {
            if ($type == 0) {
                $data = DB::select('select * from questions where id in (select question_id from advices where
                  user_id=?) order by id desc', [\Auth::user()->id]);
            } else if ($type == 1) {
                $data = DB::select('select * from questions where type = 1 and id in (select question_id from advices where
                  user_id=?) order by id desc', [\Auth::user()->id]);
            } else if ($type == 2) {
                $data = DB::select('select * from questions where type = 2 and id in (select question_id from advices where
                  user_id=?) order by id desc', [\Auth::user()->id]);
            }
        }
        return response()->json($data);
    }

    public function detail($id)
    {
        $q = Question::find($id);
        $info = \Auth::user()->info;
        $role = \Auth::user()->hasRole(['doctor', 'coach']);
        $user_id = \Auth::user()->id;
        $nickname = DB::select('select nickname from user_info where id=?', [$q->user_id])[0];
        if (($role == false) && $user_id != $q->user_id) {
            return response('Unauthorized.', 401);
        } else {
            $a = DB::select('select advices.id, content, user_id, real_name from advices
              left join user_info on advices.user_id=user_info.id where question_id=?', [$id]);
            $d = DB::select('select * from advices where user_id=? and question_id=?', [\Auth::user()->id, $id]);
            return view('/advice/detail', compact('q', 'a', 'info', 'd', 'nickname'));
        }
    }

    public function reply($id)
    {
        $q = Question::find($id);
        $role = \Auth::user()->hasRole(['doctor', 'coach']);
        $user_id = \Auth::user()->id;
        if ($role == true) {
            return view('advice/reply', compact('q', 'id'));
        } else {
            return response('Unauthorized.', 401);
        }
    }

    public function createReply()
    {
        Advice::create([
            'content' => $_POST['content'],
            'question_id' => $_POST['id'],
            'user_id' => \Auth::user()->id,
        ]);
        return redirect('/expert/detail/' . $_POST['id']);
    }

    public function editReply($qid, $id)
    {
        $role = \Auth::user()->hasRole(['doctor', 'coach']);
        if ($role == false) return response('Unauthorized.', 401);
        $a = Advice::find($id);
        return view('advice/edit_reply', compact('a', 'qid'));
    }

    public function updateReply()
    {
        $a = Advice::find($_POST['id']);
        $qid = $_POST['qid'];
        $a->content = $_POST['content'];
        $a->save();
        return redirect('/expert/detail/' . $qid);
    }

    public function deleteReply($qid, $id)
    {
        $a = Advice::find($id);
        if (\Auth::user()->id != $a->user_id) {
            return response('Unauthorized.', 401);
        }
        $a->delete();
        return redirect('/expert/detail/' . $qid);
    }

    public function import()
    {
        return view('/advice/import');
    }

    public function dealImport()
    {
        $upload = Input::file('upload');
        $entension = $upload->getClientOriginalExtension();
        if ($entension == 'xml') {
            $advices = simplexml_load_file($upload);
            foreach ($advices as $advice) {
                Advice::create([
                    'content' => $advice->content,
                    'question_id' => $advice->question_id,
                    'user_id' => \Auth::user()->id,
                ]);
            }
            return redirect('/expert');
        } else if ($entension == 'xls' || $entension == 'xlsx') {
            Excel::load($upload, function ($reader) {
                $reader = $reader->getSheet(0);
                $advices = $reader->toArray();
                foreach ($advices as $advice) {
                    Advice::create([
                        'content' => $advice[1],
                        'question_id' => (int)$advice[0],
                        'user_id' => \Auth::user()->id,
                    ]);
                }
            });
            return redirect('/expert');
        } else {
            return response('file error.');
        }
    }


}
