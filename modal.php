<!-- Modal -->
<div class="modal fade fade-scale" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container">

        <a href="#" data-dismiss="modal" aria-label="Close">
          <!-- <i class="fa fa-times modal-close" aria-hidden="true"></i> -->
          <i class="icon ion-ios-close-outline modal-close"></i>
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-bottom.svg" class="logo-modal" alt="">
        </a>

        <div class="social-modal-wrap">
          <a href="http://facebook.com/homesfromthefuture">
            <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-01.svg" alt="Facebook">
          </a>
          <a href="https://www.instagram.com/hftf_technology/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-02.svg" alt="Instagram">
          </a>
          <a href="https://twitter.com/hftf_tech">
            <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-03.svg" alt="Twitter">
          </a>
          <a href="https://homesfromthefuture.tumblr.com/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-04.svg" alt="Tumblr">
          </a>
          <a href="https://www.youtube.com/channel/UCLfNQlbCAelRZxhmmPHEAmQ">
            <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-05.svg" alt="Youtube">
          </a>
          <a href="https://www.pinterest.com/hftf_tech/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-06.svg" alt="Pinterest">
          </a>

        </div> <!-- social-modal-wrap -->

      </div> <!-- container -->
      </div> <!-- modal-header -->
      <div class="modal-body">

        <div class="container">

          <div class="col-md-6">
            <a href="<?php echo home_url( '/' ); ?>" class="modal-menu-btn-link">
              <div class="modal-menu-btn">
                Home
              </div>
            </a>
            <a href="<?php echo home_url( '/' ); ?>about" class="modal-menu-btn-link">
              <div class="modal-menu-btn">
                About
              </div>
            </a>
            <a href="<?php echo home_url( '/' ); ?>products" class="modal-menu-btn-link">
              <div class="modal-menu-btn">
                Products
              </div>
            </a>
            <a href="<?php echo home_url( '/' ); ?>articles" class="modal-menu-btn-link">
              <div class="modal-menu-btn">
                Articles
              </div>
            </a>

            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input type="search" class="search-modal" placeholder="Search"
              value="<?php echo get_search_query() ?>" name="s"
              title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
            </form>

          </div>

          <div class="col-md-6">
            <p class="modal-desc">If you would like to stay up to date on the latest products and trends in this field, sign up to our mailing list.</p>
            <input type="text" class="email-modal" placeholder="Enter Email Address"/>
            <button class="email-modal-btn" type="submit">SIGN UP TO MAILING LIST</button>


            <p class="modal-desc modal-desc-ebook" style="">
              If you would like to contact us via email about anything regarding writing, article topics, questions or comments:
            </p>
            <a href="mailto:homesfromthefuture@gmail.com" class="ebook-modal-btn-link">
              <div class="ebook-modal-btn">
                homesfromthefuture@gmail.com
              </div>
            </a>
            <!-- <p class="modal-desc modal-desc-ebook">If you are new to home automation and internet of things, check out our free e-book</p>
            <a href="#" class="ebook-modal-btn-link">
              <div class="ebook-modal-btn">
                DOWNLOAD OUR FREE E-BOOK
              </div>
            </a> -->
          </div>

        </div> <!-- container -->

      </div>
    </div>
  </div>
</div>
<!-- Modal End -->
