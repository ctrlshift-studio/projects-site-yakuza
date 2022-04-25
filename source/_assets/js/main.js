 
 

$(window).on('load', function() {
    $(".loader").addClass('disable')
});

$('[name="map_checkbox"]').change(function()
{
  if ($(this).is(':checked')) {
    
    $('.plan__content').fadeToggle();
  }
  else{
    $('.plan__content').fadeToggle();
};

});