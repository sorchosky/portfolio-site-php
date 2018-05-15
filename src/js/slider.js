$(document).ready(function(){

  $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplaySpeed: 4000,
    arrows: false,
    dots: false
  });
});

$('a[data-slide]').click(function(e) {
   e.preventDefault();
   $('.slider-nav a').removeClass("active");
   $(this).addClass("active");
   var slideno = $(this).data('slide');
   $('.slider').slick('slickGoTo', slideno - 1);
 });

  // $('.release-screens').slick({
  //   slidesToShow: 3,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 4000,
  //   dots: true,
  //   responsive: [
  //     {
  //       breakpoint: 800,
  //       settings: {
  //         slidesToShow: 2,
  //       }
  //     }
  //   ]
  // });
  // $('.pitch-deck-slides').slick({
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 4000,
  //   dots: true,
  // });
