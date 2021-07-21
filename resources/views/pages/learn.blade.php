@extends('layouts.app')
@section('content')

<?php  
                               $status = 'ds';?>

<?php  
                            //    $status = 'ds';
                              function gofurther($usernum,$currentnum){
                                global $status;  
                                // echo $status;
                                 if($currentnum < $usernum ){
                                     $status = 'normal';
                                     return 0;
                                  }
                                  else if ($currentnum == $usernum ){
                                     $status = 'active';
                                     return 1;
                                  }
                                  else{
                                     $status = 'disabled';
                                     return 0;
                                  }

                               } 
                               ?>

    <link rel="stylesheet" href="/css/progresstracker.css">

    @forelse ($topics as $topicnum=>$topic)

        <div class="topiccontainer">
            <h2>{{ $topic->name }}</h2>
            <table class="w3-table">
                <tr>
                    <th>Lesson Name</th>
                    <th>Progress</th>
                </tr>

                @forelse ($topic->lessons as $lessonnum=>$lesson)
                    <tr>
                        <td><a href="{{ $lesson->pdflink }}" target="_blank" download>
                                {{ $lesson->name }}</a></td>
                        <td>

                            <div class="breadcrumb">
                               
                                @forelse ($lesson->quizzes as $quiznum=>$quiz)
                                    <?php

                                  if(gofurther($progress->topic, $topicnum+1)){
                                    if(gofurther($progress->lesson, $lessonnum+1)){
                                       gofurther($progress->quiz, $quiznum+1);
                                    }
                                  }
                                 ?>
                                 {{-- <a href=""><?=$GLOBALS['status']?></a> --}}

{{-- {{$progress->topic}} --}}

                                    @if ($GLOBALS['status'] == 'normal')
                                        <a class="breadcrumb__step" href="/quiz/{{$quiz->id}}">{{$quiz->name}}</a>
                                    @elseif($GLOBALS['status'] == 'active')
                                        <a class="breadcrumb__step breadcrumb__step--active"
                                            href="/quiz/{{$quiz->id}}">{{$quiz->name}}</a>
                                    @else


                                        <a class="breadcrumb__step disabled" href="#">{{$quiz->name}}</a>
                                    @endif
                                @empty
                                    No Quiz were Found
                                @endforelse
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No Lesson Found</td>
                    </tr>
                @endforelse

            </table>
        </div>
    @empty
        <h2>No Topics were Found </h2>
    @endforelse




@endsection
