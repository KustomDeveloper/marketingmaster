<?php
function markmast_front_styles() {
  wp_register_style( 'markmast_frontend_stylesheet', plugins_url( 'marketingmaster/css/markmast_frontend_stylesheet.css' ) );
  wp_enqueue_style( 'markmast_frontend_stylesheet' );
}

add_action( 'wp_enqueue_scripts', 'markmast_front_styles' );

function markmast_product_review() { 

  function markmast_product_review_shortcode( $atts ) {
    $product_name = get_option('local-schema-product-name');
    $product_description = get_option('local-schema-product-description');
    echo '
      <div class="customer-review" itemscope="" itemtype="https://schema.org/Product"> 
        <span class="review-title">
          <span>Reviews</span>
          <span class="cr-stars">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </span><!--.review-title-->
        </span><br>
        <span itemprop="name">Oklahoma Interstate Drug Lawyer</span><br>  
        <em><span></span>
      <div itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
        <span itemprop="ratingValue"><strong>5</strong></span><strong>/<span itemprop="bestRating">5</span></strong> stars
        based on <span itemprop="reviewCount">5</span> customer reviews
      </div><br>
      <span itemprop="description"><strong>The Best.</strong><br> Oklahoma Interstate Drug Lawyer was professional, prompt, and supportive during our entire process. Thanks for all your help!</span>
      <p style="text-align:right;"><a style="color:#DDA318;" href="//oklahomainterstatedruglawyer.com/leave-a-review/"><u>Leave a Review <i style="margin-left:5px;" class="fa fa-chevron-circle-right"></i></u></a></p>
      </em>
    </div>';
  }
  add_shortcode( 'product_review', 'markmast_product_review_shortcode' );

}
add_action('wp_footer', 'markmast_product_review');