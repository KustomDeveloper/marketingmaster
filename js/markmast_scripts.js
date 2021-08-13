
jQuery(function () {
  jQuery('#lb-switch').on('click', function() {
    if(document.getElementById('lb-switch').checked) {
      jQuery('.local-business').fadeIn();
    } else {
      jQuery('.local-business').fadeOut();
    }
  });               
});

