<?php include('process.php'); ?>
<?php include('options-variables.php'); ?>

<div id="markmast-main-options">
  <h1>General Settings</h1>

    <form method='POST'>
      
      <div class="switchbox checkbox-1">
        <?php $local_schema = get_option('local_schema'); ?>
        <h3>Local Business Schema</h3>
        <label class="switch">
          <input id="lb-switch" type="checkbox" name="box1" <?php if(get_option('local_schema_settings') == '0') { echo "class='checked'" . "checked" . " value='0'"; } ?>>
          <span class="slider round"></span>
          <input type="hidden" name="hidden-box-1">
        </label>
      </div>
      
      <div class="local-seo-business hide-elements">
        <label for="Business Name" class="b-label">Business Name*
          <input class="input-block" type="text" name="local-business-name" value="<?php echo $local_schema_name; ?>" required>
        </label>

        <label for="Business Image" class="b-label">Business Img*
          <input class="input-block" type="text" name="local-business-img" value="<?php echo $local_schema_img; ?>" required>
        </label>

        <label for="Business Phone"  class="b-label">Business Phone*
          <input class="input-block" type="text" name="local-business-phone" value="<?php echo $local_schema_phone; ?>" required>
        </label>

        <label for="Business Email"  class="b-label">Business Email*
          <input class="input-block" type="text" name="local-business-email" value="<?php echo $local_schema_email; ?>" required>
        </label>

        <label for="Business Logo" class="b-label">Business Logo*
          <input class="input-block" type="text" name="local-business-logo" value="<?php echo $local_schema_logo; ?>" required>
        </label>

        <label for="Business Desription" class="b-label">Business Description*
          <input class="input-block" type="text" name="local-business-description" value="<?php echo $local_schema_description; ?>" required>
        </label>

        <label for="Business Hours" class="b-label">Business Hours* <span class="openhours-example">(default: Su,Mo,Tu,We,Th,Fr,Sa 00:00-24:00)</span>
          <input class="input-block" type="text" name="local-business-hours" value="<?php if($local_schema_hours) { echo $local_schema_hours; } else { echo "Su,Mo,Tu,We,Th,Fr,Sa 00:00-24:00"; } ?>" required>
          <small>How do I format my business hours correctly? <a href="#">Documentation</a></small>
        </label>

        <h3>Business Address</h3>
        <label for="Business " class="b-label">Business Street*
          <input class="input-block" type="text" name="local-business-street-address" value="<?php echo $local_schema_street; ?>" required>
        </label>

        <label for="Business City" class="b-label">Business City*
          <input class="input-block" type="text" name="local-business-city" value="<?php echo $local_schema_city; ?>" required>
        </label>

        <label for="Business State" class="b-label">Business State*
          <input class="input-block" type="text" name="local-business-state" value="<?php echo $local_schema_state; ?>" required>
        </label>

        <label for="Business Zip" class="b-label">Business Zip*
          <input class="input-block" type="text" name="local-business-zip" value="<?php echo $local_schema_zip; ?>" required>
        </label>  

        <label for="Business Map" class="b-label">Map URL*
          <input class="input-block" type="text" name="local-business-map" value="<?php echo $local_schema_map; ?>" required>
          <small>Where do I get the map url? <a href="#">Documentation</a></small>
        </label>  

        <label for="Business Latitude" class="b-label">Map Latitude*
          <input class="input-block" type="text" name="local-business-latitude" value="<?php echo $local_schema_latitude; ?>" required>
          <small>Where do I get the Latitude? <a href="#">Documentation</a></small>
        </label> 

        <label for="Business Longitude" class="b-label">Map Longitude*
          <input class="input-block" type="text" name="local-business-longitude" value="<?php echo $local_schema_longitude; ?>" required>
          <small>Where do I get the Longitude? <a href="#">Documentation</a></small>
        </label>  
      

        <h3>Social Media</h3>
        <label for="Business Facebook" class="b-label">Facebook
          <input class="input-block" type="text" name="local-business-facebook" value="<?php echo $local_schema_facebook; ?>">
        </label>  
        <label for="Business Twitter" class="b-label">Twitter
          <input class="input-block" type="text" name="local-business-twitter" value="<?php echo $local_schema_twitter; ?>">
        </label>  
        <label for="Business YouTube" class="b-label">YouTube
          <input class="input-block" type="text" name="local-business-youtube" value="<?php echo $local_schema_youtube; ?>">
        </label>  
        <label for="Business Pinterest" class="b-label">Pinterest
          <input class="input-block" type="text" name="local-business-pinterest" value="<?php echo $local_schema_pinterest; ?>">
        </label>  


        <input id="submit-btn" type="submit" name="submit_btn" value="Save Local Schema">
      </div>
    </form>
 


  <div class="switchbox checkbox-2">
  <h3>Product Review</h3>
    <label class="switch">
      <input id="pr-switch" type="checkbox" name="box2" <?php if(get_option('product_review_schema_settings') == '0') { echo "class='checked'" . "checked" . " value='0'"; } ?>>
      <span class="slider round"></span>
    </label>
  </div>

  <div class="local-seo-product-review hide-elements">
  <form method='POST'>
        <label for="Product Review Name" class="b-label">Product Review Name
          <input class="input-block" type="text" name="local-schema-product-name" value="<?php echo $local_schema_product_name; ?>">
        </label>  
        <label for="Product Review Description" class="b-label">Product Review Description
          <textarea class="input-block" name="local-schema-product-description" rows="5" ><?php echo $local_schema_product_description; ?></textarea>
        </label>  
        <input id="product_review_submit_btn" type="submit" name="product_review_submit_btn" value="Save Product Review">
    </form>
  </div>

  <div class="switchbox checkbox-3">
  <h3>Customer Review</h3>
    <label class="switch">
      <input id="cr-switch" type="checkbox" name="box3" <?php if(get_option('customer_review_schema_settings') == '0') { echo "class='checked'" . "checked" . " value='0'"; } ?>>
      <span class="slider round"></span>
    </label>
  </div>
</div>

<div class="local-seo-customer-review hide-elements">
  <form method='POST'>
        <label for="How Many Reviews To Show Per Page" class="b-label">How Many Reviews To Show Per Page?*
          <select class="input-block" name="local-schema-customer-review-how-many-to-show" id="local-schema-customer-review-how-many-to-show">
            <option value='1'<?php echo $selected = ($local_schema_customer_review_limit == "1") ? " selected" : ""; ?>>1</option>
            <option value='5'<?php echo $selected = ($local_schema_customer_review_limit == "5") ? " selected" : ""; ?>>5</option>
            <option value='10'<?php echo $selected = ($local_schema_customer_review_limit == "10") ? " selected" : ""; ?>>10</option>
            <option value='15'<?php echo $selected = ($local_schema_customer_review_limit == "15") ? " selected" : ""; ?>>15</option>
            <option value='20'<?php echo $selected = ($local_schema_customer_review_limit == "20") ? " selected" : ""; ?>>20</option>
          </select>
        </label>  

        <label for="Add Pagination" class="b-label">Show Pagination?*
          <select class="input-block" name="local-schema-customer-review-pagination" id="local-schema-customer-review-pagination">
            <option value="yes" <?php echo $selected = ($local_schema_customer_review_pagination == "yes") ? " selected" : ""; ?>>Yes</option>
            <option value="no" <?php echo $selected = ($local_schema_customer_review_pagination == "no") ? " selected" : ""; ?>>No</option>
          </select>
        </label>  

        <input id="product_review_submit_btn" type="submit" name="customer_review_submit_btn" value="Save Review Settings">
    </form>
  </div>