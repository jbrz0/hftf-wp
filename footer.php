

<div class="footer-wrap col-md-12">
    <div class="col-md-6">
      <div class="footer-logo-wrap">
        <a href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-bottom.svg" class="logo-bottom" alt="">
        </a>
        <span class="footer-desc">
          SOURCE FOR THE LATEST HOME AUTOMATION TECHNOLOGY
        </span>
      </div>
    </div>

    <div class="col-md-6">


      <form action="//homesfromthefuture.us15.list-manage.com/subscribe/post?u=e21d0289a264ac66e92b55cc0&amp;id=bdc7cd351a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <input placeholder="Enter Email Address" class="mailing-list-footer" type="email" value="" name="EMAIL" id="mailingList" />
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e21d0289a264ac66e92b55cc0_bdc7cd351a" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="SIGN UP FOR MAILING LIST" name="subscribe" id="mc-embedded-subscribe" class="mailing-list-footer-btn"></div>
      </form>
      <!-- <div class="button-footer-wrap">
        <a href="#">
          <div class="button-footer button-footer-one">
            CONTACT
          </div>
        </a>
        <a href="#">
          <div class="button-footer button-footer-two">
            FREE E-BOOK
          </div>
        </a>
      </div> -->
      <div class="button-footer-wrap button-footer-social-wrap">
        <a href="http://facebook.com/homesfromthefuture">
          <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-01.svg" class="social-footer-btn" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/hftf_technology/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-02.svg" class="social-footer-btn" alt="Instagram">
        </a>
        <a href="https://twitter.com/hftf_tech">
          <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-03.svg" class="social-footer-btn" alt="Twitter">
        </a>
        <a href="https://homesfromthefuture.tumblr.com/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-04.svg" class="social-footer-btn" alt="Tumblr">
        </a>
        <a href="https://www.youtube.com/channel/UCLfNQlbCAelRZxhmmPHEAmQ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-05.svg" class="social-footer-btn" alt="Youtube">
        </a>
        <a href="https://www.pinterest.com/hftf_tech/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/social-modal-06.svg" class="social-footer-btn" alt="Pinterest">
        </a>

      </div>

    </div>

  <div class="clearfix"></div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/inview.min.js"></script>
<script>

$('.footer-wrap').on('inview', function(event, isInView) {
if (isInView) {
  $('.left-product-col').fadeTo(250, 0, function(){
    $('.left-product-col').css("visibility", "hidden");
  });
} else {
  $('.left-product-col').fadeTo(250, 1, function(){
    $('.left-product-col').css("visibility", "visible");
  });
}
});

</script>




<?php wp_footer(); ?>
</body>
</html>
