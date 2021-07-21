<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Lesson;
class APIController extends Controller
{
    //
    
    function getTopic(Request $req){
        return Topic::where('course',$req->course)->get();
    }


function getLesson(Request $req){
    return Lesson::where('topic',$req->topic)->get();
    // return [];
}
}
