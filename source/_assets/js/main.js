 
 

$(window).on('load', function() {
    $(".loader").addClass('disable')
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