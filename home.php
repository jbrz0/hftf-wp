<?php /* Template Name: Home Page */ get_header(); ?>


  <?php include 'sidebar-left-lg.php'; ?>


    <div class="col-md-6 main-area main-area-home">


      <?php global $query_string; // required
      $posts = query_posts($query_string.'&posts_per_page=1&order=DESC'); ?>
      	<?php while(have_posts()) : the_post(); ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
          <div class="post-lg">
            <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
            <div class="col-sm-7 img-wrap-home" style="padding: 0;">
              <img src="<?php echo $url ?>" alt="">
            </div>
            <div class="col-sm-5 post-lg-txt-wrap">
              <div class="post-home-txt">
                <h2><?php the_title(); ?></h2>
                <h4><?php the_time('F jS, Y'); ?></h4>
              </div>
            </div>
            </a>
          </div>
      	<?php endwhile; ?>
      	<?php wp_reset_query(); // reset the query ?>


      <div class="home-second-row-wrap">
        <?php global $query_string; // required
        $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=1'); ?>
        	<?php while(have_posts()) : the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <div class="wide-tall-post-wrap">
              <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
                <div class="col-sm-6 post-tall post-tall-top">
                  <div class="img-wrap-home"><img src="<?php echo $url ?>" alt=""></div>
                  <div class="post-home-txt post-home-txt-tall-top">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php the_time('F jS, Y'); ?></h4>
                  </div>
                </div>
              </a>
            </div>
        	<?php endwhile; ?>
        	<?php wp_reset_query(); // reset the query ?>

          <?php global $query_string; // required
          $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=2'); ?>
          	<?php while(have_posts()) : the_post(); ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <div class="wide-post-wrap-sm">
                <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
                  <div class="col-sm-6 post-tall post-tall-top">
                    <div class="img-wrap-home"><img src="<?php echo $url ?>" alt=""></div>
                    <div class="post-home-txt post-home-txt-tall-top">
                      <h2><?php the_title(); ?></h2>
                      <h4><?php the_time('F jS, Y'); ?></h4>
                    </div>
                  </div>
                </a>
              </div>
          	<?php endwhile; ?>
          	<?php wp_reset_query(); // reset the query ?>

      </div> <!-- home-second-row-wrap -->

      <div class="home-third-row-wrap">
      <?php global $query_string; // required
      $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=3'); ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
          <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
          <div class="col-sm-4 post-tall-wrap-first">
            <div class="post-tall-inner">
              <div class="img-wrap-home"><img src="<?php echo $url ?>" alt=""></div>
              <div class="post-home-txt">
                <h2><?php the_title(); ?></h2>
                <h4><?php the_time('F jS, Y'); ?></h4>
              </div>
            </div>
          </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_query(); // reset the query ?>

        <?php global $query_string; // required
        $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=4'); ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
            <div class="col-sm-4 post-tall-wrap-second">
              <div class="post-tall-inner">
                <div class="img-wrap-home"><img src="<?php echo $url ?>" alt=""></div>
                <div class="post-home-txt">
                  <h2><?php the_title(); ?></h2>
                  <h4><?php the_time('F jS, Y'); ?></h4>
                </div>
              </div>
            </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_query(); // reset the query ?>


          <?php global $query_string; // required
          $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=5'); ?>
            <?php while(have_posts()) : the_post(); ?>
              <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
              <div class="col-sm-4 post-tall-wrap-third">
                <div class="post-tall-inner-txt">
                  <div class="post-home-txt" style="padding-top: 15px;">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php the_time('F jS, Y'); ?></h4>
                    <p><?php echo excerpt(16); ?></p>
                  </div>
                </div>
              </div>
              </a>
            <?php endwhile; ?>
            <?php wp_reset_query(); // reset the query ?>

      </div> <!-- home fourth row wrap end -->

      <div class="home-second-row-wrap home-last-row-sm">

        <?php global $query_string; // required
        $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=6'); ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <div style="margin-right: 15px;">
              <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
                <div class="col-sm-6 post-tall post-tall-top">
                  <div class="img-wrap-home"><img src="<?php echo $url ?>" alt=""></div>
                  <div class="post-home-txt post-home-txt-tall-top">
                    <h2><?php the_title(); ?></h2>
                    <h4><?php the_time('F jS, Y'); ?></h4>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_query(); // reset the query ?>

          <?php global $query_string; // required
          $posts = query_posts($query_string.'&posts_per_page=1&order=DESC&offset=7'); ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
              <div style="margin-left: 15px;">
                <a href="<?php echo get_permalink() ?>" class="post-link-wrap">
                  <div class="col-sm-6 post-tall post-tall-top post-tall-top-below">
                    <div class="img-wrap-home"><img src="<?php echo $url ?>" alt=""></div>
                    <div class="post-home-txt post-home-txt-tall-top">
                      <h2><?php the_title(); ?></h2>
                      <h4><?php the_time('F jS, Y'); ?></h4>
                    </div>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); // reset the query ?>

      </div> <!-- home-fourth-row-wrap -->

    </div>
  </div> <!-- main content area end -->


  <?php include 'sidebar-right-lg.php'; ?>

  </div> <!-- content-wrap -->


  <?php include 'sidebar-left-sm.php'; ?>
  <?php include 'sidebar-right-sm.php'; ?>

<!-- Sidebar Mobile End -->




<?php get_footer(); ?>
