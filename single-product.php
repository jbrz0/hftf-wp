<?php /* Template Name: Product Template */ get_header(); ?>

  <style>
    .logo-header {
      display: none;
    }
  </style>

  <div class="arrowbg"></div>
  <a href="<?php echo home_url( '/' ); ?>" class="logo-product-link">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo-product" alt="Homes From The Future" />
  </a>

  <div class="product-icon">

    <i class="fa
      <?php echo do_shortcode( get_post_meta( get_the_id(), 'icon', true ) ); ?>
    " aria-hidden="true"></i>
  </div>

  <!-- content -->
  <div class="product-content-wrap">

    <div class="col-md-6 product-col-wrap">
      <div class="left-product-col">
        <span class="product-cat"><?php echo get_cat_name($cat); ?></span>
        <h1 class="product-title"><?php echo the_title() ?></h1>

        <h2 class="product-subtitle">
          <?php echo do_shortcode( get_post_meta( get_the_id(), 'subtitle', true ) ); ?>
        </h2>
        <a href="
        <?php echo do_shortcode( get_post_meta( get_the_id(), 'amazon', true ) ); ?>
        " target="_blank">
          <button class="amazon-btn">
            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            <span>&nbsp;BUY PRODUCT</span>
          </button>
        </a>

        <span class="share-product-header">SHARE:</span>
        <div class="social-product-wrap">
          <?php echo do_shortcode('[addtoany buttons="facebook,twitter,google_plus,pinterest,tumblr"]'); ?>
        </div>
      </div> <!-- left-product-col -->
    </div> <!-- product col wrap -->

      <!-- right product col wrap -->
      <div class="col-md-6 right-col-product">
        <div class="right-col-product-inner">

        <img src="<?php
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'thumbnail');
        echo $url ?>" style="width: 100%; margin-bottom: 30px;" alt="">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    				<?php the_content(); ?>
    		<?php endwhile; ?>
    		<?php endif; ?>

      </div> <!-- right-col-product-inner -->
      </div>

  </div> <!-- product content wrap -->

</div> <!-- product-content-wrap -->

<?php get_footer(); ?>
