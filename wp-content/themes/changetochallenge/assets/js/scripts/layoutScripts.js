//Scripts layoutScripts v1.0

$(function(){
<<<<<<< HEAD
  $('.icons-conts').slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: false,
    dots: false,
    speed: 300,
    prevArrow: $('#prevslideHome'),
    nextArrow: $('#nextslideHome'),
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
=======
    
$('.card-carousel').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1
>>>>>>> 82bfc183436575c1a9b50039795671af58be0815
  });
});