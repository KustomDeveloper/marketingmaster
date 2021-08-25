
jQuery(function () {

  /* 
  * Function Rulez
  * el must represent an element id
  * el must be a checkbox
  */
  function getValue(el) {
    if (document.getElementById(el).checked) {
      document.getElementById(el).setAttribute("value", "0");
    } else {
      document.getElementById(el).setAttribute("value", "1");
    }
  }
  
  //Show if enabled
  //Local Business Switch
  if(jQuery('#lb-switch').hasClass('checked')) {
    jQuery('.local-business').show();
  }
  //Product Review Switch
  if(jQuery('#pr-switch').hasClass('checked')) {
    jQuery('.product-review').show();
  }

  //Local Business Switch
  jQuery('#lb-switch').on('click', function() {
    getValue('lb-switch');

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

  //Product Review Switch
  jQuery('#pr-switch').on('click', function() {
    getValue('pr-switch');

    if(document.getElementById('pr-switch').checked) {
      const data = {
        "action" : "post_toggle_product_review_action_on",
        "toggle_value" : "0"
      } 
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.product-review').show();
    } else {

      const data = {
        "action" : "post_toggle_product_review_action",
        "toggle_value" : "1"
      }
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.product-review').hide();
    }
  });    

              
});

