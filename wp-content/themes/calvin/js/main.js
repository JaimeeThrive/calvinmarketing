



mySwiper = new Swiper ('.swiper-container', {
     autoHeight: true,
    loop:true,
    autoplay: {
        delay: 4000,
    },
    slidesPerView: 'auto',
    centeredSlides: true,
    pagination: {
      el: '.swiper-pagination',
       clickable:true,
    },

});
(function($) {

$('.client-carousel').owlCarousel({
  loop:true,
    margin:20,
    nav:false,

    responsive:{
        0:{
            items:1,
            autoplay: true,
            dots: false
        },
        600:{
            items:3,
            dots: true
        },
        1000:{
            items:4
        }
    }
})

})( jQuery );

jQuery(document).ready(function () {

  jQuery('.gg').on('click', function () {
     jQuery('.animated-icon2').toggleClass('open');
     jQuery('.menudiv').toggleClass('visible');
     jQuery('body').toggleClass('no-scroll');
  });

  jQuery('.closespan').on('click', function () {

    window.history.back();
  });

   jQuery('.textdiv').matchHeight({property:'min-height'});
   jQuery('.img-wrap').matchHeight({property:'min-height'});
   jQuery('.text-wrap').matchHeight({property:'min-height'});
    jQuery('.contentheight').matchHeight({property:'min-height'});




  var scrollLink = jQuery('.arrow-wrap');

  // Smooth scrolling
      scrollLink.click(function(e) {
        e.preventDefault();
        jQuery('body,html').animate({
          scrollTop: jQuery(this.hash).offset().top
        }, 500 );
      });

});