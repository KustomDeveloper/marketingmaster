
jQuery(function () {
  if(jQuery('#lb-switch').hasClass('checked')) {
    jQuery('.local-business').fadeIn();
  }
  jQuery('#lb-switch').on('click', function() {
    if(document.getElementById('lb-switch').checked) {
      jQuery('.local-business').fadeIn();
    } else {
      jQuery('.local-business').fadeOut();
    }
  });    

  jQuery('#pr-switch').on('click', function() {
    if(document.getElementById('pr-switch').checked) {
      jQuery('.product-review').fadeIn();
    } else {
      jQuery('.product-review').fadeOut();
    }
  });               
});

