;(function( $ ){



window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky-head");
  } else {
    header.classList.remove("sticky-head");
  }
}


$('#writer-slider').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})

$('#reviews-slider').owlCarousel({
  loop:false,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})











$(window).scroll(function() {
  /* back to top */
  if ($(this).scrollTop() > 300) {
    $('#backTotop').fadeIn(200);
  } else {
    $('#backTotop').fadeOut(200);
  }
});
 /* back to top */
$("#backTotop").on( 'click', function(e) {
  e.preventDefault();
  $("html, body").animate({scrollTop: 0}, 1000);
});



$('#writer-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})







})( jQuery );






 // $('#writer-slider .owl-dot').attr('aria-label', 'button');
 
 
  
 
  
  $('.owl-carousel').each(function() {
    //Find each set of dots in this carousel
  $(this).find('.owl-dot').each(function(index) {
    //Add one to index so it starts from 1
    $(this).attr('aria-label', index + 1);
  });
});


(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/651d62f3e6bed319d005d009/1hbtcl288';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

