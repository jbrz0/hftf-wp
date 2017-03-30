<div class="col-md-3 sidebar sidebar-right sidebar-right-lg">

  <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" placeholder="Search" class="form-control search-top"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </form>

  <a href="<?php echo home_url( '/' ); ?>category/articles/" class="sidebar-link">
    <div class="sidebar-header sidebar-right-header">
      <h2>ARTICLES</h2>
    </div>
  </a>

  <div class="sidebar-left-content">
    <span class="sidebar-list-header">
      Categories
    </span>

    <ul class="sidebar-list sidebar-list-right">
      <a href="<?php echo home_url( '/' ); ?>category/articles/general/">
        <li><span>General</span></li>
      </a>
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

    <span class="sidebar-list-header">
      Recent <span class="red-highlight">Articles</span>
    </span>

    <ul class="sidebar-list-top sidebarlist-top-right">
      <?php $catPosts = new WP_Query( '&posts_per_page=3&order=DESC&cat=17' );
      if( $catPosts->have_posts() ){ ?>
          <li>

          <?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>
              <div class="col-md-9 sidebar-image-list">
                <a href="<?php echo get_permalink() ?>">
                  <p class="sidebar-product-name">
                    <?php the_title(); ?>
                  </p>
                </a>
              </div>
              <div class="clearfix"></div>
          <?php endwhile; ?>
        </li>
      <?php }
      else {
        // no posts to display
      }
      wp_reset_postdata();
      ?>
    </ul>

  </div> <!-- sidebar-left-content -->
<!-- Sidebar RIGHT content end -->
