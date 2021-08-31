<?php
/*
*  Customer reviews template
*/

/*
*  Create Frontend Form
*/
function local_schema_customer_review_form() {
  echo '
    <form method="POST">
      <div class="mb-3">
        <input type="radio" id="oneS" name="reviewStars" value="1">
        <label for="onestar"><i class="fa fa-star"></i></label>
        <input type="radio" id="twoS" name="reviewStars" value="2">
        <label for="twostar"><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
        <input type="radio" id="threeS" name="reviewStars" value="3">
        <label for="threestar"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
        <input type="radio" id="fourS" name="reviewStars" value="4">
        <label for="fourstar"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
        <input type="radio" id="fiveS" name="reviewStars" value="5">
        <label for="fivestar"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
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

    if(isset($_POST['local_schema_customer_review_submit'])) {
      $stars = $email = $name = $description = "";
      function markmast_clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $stars = $_POST['reviewStars'];
      $email = markmast_clean_input($_POST['local-schema-customer-review-email']);
      $name = markmast_clean_input($_POST['local-schema-customer-review-name']);
      $description = markmast_clean_input($_POST['local-schema-customer-review-description']);

      echo $stars . '<br>'; 
      echo $email . '<br>'; 
      echo $name  . '<br>'; 
      echo $description  . '<br>'; 
    }
}
add_shortcode( 'local_schema_customer_review_form', 'local_schema_customer_review_form' );


/*
*  Get list of reviews
*/
function local_schema_customer_reviews() {
  
  $custom_query = new WP_Query(array( 
    'post_type' => 'local-seo-reviews',
  ));

  while($custom_query->have_posts()) : $custom_query->the_post(); ?>

    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php the_content(); ?>
    </div>

  <?php endwhile; 
  wp_reset_postdata();
}
add_shortcode( 'local_schema_customer_reviews', 'local_schema_customer_reviews' );

