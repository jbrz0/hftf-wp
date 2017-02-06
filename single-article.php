<?php /* Template Name: Article Template */ get_header(); ?>

  <?php include 'sidebar-left-lg.php'; ?>


  <div class="col-md-6 main-area">



    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

    <div style="background-image: url('<?php echo $url ?>');" class="title-header-img">
      <div class="title-header-overlay">
        <div class="title-txt">
          <h1><?php the_title(); ?></h1>
          <p><?php echo do_shortcode( get_post_meta( get_the_id(), 'subtitle', true ) ); ?></p>
        </div>
        <span class="date-post"><?php the_time('F jS, Y'); ?></span>
      </div> <!-- title-header-overlay -->
    </div> <!-- title-header-img -->

    <div class="tag-box-wrap">
      <div class="tag-box">
        <?php the_tags('<span>', '&nbsp;&nbsp;&nbsp;', '</span>'); ?>
      </div>
    </div> <!-- tag box wrap -->


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


    <div class="post-btn-wrap">



      <a href="<?php $next = get_permalink(get_adjacent_post(false,'',true)); echo $next; ?>">
        <div class="col-md-6 post-btn-wrap-inner-col">
          <div class="post-btn post-btn-left">
            <div class="post-btn-thumb post-btn-thumb-left" style="background-image: url(
            <?php $prevPost = get_previous_post(); $prevthumbnail = get_the_post_thumbnail_url($prevPost->ID); echo $prevthumbnail; ?>
            );"></div>

            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
            <p>PREVIOUS</p>

            <h3><?php $prev_post = get_adjacent_post(false, '', true); echo $prev_post->post_title; ?></h3>
          </div>
        </div>
      </a>


      <a href="<?php $prev = get_permalink(get_adjacent_post(false,'',false)); echo $prev; ?>">
      <div class="col-md-6 post-btn-wrap-inner-col">
        <div class="post-btn post-btn-right">
          <div class="post-btn-thumb post-btn-thumb-right" style="background-image: url(
          <?php $nextPost = get_next_post(); $nextthumbnail = get_the_post_thumbnail_url($nextPost->ID); echo $nextthumbnail; ?>
          );"></div>

          <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
          <p>NEXT</p>
          <h3><?php $next_post = get_adjacent_post(false, '', false); echo $next_post->post_title; ?></h3>
        </div>
      </div>
      </a>

    </div> <!-- post-btn-wrap -->





</div>

</div> <!-- main content area end -->



<?php include 'sidebar-right-lg.php'; ?>

</div> <!-- content-wrap -->


<?php include 'sidebar-left-sm.php'; ?>
<?php include 'sidebar-right-sm.php'; ?>

<!-- Sidebar Mobile End -->



<?php get_footer(); ?>
