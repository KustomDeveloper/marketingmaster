<?php include('process.php'); ?>

<div id="markmast-main-options">

  <h1>Marketing Master Settings</h1>

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
      
      <div class="local-business hide-elements">
        <label for="Business Name" class="b-label">Business Name*
          <input class="input-block" type="text" name="local-business-name" value="<?php echo $local_schema_name; ?>" required>
        </label>

        <label for="Business Image" class="b-label">Business Img*
          <input class="input-block" type="text" name="local-business-img" value="<?php echo $local_schema_img; ?>" required>
        </label>

        <label for="Business Phone"  class="b-label">Business Phone*
          <input class="input-block" type="text" name="local-business-phone" value="<?php echo $local_schema_phone; ?>" required>
        </label>

        <label for="Business Logo" class="b-label">Business Logo*
          <input class="input-block" type="text" name="local-business-logo" value="<?php echo $local_schema_logo; ?>" required>
        </label>

        <label for="Business Desription" class="b-label">Business Description*
          <input class="input-block" type="text" name="local-business-description" value="<?php echo $local_schema_description; ?>" required>
        </label>

        <label for="Business Hours" class="b-label">Business Hours* <span class="openhours-example">(default: Su,Mo,Tu,We,Th,Fr,Sa 00:00-24:00)</span>
          <input class="input-block" type="text" name="local-business-hours" value="<?php if($local_schema_hours) { echo $local_schema_hours; } else { echo "Su,Mo,Tu,We,Th,Fr,Sa 00:00-24:00"; } ?>" required>
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

        <input id="submit-btn" type="submit" name="submit_btn" value="Save Local Schema">
      </div>
    </form>
 


  <div class="switchbox checkbox-2">
  <h3>Product Review</h3>
    <label class="switch">
      <input id="pr-switch" type="checkbox" name="box2">
      <span class="slider round"></span>
    </label>
  </div>

  <div class="product-review hide-elements">
    <form action="">
      <label for="Product Name" class="b-label">Product Name
        <input class="input-block" type="text" name="" required>
      </label>
    </form>
  </div>

  <div class="switchbox checkbox-3">
    <label class="switch">
      <input type="checkbox" name="box3">
      <span class="slider round"></span>
    </label>
  </div>
</div>



 


