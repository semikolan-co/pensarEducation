<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Progress;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    //
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
}
