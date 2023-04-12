 
 

$(window).on('load', function() {
    $(".loader").addClass('disable')
});

const swiper = new Swiper('.swiper', {
  // Optional parameters
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay:true,
  speed:2000,
  loop: true,

  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination', 
  // },

  // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },

 
});

$('.chef__item').click(function(){
  $('.chef__content').toggleClass('hidden');
  $('.home__content').toggleClass('hidden');
  $('.toggle__content').toggleClass('hidden');
  $('.sando__item').toggleClass('disabled')
});
$('.sando__item').click(function(){
  $('.sando__content').toggleClass('hidden');
  $('.home__content').toggleClass('hidden');
  $('.toggle__content').toggleClass('hidden');
  $('.chef__item').toggleClass('disabled')
});

$('.closed__sando').click(function(){
  $('.sando__content').toggleClass('hidden');
  $('.home__content').toggleClass('hidden');
  $('.toggle__content').toggleClass('hidden');
  $('.chef__item').toggleClass('disabled')
});

$('.closed__chef').click(function(){
  $('.chef__content').toggleClass('hidden');
  $('.home__content').toggleClass('hidden');
  $('.toggle__content').toggleClass('hidden');
  $('.sando__item').toggleClass('disabled')
});


$('[name="map_checkbox"]').change(function()
{
  if ($(this).is(':checked')) {
    
    $('.plan__content').toggleClass('active');
    $('.home__content').toggleClass('active');
  }
  else{
    $('.plan__content').toggleClass('active');
    $('.home__content').toggleClass('active');
};

});