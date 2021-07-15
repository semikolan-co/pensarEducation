@extends('layouts.app')
@section('content')
    






<div id="bookclass" class="container-80">
    <img data-aos="fade-left" src="img/illustration_login.jpg" class="illustration" alt="Home Illustration">
    <div data-aos="fade-right">
       <h3 class="headingtext">
          <center>Book a Free Class</center>
       </h3>
       <div class="bookclasscontent">
          <form action="booking.php" method="post" autocomplete="on">
             <input class="input" name="kidname" type="text" placeholder="Kid's Name" required>
             <!-- <input class="input" name="kidclass" type="text" placeholder="Kid's Class" required> -->
             <select class="input" name="kidclass" type="text" placeholder="Kid's Class" required>
                <option value="0" disabled>Kid's Class</option>
                <option value="1">First</option>
                <option value="2">Second</option>
                <option value="3">Third</option>
                <option value="4">Fourth</option>
                <option value="5">Fifth</option>
                <option value="6">Sixth</option>
                <option value="7">Seventh</option>
                <option value="8">Eight</option>
                <option value="9">Ninth</option>
                <option value="10">Tenth</option>
             </select>
             <input class="input" name="kidage" type="text" placeholder="Kid's Age" required>
             <input class="input" name="parentname" type="text" placeholder="Parent's Name" required>
             <input class="input" name="parentphone" type="phone" placeholder="Phone Number" onkeyup="this.value=this.value.replace(/[^\d]/,'')" MAXLENGTH="10" required>
             <input class="input" name="parentemail" type="email" placeholder="Email Address"><br>
             <button class="button" name="submit" type="submit">Book Class</button>
          </form>
       </div>
    </div>
 </div>
@endsection