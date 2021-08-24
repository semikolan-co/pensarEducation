
      <div class="header">
         <!-- <img class="animate__fadeInLeft animate__animated logo" src="img/logo.png" alt=" Urbn Farm Logo"> -->
         <span class="animate__animated animate__fadeInUp logo-text">Pensar Edu.</span>
         <i id="bar" class="fas fa-bars"></i>
         <div class="navigationbar">
            <a href="/" class="animate__fadeInUp animate__animated navitem">Home</a>
            <a href="/courses" class="animate__fadeInUp animate__animated navitem">Courses</a>
        

            {{-- If user is Login --}}
            @if(Auth::check())
            <form action="/logout" method="post">
               @csrf
               <button  class="animate__fadeInUp animate__animated navitem">LogOut</button>
            </form>
            <a href="/dashboard" class="animate__fadeInUp animate__animated navitem">Dashboard</a>
            {{-- If user is not Login --}}
            @else
            <a href="login" class="animate__fadeInUp animate__animated navitem">Login</a>
            <a href="bookclass" class="animate__fadeInUp animate__animated navitem">Book a Free Class</a>  
            @endif


         </div>
      </div>
           