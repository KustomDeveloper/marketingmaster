
jQuery(function () {

  /* 
  * Function Rules
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
    jQuery('.local-seo-business').show();
  }
  //Product Review Switch
  if(jQuery('#pr-switch').hasClass('checked')) {
    jQuery('.local-seo-product-review').show();
  }
  //Customer Review Switch
  if(jQuery('#cr-switch').hasClass('checked')) {
    jQuery('.local-seo-customer-review').show();
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
      jQuery('.local-seo-business').show();
    } else {

      const data = {
        "action" : "post_toggle_local_schema_action",
        "toggle_value" : "1"
      }
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.local-seo-business').hide();
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
      jQuery('.local-seo-product-review').show();
    } else {

      const data = {
        "action" : "post_toggle_product_review_action",
        "toggle_value" : "1"
      }
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.local-seo-product-review').hide();
    }
  });    

  //Customer Review Switch
  jQuery('#cr-switch').on('click', function() {
    getValue('cr-switch');

    if(document.getElementById('cr-switch').checked) {
      const data = {
        "action" : "post_toggle_customer_review_action_on",
        "toggle_value" : "0"
      } 
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.local-seo-customer-review').show();
    } else {

      const data = {
        "action" : "post_toggle_customer_review_action",
        "toggle_value" : "1"
      }
      jQuery.post(ajaxurl, data, function(e) {});
      jQuery('.local-seo-customer-review').hide();
    }
  });    

  //Captcha 
  jQuery('#local-schema-customer-review-captcha').on('change', function() {
    let val = jQuery('#local-schema-customer-review-captcha').val();
    console.log(val);

    if(val == 'yes') {
      console.log('it equals yes');

      jQuery('.keys').each(function() {
        jQuery(this).removeClass('hidden-element');
      })
    }

    if(val == 'no') {
      console.log('it equals yes');

      jQuery('.keys').each(function() {
        jQuery(this).addClass('hidden-element');
      })
    } else {
      // Do Nothing.
    }
  });
  

  // hidden-element

              
});

