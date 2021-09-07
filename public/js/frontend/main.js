$(document).ready(function(){
    $('#hActivity-main-box').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        accessibility: true,

         // the magic
  responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: true
      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }

    }, {

      breakpoint: 300,
      settings: {
        slidesToShow: 1,
        dots: true
      }

    }]
    });



  });