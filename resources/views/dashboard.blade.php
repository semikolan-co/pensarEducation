@extends('layouts.app')
@section('content')
    




<div id="home" class="container-80">
    <div class="animate__fadeInLeft animate__animated contentcontainer">
       <!-- <h3>Some Random Text</h3> -->
       <span class="headingtext">{{Auth::user()->name}}</span>
       <h4>
          Age:{{Auth::user()->kidage}}  years, Class: {{Auth::user()->kidclass}}<br>
          <i class="fa fa-user"></i> &nbsp;{{Auth::user()->parentname}} <br>
          <i class="fa fa-phone"></i> &nbsp;{{Auth::user()->parentphone}} <br>
          <i class="fa fa-envelope"></i>&nbsp; {{Auth::user()->parentemail}} <br>
       </h4>
       <a class="button" href="products.php">Edit Profile</a>
    </div>
    <img src="img/illustration_kid.png" class="animate__fadeInRight animate__animated illustration" alt="Home Illustration">
 </div>
 
 
 
 
 
 
 
 
 
 
 <img src="img/illustration_courses.jpg" id="image" alt="" style="width:80%;margin-left: 10%;" usemap="#planetmap">
 <map name="planetmap">
    <?php
 
    $courses = ['phycom','advele','basele'];
    
       //   $detail = explode("-",$product);

    ?>
 
    @foreach ($courses as $course) 
      <area id="{{$course}}" shape="circle" coords="" href="/learn/{{$course}}" alt="Mercury">
    
    @endforeach
    <!-- <area id="phycom" shape="circle" coords="" href="learn.php?course=phycom" alt="Sun"> -->
    <!-- <area id="advele" shape="circle" coords="" href="learn.php?course=advele" alt="Mercury"> -->
    <!-- <area id="basele" shape="circle" coords="" href="learn.php?course=basele" alt="Venus"> -->
 </map>
 
 
 
 
 
 
 
 
 
 
 <script src="courseimage.js"></script>

 @endsection