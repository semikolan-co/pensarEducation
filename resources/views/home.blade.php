@extends('layouts.app')
@section('content')
    

























<div id="landingpage">
   <div class="landingpagecontent">
      <span></span>
      <p>INTRODUCING PROGRAMMING GAMES FOR THE NEXT GENERATION</p>
      <a href="">Start for Free</a>
      <!-- <div class="owl-carousel-home">
               <img src="img/illustration_contactus.png" alt="" width="300px">
            </div> -->
   </div>
</div>


<div id="home" class="container-80">
   <div class="animate__fadeInLeft animate__animated contentcontainer">
      <!-- <h3>Some Random Text</h3> -->
      <span class="headingtext"> Effective Learning Classes for Kids </span>
      <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis Lorem ipsum dolor sit amet
         consectetur
         adipisicing elit.</h4>
      <a class="button" href="bookclass.php">Book a Free Class</a>
   </div>
   <img src="img/illustration_home.png" class="animate__fadeInRight animate__animated illustration" alt="Home Illustration">
</div>


<div id="about" class="container-80">
   <img data-aos="fade-up-right" src="img/illustration_about.png" class="illustration" alt="about illustration">
   <div data-aos="fade-up-left" class="contentcontainer">
      <!-- <h3>Some Random Text</h3> -->
      <span class="headingtext"> About Us</span>
      <h4>We are engaged in generating interest among students towards computer science,
         science, technology, engineering and
         mathematics (CS-STEM) through the innovative use of Robotics learning platform and other research based
         hands-on
         learning tools.</h4>
      <a class="button" href="bookclass.php">Book a Free Class</a>
   </div>
</div>


<!-- 
      <div id="courses">
         <span data-aos="zoom-in-up">Courses</span>
         <div class="coursescontent" data-aos="zoom-in-up">
            <div>
               <img src="img/course_electronics.png" alt="Some Alternate">
               <h3>Electronics</h3>
               <p>We'll work with you to develop the right strategy</p>
            </div>
            <div>
               <img src="img/course_automation.png" alt="Some Alternate">
               <h3>Robotics</h3>
               <p>We'll work with you to develop the right strategy</p>
            </div>
            <div>
               <img src="img/course_learning.png" alt="Some Alternate">
               <h3>Automation</h3>
               <p>We'll work with you to develop the right strategy</p>
            </div>
            <div>
               <img src="img/course_automation.png" alt="Some Alternate">
               <h3>Robotics</h3>
               <p>We'll work with you to develop the right strategy</p>
            </div>
            <div>
               <img src="img/course_learning.png" alt="Some Alternate">
               <h3>Automation</h3>
               <p>We'll work with you to develop the right strategy</p>
            </div>
            <div>
               <img src="img/course_electronics.png" alt="Some Alternate">
               <h3>Electronics</h3>
               <p>We'll work with you to develop the right strategy</p>
            </div>
         </div>
         <a href="" data-aos="zoom-in-up">Explore Courses</a>
      </div> -->








<div id="youtube">
   <!-- <iframe data-aos="zoom-in" src="https://www.youtube.com/embed/NdmwsmIaLms" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe> -->
   <img src="img/youtubethumbnail.jpg" onclick="document.getElementById('modal01').style.display='flex'" class="w3-hover-opacity">
</div>

<div id="modal01" class="modal w3-modal w3-animate-zoom" onclick="this.style.display='none';">
   <iframe data-aos="zoom-in" src="https://www.youtube.com/embed/NdmwsmIaLms" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

















<!-- 

<section class="testimonial text-center">
   <div class="container">

      <div class="heading white-heading">
         Why People Love us
      </div>
      <div id="testimonial4"
         class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
         data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="testimonial4_slide">
                  <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                     and scrambled it to make a type specimen book. </p>
                  <h4>Client 1</h4>
               </div>
            </div>
            <div class="carousel-item">
               <div class="testimonial4_slide">
                  <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                     and scrambled it to make a type specimen book. </p>
                  <h4>Client 2</h4>
               </div>
            </div>
            <div class="carousel-item">
               <div class="testimonial4_slide">
                  <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                     and scrambled it to make a type specimen book. </p>
                  <h4>Client 3</h4>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#testimonial4" data-slide="next">
            <span class="carousel-control-next-icon"></span>
         </a>
      </div>
   </div>
</section> -->






<div class="demo" id="testimonial">
   <div>

      <h3 class="headingtext">Why People Love Us</h3>

   </div>
   <div class="container">
      <div class="row">

         <div id="testimonial-slider" class="owl-carousel">

            <div class="testimonial">
               <span class="icon fa fa-quote-left"></span>
               <p class="description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.
               </p>
               <div class="testimonial-content">
                  <div class="pic">
                     <img src="https://picsum.photos/130/130?image=1027" alt="">
                  </div>
                  <h3 class="name">Michele Miller</h3>
                  <span class="title">PArent Name</span>
               </div>
            </div>
            <div class="testimonial">
               <span class="icon fa fa-quote-left"></span>
               <p class="description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.
               </p>
               <div class="testimonial-content">
                  <div class="pic">
                     <img src="https://picsum.photos/130/130?image=839" alt="">
                  </div>
                  <h3 class="name">Patricia Knott</h3>
                  <span class="title">PArent Name</span>
               </div>
            </div>
            <div class="testimonial">
               <span class="icon fa fa-quote-left"></span>
               <p class="description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.
               </p>
               <div class="testimonial-content">
                  <div class="pic">
                     <img src="https://picsum.photos/130/130?image=856" alt="">
                  </div>
                  <h3 class="name">Justin Ramos</h3>
                  <span class="title">PArent Name</span>
               </div>
            </div>
            <div class="testimonial">
               <span class="icon fa fa-quote-left"></span>
               <p class="description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.
               </p>
               <div class="testimonial-content">
                  <div class="pic">
                     <img src="https://picsum.photos/130/130?image=836" alt="">
                  </div>
                  <h3 class="name">Mary Huntley</h3>
                  <span class="title">PArent Name</span>
               </div>
            </div>
            <div class="testimonial">
               <span class="icon fa fa-quote-left"></span>
               <p class="description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.
               </p>
               <div class="testimonial-content">
                  <div class="pic">
                     <img src="https://picsum.photos/130/130?image=883" alt="">
                  </div>
                  <h3 class="name">Aaron Newell</h3>
                  <span class="title">PArent Name</span>
               </div>
            </div>
            <div class="testimonial">
               <span class="icon fa fa-quote-left"></span>
               <p class="description">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s.
               </p>
               <div class="testimonial-content">
                  <div class="pic">
                     <img src="https://picsum.photos/130/130?image=777" alt="">
                  </div>
                  <h3 class="name">Lizzie Geren</h3>
                  <span class="title">PArent Name</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


































<div id="ourteam" class="container-80">
   <div class="contentcontainer">
      <span data-aos="zoom-in-up" class="headingtext">Our Team</span>
   </div>
   <div class="ourteambottom">
      <div data-aos="zoom-in-up">
         <img src="img/team_pranay.jpg" alt="">
         <p>Pranay Das</p>
      </div>
      <div data-aos="zoom-in-up">
         <img src="img/team_pranay1.jpg" alt="">
         <p>Pranay Das</p>
      </div>
   </div>
</div>



<div id="contactus" class="container-80">
   <div data-aos="fade-up-left" class="contentcontainer">
      <span class="headingtext"> Question?<br>Get in Touch</span>
      <h4>We'll be happy to help answer any of your questions. Send us an email and we'll get back to you
         shortly..</h4>
      <a class="button" href="contact.php">Contact Us</a>
   </div>
   <img data-aos="fade-up-right" src="img/illustration_contactus.png" class="illustration" alt="Home Illustration">
</div>














@endsection



