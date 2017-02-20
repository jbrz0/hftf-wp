<?php /* Template Name: Page Template */ get_header(); ?>

  <?php include 'sidebar-left-lg.php'; ?>


  <div class="col-md-6 main-area">



    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

    <div style="background-image: url('<?php echo $url ?>');" class="title-header-img">
      <div class="title-header-overlay">
        <div class="title-txt">
          <h1><?php the_title(); ?></h1>
          <p><?php echo do_shortcode( get_post_meta( get_the_id(), 'subtitle', true ) ); ?></p>
        </div>
      </div> <!-- title-header-overlay -->
    </div> <!-- title-header-img -->


    <div class="col-md-12 post-content">



    		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    				<?php the_content(); ?>
    			</div>
    		<?php endwhile; ?>
    		<?php else: ?>
    			<div>
    				<h2><?php _e( 'Sorry, nothing to display.', 'hftf' ); ?></h2>
    			</div>
    		<?php endif; ?>


    </div> <!-- post-content -->





</div>

</div> <!-- main content area end -->



<?php include 'sidebar-right-lg.php'; ?>

</div> <!-- content-wrap -->


<?php include 'sidebar-left-sm.php'; ?>
<?php include 'sidebar-right-sm.php'; ?>

<!-- Sidebar Mobile End -->



<?php get_footer(); ?>
