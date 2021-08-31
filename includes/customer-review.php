<?php
/*
*  Customer reviews template
*/

/*
*  Create New Page: Customer Reviews
*/

//Create Page





/*
*  Create Frontend Form
*/
function local_schema_customer_review_form() {
  echo '
    <form method="POST">
      <div class="mb-3">
        <input type="radio" id="oneS" name="reviewStars" value="1">
        <label for="onestar">1</label>
        <input type="radio" id="twoS" name="reviewStars" value="2">
        <label for="twostar">2</label>
        <input type="radio" id="threeS" name="reviewStars" value="3">
        <label for="threestar">3</label>
        <input type="radio" id="fourS" name="reviewStars" value="4">
        <label for="fourstar">4</label>
        <input type="radio" id="fiveS" name="reviewStars" value="5">
        <label for="fivestar">5</label>
      </div>

      <div class="mb-3">
        <label for="Customer Review Name" class="b-label col-form-label">Customer Review Name*</label>  
        <input class="form-control input-block" type="text" name="local-schema-customer-review-name" value="">
      </div>

      <div class="mb-3">
        <label for="Customer Review Email" class="b-label col-form-label">Email*</label>  
        <input class="form-control input-block" type="text" name="local-schema-customer-review-email" value="">
      </div>

      <div class="mb-3">
        <label for="Product Review Description" class="b-label col-form-label">Customer Review Description*</label>  
        <textarea class="form-control input-block" name="local-schema-customer-review-description" rows="5" ></textarea>
      </div>

      <div class="mb-3">
        <input id="local_schema_customer_review_submit" type="submit" name="local_schema_customer_review_submit" value="Submit">
      </div>

    </form>';

    if($_POST['local_schema_customer_review_submit']) {
      $stars = $email = $name = $description = "";
      function markmast_clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $stars = $_POST['stars'];
      $email = markmast_clean_input($_POST['local-schema-customer-review-email']);
      $name = markmast_clean_input($_POST['local-schema-customer-review-name']);
      $description = markmast_clean_input($_POST['local-schema-customer-review-description']);

      echo $stars . '<br>'; 
      echo $email . '<br>'; 
      echo $name  . '<br>'; 
      echo $description  . '<br>'; 
    }

    // return "foo = {$a['foo']}";
}
add_shortcode( 'local_schema_customer_review_form', 'local_schema_customer_review_form' );