$(document).ready(function(){
  $('.bxslider').bxSlider({
    slideMargin: 25,
    speed: 500,
    adaptiveHeight: true,
    adaptiveHeightSpeed: 500,
    pager: false,
    auto: true,
    pause: 12000,
    autoHover: true,
    nextSelector: '#js-Carousel-controlsNext',
    nextText: 'Volgende',
    prevSelector: '#js-Carousel-controlsPrev',
    prevText: 'Vorige'
  });
});

// Set carousel to normal height

$(document).ready(function(){
  $('.Carousel').toggleClass('is-collapsed');
});
