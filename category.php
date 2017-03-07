<?php /* Template Name: Articles Template */ get_header(); ?>

  <?php include 'sidebar-left-lg.php'; ?>

  <div class="col-md-6 main-area">

    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-homes4.jpg');" class="title-header-img category-header-img">
      <div class="title-header-overlay">
        <div class="title-txt">
          <!-- <h1>Articles: <?php echo get_cat_name($cat); ?></h1> -->
          <h1>
            <?php echo get_cat_name($cat); ?>
          </h1>
        </div>
      </div> <!-- title-header-overlay -->
    </div> <!-- title-header-img -->

    <?php $catPosts = new WP_Query( '&posts_per_page=20&order=DESC&cat=' . $cat );
    if( $catPosts->have_posts() ){ ?>

        <?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>
            <a href="<?php echo get_permalink() ?>" class="article-box-link">
              <article>
                <div style="background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID),'thumbnail'); echo $url ?>);" class="article-thumb" alt=""></div>
                <div class="text-article-title">
                  <div class="text-article-title-inner">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_time('F jS, Y'); ?></p>
                  </div>
                </div>
              </article>
            </a>

        <?php endwhile; ?>

    <?php }
    else {
    }
    wp_reset_postdata();
    ?>
  </div>
</div>
</div> <!-- main content area end -->

<?php include 'sidebar-right-lg.php'; ?>

</div> <!-- content-wrap -->

<?php include 'sidebar-left-sm.php'; ?>
<?php include 'sidebar-right-sm.php'; ?>

<?php get_footer(); ?>
