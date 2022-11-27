 
 

$(window).on('load', function() {
    $(".loader").addClass('disable')
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