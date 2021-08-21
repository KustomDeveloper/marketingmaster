
jQuery(function () {

  function getValue() {
    if (document.getElementById('lb-switch').checked) {
      document.getElementById('lb-switch').setAttribute("value", "0");
    } else {
      document.getElementById('lb-switch').setAttribute("value", "1");
    }
  }
  
  if(jQuery('#lb-switch').hasClass('checked')) {
    jQuery('.local-business').show();
  }

  jQuery('#lb-switch').on('click', function() {
    getValue();

    if(document.getElementById('lb-switch').checked) {
      const data = {
        "action" : "post_toggle_local_schema_action_on",
        "toggle_value" : "0"
      } 
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.local-business').show();
    } else {

      const data = {
        "action" : "post_toggle_local_schema_action",
        "toggle_value" : "1"
      }
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.local-business').hide();
    }
  });    

              
});

