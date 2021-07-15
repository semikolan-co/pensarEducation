@extends('layouts.app')
@section('content')
    




<div id="home" class="container-80">
    <div class="animate__fadeInLeft animate__animated contentcontainer">
       <!-- <h3>Some Random Text</h3> -->
       <span class="headingtext"> COURSES </span>
       <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis Lorem ipsum dolor sit amet
          consectetur
          adipisicing elit.</h4>
       <a class="button" href="products.php">Book a Free Class</a>
    </div>
    <img src="img/illustration_about.png" class="animate__fadeInRight animate__animated illustration" alt="Home Illustration">
 </div>










 <div id="youtube"> 
    <img src="img/youtubethumbnail.jpg" onclick="document.getElementById('modal01').style.display='flex'" class="w3-hover-opacity">

 </div>


<img src="img/illustration_courses.jpg" id="image" alt="" style="width:80%;margin-left: 10%;" usemap="#planetmap">
<map name="planetmap">
<area id="phycom" shape="circle" coords="24,43,50" href="#course01" alt="Sun">
<area id="advele" shape="circle" coords="90,58,3" href="#course02" alt="Mercury">
<area id="basele" shape="circle" coords="220,280,20" href="#course03" alt="Venus">
</map>



<div id="course01" class="container-80 coursebox">
<div data-aos="zoom-in" class="contentcontainer">
 <!-- <h3>Some Random Text</h3> -->
 <span class="headingtext"> COURSES </span>
 <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis Lorem ipsum dolor sit amet
    consectetur
    adipisicing elit.</h4>
 <a href="bookclass.php" class="button">Book a Free Class</a>
</div>

<img class="illustration" src="img/youtubethumbnail.jpg" onclick="document.getElementById('modal01').style.display='flex'" class="w3-hover-opacity">

</div>



<div id="course02" class="container-80 coursebox">
<img class="illustration" src="img/youtubethumbnail.jpg" onclick="document.getElementById('modal01').style.display='flex'" class="w3-hover-opacity">

<div data-aos="zoom-in" class="contentcontainer">
 <!-- <h3>Some Random Text</h3> -->
 <span class="headingtext"> COURSES </span>
 <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis Lorem ipsum dolor sit amet
    consectetur
    adipisicing elit.</h4>
 <a href="bookclass.php" class="button">Book a Free Class</a>
</div>
</div>

<div id="course03" class="container-80 coursebox">
<div data-aos="zoom-in" class="contentcontainer">
 <!-- <h3>Some Random Text</h3> -->
 <span class="headingtext"> COURSES </span>
 <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis Lorem ipsum dolor sit amet
    consectetur
    adipisicing elit.</h4>
 <a href="bookclass.php" class="button">Book a Free Class</a>
</div>

<img class="illustration" src="img/youtubethumbnail.jpg" onclick="document.getElementById('modal01').style.display='flex'" class="w3-hover-opacity">

</div>







<div id="modal01" class="modal w3-modal w3-animate-zoom" onclick="this.style.display='none'">
<iframe data-aos="zoom-in" src="https://www.youtube.com/embed/NdmwsmIaLms" frameborder="0"
 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
 allowfullscreen></iframe>
</div>








<script src="courseimage.js"></script>


@endsection