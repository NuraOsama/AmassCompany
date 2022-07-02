(function ($) {

    "use strict";
   
    new WOW().init();


     

    // sticky header
    $(document).ready(function () {
      var $sticky = $('header');
      var stickyOffsetTop = $sticky.offset().top;
    
      $(window).scroll(function (e) {
          e.preventDefault();
    
          var scrollTop = $(window).scrollTop();
    
          if (scrollTop > stickyOffsetTop) {
              $sticky.addClass('sticky-navbar');
          } else {
              $sticky.removeClass('sticky-navbar');
          }
      });
    });


    // image activate
    setTimeout(() => {

      $(".newsfeed-sec .image").addClass('activate');

    }, "2300")
    //effect image

  window.onload = function() {
  
      if($(".effect-image").length){


        const results = Splitting({
          target: ".effect-image",
          by: "cells",
          image: true,
          rows: 15
        });
      
        function myCallback(el) {
          var a = new TimelineMax();
          return a.staggerFromTo(
            ".cell",
            0.5,
            {
             x: ($('html').attr('lang','en')) ? 400 : -400,
              opacity: 0,
            },
            {
              x: 0,
              opacity: 1,
              ease: Power2.ease
            },
            0.15
          );
        }
      
        $(".effect-image").waypoint(
          function(direction) {
            if (direction === "down") {

                myCallback();
             
            }
            this.destroy(); 
          },
          {
            offset: "100%"
          }
        );
        }
    
  }

 
     // sticky header
    $(document).ready(function () {
      var $sticky = $('header');
      var stickyOffsetTop = $sticky.offset().top;
    
      $(window).scroll(function (e) {
          e.preventDefault();
    
          var scrollTop = $(window).scrollTop();
    
          if (scrollTop > stickyOffsetTop) {
              $sticky.addClass('sticky-navbar');
          } else {
              $sticky.removeClass('sticky-navbar');
          }
      });
    });


    let delay=0;

    //responsive navbar
    $(".navbar-toggler").click(function(){

      $(".navbar-collapse").toggleClass("active");
      $(this).toggleClass('expanded');

      if($(this).hasClass("expanded")){
      
        setTimeout(function () {
            $('.nav-link').addClass("show").removeClass('hide');
        }, delay += 50);

        $('body').css('overflow-y','hidden');

      }
      else{

        setTimeout(function () {
          $('.nav-link').removeClass("show").addClass('hide');
        }, delay -= 50);
        $('body').css('overflow-y','auto');

      }
    
    });

    $(window).on('scroll', revealOnScroll);

    function revealOnScroll() {
    var scrolled = $(window).scrollTop(),
     winheightpadded = $(window).height() * 1.1;

   $(".effect").each(function () {
     var $this     = $(this),
       offsetTop = $this.offset().top;

   if (scrolled + winheightpadded > offsetTop) {
     if ($this.data('timeout')) {
       window.setTimeout(function(){
         $this.addClass('active');
       }, parseInt($this.data('timeout'),10));
     } 

     else {
       $this.addClass('active');
      
     }
    }
 });

}
revealOnScroll(); 


// anchor prevent default
$("a[href='.']").click(function(event){

  event.stopPropagation();
  event.preventDefault();


})

 // single select
 if($("select").length){
 $(".js-example-placeholder-single").select2({
  placeholder: ($("html").attr("lang")== "en") ? "Select subject here" :"اختر موضوعك من هنا",
  allowClear: true,
  maximumSelectionLength: 2,
  "language": {
    "noResults": function(){
        return ($("html").attr("lang")== "en") ? "No Results Found":"لم يتم العثور على نتائج";
    },
  }
  }); 
}

   // validation
   let forms = document.getElementsByClassName('needs-validation'),
   validation = Array.prototype.filter.call(forms, function(form) {
   form.addEventListener('submit', function(event) {
   if (form.checkValidity() === false) {
     event.preventDefault();
     event.stopPropagation();
   }

   form.classList.add('was-validated');

   }, false);
  });


  //email validation
   $("input[type='email']").on('input',function() {
    var pattern =  /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
    var email = $(this).val();
    if (pattern.test(email)) {
     $(this).parent(".mb-4").find(".invalid-feedback").css("display","none");
      $(this).addClass("is-valid").removeClass("is-invalid");
    }
    else{
     $(this).parent(".input-effect").find(".invalid-feedback").css("display","block")
     if($("html").attr("lang")== "en"){

         $(this).parent(".mb-4").find(".invalid-feedback").html("Invalid Email Address  'info@example.com' ");


     }
     else{

         $(this).parent(".mb-4").find(".invalid-feedback").html("البريد الإلكتروني غير صحيح  'info@example.com' ");

     }
     $(this).addClass("is-invalid").removeClass("is-valid");

    }

   });


    
    // auto complete
    $(".form-control").attr("autocomplete","off");
     

 // scroll to top

//  $(window).on('scroll',function(){

//   if($(this).scrollTop() > 150) {

//     $(".auto-scroll-to-top").removeClass("non-hover");
//      $(".auto-scroll-to-top").addClass("visible");
//    } else {

//     $(".auto-scroll-to-top").addClass("non-hover");
//     $(".auto-scroll-to-top").removeClass("visible");
//    }
//     if($(this).scrollTop() + $(window).height() > $(document).height() - 600) {
//       if (window.matchMedia('(min-width: 992px)').matches){

//         $(".auto-scroll-to-top").addClass("bottom");
//       }
//      }
//      else if($(this).scrollTop() + $(window).height() > $(document).height() - 850){

//       if (window.matchMedia('(max-width: 991px) and (min-width: 768px)').matches){

//         $(".auto-scroll-to-top").addClass("bottom");
//       }
//      }

//      else if($(this).scrollTop() + $(window).height() > $(document).height() - 1000){

//       if (window.matchMedia('(max-width: 767px) and (min-width: 576px)').matches){

//         $(".auto-scroll-to-top").addClass("bottom");
//       }
//      }
//      else if($(this).scrollTop() + $(window).height() > $(document).height() - 1200){

//       if (window.matchMedia('(max-width: 575px) ').matches){

//         $(".auto-scroll-to-top").addClass("bottom");
//       }
//      }
    
//     else{
  
//       $(".auto-scroll-to-top").removeClass("bottom");
  
//      }
  
// });


$(window).on('scroll',function(){

  if($(this).scrollTop() > 150) {

    $(".auto-scroll-to-top").removeClass("non-hover");
    $(".auto-scroll-to-top").addClass("visible");

   } 
   else {

     $(".auto-scroll-to-top").addClass("non-hover");
     $(".auto-scroll-to-top").removeClass("visible");

   }
});

$('.auto-scroll-to-top').on('click touchend', function() {
  $("html, body").animate({scrollTop: 0}, 500);
});


 //prevent zoom in browser
 $(document).keydown(function(event) {

  if (event.ctrlKey==true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109'  || event.which == '187'  || event.which == '189'  ) ) {
  event.preventDefault();

   }
  });

  $(window).bind('mousewheel DOMMouseScroll', function (event) {
  if (event.ctrlKey == true) {
      event.preventDefault();
  }
  });

 })(jQuery);



 

