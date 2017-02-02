<!-- Sidebar right content -->
<div class="col-md-3 sidebar sidebar-right sidebar-right-lg">

  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" placeholder="Search" class="form-control search-top"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <!-- <input type="submit" class="search-submit"
      lue="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" /> -->
  </form>

  <div class="sidebar-header sidebar-right-header">
    <h2>ARTICLES</h2>
  </div>

  <div class="sidebar-left-content">

    <span class="sidebar-list-header">
      Categories
    </span>

    <ul class="sidebar-list sidebar-list-right">
      <a href="<?php echo home_url( '/' ); ?>category/articles/apps/">
        <li><span>Apps</span></li>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/articles/hardware/">
        <li><span>Hardware</span></li>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/articles/guides/">
        <li><span>Guides</span></li>
      </a>
    </ul>

    <!-- <span class="sidebar-list-header">
      Top <span class="red-highlight">Articles</span>
    </span>

    <ul class="sidebar-list-top sidebarlist-top-right">
      <?php global $query_string;
      $posts = query_posts($query_string.'&posts_per_page=3&order=DESC&cat=17'); ?>
      	<?php while(have_posts()) : the_post(); ?>
        <li>
          <div class="col-md-3 image-home-list">
            <img src="img/product-thumb.jpg" alt="Product Image" />
          </div>
          <div class="col-md-9 sidebar-image-list">
            <a href="<?php echo get_permalink() ?>">
              <p class="sidebar-product-name">
                <?php the_title(); ?>
              </p>
            </a>
          </div>
          <div class="clearfix"></div>
        </li>
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </ul> -->


    <span class="sidebar-list-header">
      Recent <span class="red-highlight">Articles</span>
    </span>

    <ul class="sidebar-list-top sidebarlist-top-right">
      <?php global $query_string;
      $posts = query_posts($query_string.'&posts_per_page=3&order=DESC&cat=17'); ?>
      	<?php while(have_posts()) : the_post(); ?>
        <li>
          <div class="col-md-3 image-home-list">
            <!-- <img src="img/product-thumb.jpg" alt="Product Image" /> -->
          </div>
          <div class="col-md-9 sidebar-image-list">
            <a href="<?php echo get_permalink() ?>">
              <p class="sidebar-product-name">
                <?php the_title(); ?>
              </p>
            </a>
          </div>
          <div class="clearfix"></div>
        </li>
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </ul>

  </div> <!-- sidebar-left-content -->
<!-- Sidebar RIGHT content end -->
