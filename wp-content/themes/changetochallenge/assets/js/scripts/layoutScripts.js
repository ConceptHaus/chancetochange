//Scripts layoutScripts v1.0

$(function(){
  $('.slideItemsPoints').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    dots: false,
    speed: 300,
    arrows: false,
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
  });
  $('.slideItemsPils').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    dots: false,
    speed: 300,
    prevArrow: $('#prevslidePils'),
    nextArrow: $('#nextslidePils'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.slideItemsAdven').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    dots: false,
    speed: 300,
    prevArrow: $('#prevslideAdven'),
    nextArrow: $('#nextslideAdven'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
  $('.slideServiciosHome').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    dots: false,
    speed: 300,
    prevArrow: $('#prevslideServ'),
    nextArrow: $('#nextslideServ'),
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $('.icons-conts').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
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
  });
  $('.icons-contsSngle').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots: false,
    speed: 300,
    prevArrow: $('#prevslideSingle'),
    nextArrow: $('#nextslideSingle'),
    responsive: [
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 200,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $(".showAllMonth").click(function(){
    
    // Si elemento esta visible lo oculta y si no lo muestra
    if ($('.contMenu').is(':visible')) {
      $('.contMenu').hide();
    } else {
      $('.contMenu').show();
    }

  });

  
});

$(document).ready(function(){ irArriba(); }); //Hacia arriba

function irArriba(){
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
  });
  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}



