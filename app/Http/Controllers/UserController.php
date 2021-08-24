<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Progress;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isuserstudent');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function learn($course){

        $topics = Topic::where('course',$course)->get();
        $topics = $topics->map(function ($topic) {
            $lessons = Lesson::where('topic',$topic->id)->get();
            $lessons = $lessons->map(function ($lesson) {
                $lesson->quizzes = Quiz::where('lesson',$lesson->id)->get();
                return $lesson;        
            });
            $topic->lessons= $lessons;
            return $topic;        
        });
        $progress = Progress::where([
            ['course', $course],
            ['userid', Auth::id()]])->first();
            $param = ['topics' => $topics,
            'progress'=>$progress];
            // return $topics;
        return view('pages.learn',$param);
         
    }
    
    public function quiz($id,$spice){
        $method =  substr($spice,20,1);
        $param = [
            'courses' => Course::all(),
            'quiz' => Quiz::find($id),
            'method' => $method
        ];
        return view('pages.quiz',$param); 
    }
    public function updateprogress(Request $req){

        $recentQuizNum = 0;
        $recentLessonNum = 0;
        $recentTopicNum = 0;
        $upgrade = '';

        $quizid = $req->quizid;
        $userid = Auth::id();
        $quiz = Quiz::find($quizid)
                ->join('lessons', 'lessons.id', '=','quizzes.lesson' )
                ->join('topics',  'topics.id', '=','lessons.topic')
                ->select('quizzes.*','topics.id as topicid','lessons.id as lessonid','topics.course')
                ->first();
        $quizzes = Quiz::where('lesson',$quiz->lessonid)->get();
        foreach($quizzes as $key=>$loopquiz){
            if((int)$loopquiz->id == (int)$quizid){
                return $loopquiz;
                $recentQuizNum = $key + 1;
            }
        }
        // return $quiz;
        // return $recentQuizNum;



    }
}
