
      AOS.init();

      // $(".autoplay").slick({
      //    slidesToShow: 4,
      //    slidesToScroll: 1,
      //    autoplay: true,
      //    autoplaySpeed: 2000,
      //    adaptiveHeight: true,
      //    responsive: [{
      //       breakpoint: 1024,
      //       settings: {
      //          slidesToShow: 3,
      //          slidesToScroll: 1,
      //          infinite: true,
      //          dots: true
      //       }
      //    },
      //    {
      //       breakpoint: 600,
      //       settings: {
      //          slidesToShow: 2,
      //          slidesToScroll: 1
      //       }
      //    },
      //    {
      //       breakpoint: 480,
      //       settings: {
      //          slidesToShow: 1,
      //          slidesToScroll: 1
      //       }
      //    }
      //       // You can unslick at a given breakpoint now by adding:
      //       // settings: "unslick"
      //       // instead of a settings object
      //    ]
      // });
      // $(".testimonialslider").slick({
      //    slidesToShow: 1,
      //    slidesToScroll: 1,
      //    autoplay: true,
      //    autoplaySpeed: 2000
      // });


      $("#bar").click(function () {
         $(".navigationbar").slideToggle();
         console.log("This Works");
      });



      $(document).ready(function () {
            $("#testimonial-slider").owlCarousel({
               autoplay:2000,
               items: 1, // THIS IS IMPORTANT
               responsive: {
                  480: { items: 1 }, // from zero to 480 screen width 4 items
                  768: { items: 2 }, // from 480 screen widthto 768 6 items
                  1024: {
                     items: 3   // from 768 screen width to 1024 8 items
                  }
               },
               pagination: true
            });


         });
         var owl = $(".owl-carousel-home");
            owl.owlCarousel({
               items: 1,
               // loop: true,
               // margin: 10,
               autoplay: true,
               autoplayTimeout: 1150,
               // autoplayHoverPause: true
            });