<?php
function markmast_front_styles() {
  wp_register_style( 'fontAwesome', plugins_url( 'marketingmaster/css/fontAwesome.css' ) );
  wp_enqueue_style( 'fontAwesome' );
  wp_register_style( 'markmast_frontend_stylesheet', plugins_url( 'marketingmaster/css/markmast_frontend_stylesheet.css' ) );
  wp_enqueue_style( 'markmast_frontend_stylesheet' );
}

add_action( 'wp_enqueue_scripts', 'markmast_front_styles' );

function markmast_product_review_shortcode( $atts ) {
  $site_url = get_bloginfo('url');
  $product_name = get_option('local-schema-product-name');
  $product_description = get_option('local-schema-product-description');
  echo '<div class="customer-review" itemscope="" itemtype="https://schema.org/Product"> ';
  echo '<span class="review-title">';
  echo '<span>Reviews</span>';
  echo '<span class="cr-stars">';
  //Add stars
  for($i=0; $i < 5; $i++) {
    echo '<i class="fa fa-star"></i>';
  } 
  echo "</span><!--.review-title-->
  </span><br>   
  <span itemprop='name'>$product_name</span><br>
      <em><span></span>
    <div itemprop='aggregateRating' itemscope='' itemtype='https://schema.org/AggregateRating'>
      <span itemprop='ratingValue'><strong>5</strong></span><strong>/<span itemprop='bestRating'>5</span></strong> stars
      based on <span itemprop='reviewCount'>5</span> customer reviews
    </div><br>

    <span itemprop='description'>$product_description</span>

    <p style='text-align:right;'><a style='color:#DDA318;' href='$site_url/leave-a-review/'><u>Leave a Review <i style='margin-left:5px;' class='fa fa-chevron-circle-right'></i></u></a></p>
    </em>
  </div>";
}
add_shortcode( 'markmast_product_review', 'markmast_product_review_shortcode' );