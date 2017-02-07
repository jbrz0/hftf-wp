<div class="col-sm-6 sidebar sidebar-left sidebar-left-sm">

  <form action="//homesfromthefuture.us15.list-manage.com/subscribe/post?u=e21d0289a264ac66e92b55cc0&amp;id=bdc7cd351a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
    <div  class="form-group"><input type="email" value="" name="EMAIL" class="form-control mailing-list-top" id="mailingList" placeholder="Enter Email address"></div>
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e21d0289a264ac66e92b55cc0_bdc7cd351a" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="SIGN UP FOR MAILING LIST" name="subscribe" id="mc-embedded-subscribe" class="btn btn-block mailing-list-top-btn"></div>
      </div>
  </form>

  <div class="sidebar-header sidebar-left-header">
    <h2>PRODUCTS</h2>
  </div>

  <div class="sidebar-left-content">
    <span class="sidebar-list-header">
      Categories
    </span>

    <ul class="sidebar-list sidebar-list-left">
      <a href="<?php echo home_url( '/' ); ?>category/products/hubs-and-kits/">
        <li><span>Hubs &amp; Kits</span></li>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/products/voice-control/">
        <li><span>Voice Control</span></li>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/products/lighting/">
        <li><span>Lighting</span></li>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/products/heating-and-cooling/">
        <li><span>Heating/Cooling</span></li>
      </a>
      <a href="<?php echo home_url( '/' ); ?>category/products/locks/">
        <li><span>Locks</span></li>
      </a>
    </ul>

    <span class="sidebar-list-header">
      Recent <span class="blue-highlight">Products</span>
    </span>

    

    <ul class="sidebar-list-top sidebarlist-top-left">

      <?php $catPosts = new WP_Query( '&posts_per_page=3&order=DESC&cat=15' );
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


  </div>
</div>
