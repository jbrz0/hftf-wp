<?php /* Template Name: Articles Template */ get_header(); ?>

  <?php include 'sidebar-left-lg.php'; ?>


  <div class="col-md-6 main-area">


    <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-homes4.jpg');" class="title-header-img category-header-img">
      <div class="title-header-overlay">
        <div class="title-txt">
          <!-- <h1>Articles: <?php echo get_cat_name($cat); ?></h1> -->
          <h1>
            Results for: <?php echo get_search_query(); ?>
          </h1>
        </div>
      </div> <!-- title-header-overlay -->
    </div> <!-- title-header-img -->




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






              </div>





</div>

</div> <!-- main content area end -->



<?php include 'sidebar-right-lg.php'; ?>

</div> <!-- content-wrap -->


<?php include 'sidebar-left-sm.php'; ?>
<?php include 'sidebar-right-sm.php'; ?>

<!-- Sidebar Mobile End -->



<?php get_footer(); ?>
