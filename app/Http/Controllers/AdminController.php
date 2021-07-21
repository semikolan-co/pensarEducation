<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demostudent;
use App\Models\User;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Progress;

class AdminController extends Controller
{
    //

    public function index(){
        $param = [
            'demostudents' => demostudent::all(),
            'analytics' => [
                'students' => User::count(),
                'topics' => Topic::count(),
                'lessons' => Lesson::count(),
                'quizzes' => Quiz::count()
            ]
        ];
        return view('pages.admin.dashboard',$param); 
    }

    public function demostudents(){
        $param = [
            'demostudents' => demostudent::all()
        ];
        return view('pages.admin.demostudents',$param); 
    }
    
    public function geteditquiz($id){
        $quiz = Quiz::find($id)
                ->join('lessons', 'lessons.id', '=','quizzes.lesson' )
                ->join('topics',  'topics.id', '=','lessons.topic')
                ->select('quizzes.*','topics.id as topicid','lessons.id as lessonid','topics.course')
                ->first();
        $param = [
            'courses' => Course::all(),
            'quiz' => $quiz,
            'way' => 'Edit'

        ];
        return view('pages.admin.quiz',$param); 
    }
    public function getaddquiz(){
        $param = [
            'courses' => Course::all(),
            'way' => 'Add'

        ];
        return view('pages.admin.quiz',$param); 
    }

    public function topics(){
        $param = [
            'topics' => Topic::all(),
            'courses' => Course::all()
        ];
        return view('pages.admin.topics',$param); 
    }

    public function lessons(){
        $topics = Topic::all();
        $topics = $topics->map(function ($topic) {
            $lessons = Lesson::where('topic',$topic->id)->get();
            $lessons = $lessons->map(function ($lesson) {
                $lesson->quizzes = Quiz::where('lesson',$lesson->id)->get();
                return $lesson;        
            });
            $topic->lessons= $lessons;
            return $topic;        
        });
        $param = [
            'topics' => $topics,
            'courses' => Course::all()
        ];
        return view('pages.admin.lessons',$param); 
    }

    public function quizzes(){
        $topics = Topic::all();
        $topics = $topics->map(function ($topic) {
            $lessons = Lesson::where('topic',$topic->id)->get();
            $lessons = $lessons->map(function ($lesson) {
                $lesson->quizzes = Quiz::where('lesson',$lesson->id)->get();
                return $lesson;        
            });
            $topic->lessons= $lessons;
            return $topic;        
        });
        $param = [
            'topics' => $topics,
            'courses' => Course::all()
        ];
        return view('pages.admin.quizzes',$param); 
    }




    //Topic Routes
    public function addtopic(Request $req){
        $topic = Topic::create($req->all());
        return back();
    }
    public function edittopic(Request $req){
        $topic = Topic::find($req->id);
        $topic->update($req->all());
        return back();

    }
    public function deletetopic(Request $req){
        $topic = Topic::find($req->id);
        $topic->delete();
        return back();
    }








    //Lesson Routes
    public function addlesson(Request $req){
        $lesson = Lesson::create($req->all());
        return back();
    }
    public function editlesson(Request $req){
        $lesson = Lesson::find($req->id);
        $lesson->update($req->all());
        return back();

    }
    public function deletelesson(Request $req){
        $lesson = Lesson::find($req->id);
        $lesson->delete();
        return back();
    }






    //Quiz Routes
    public function addquiz(Request $req){
        $quiz = Quiz::create($req->all());
        return redirect()->route('geteditquiz',['id'=>$quiz->id]);
    }
    public function editquiz(Request $req){
        // return $req;
        $quiz = Quiz::find($req->id);
        $quiz->update($req->all());
        return back();

    }
    public function deletequiz(Request $req){
        $quiz = Quiz::find($req->id);
        $quiz->delete();
        return back();
    }











}
