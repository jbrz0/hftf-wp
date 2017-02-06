jQuery('.footer-wrap').on('inview', function(event, isInView) {
if (isInView) {
  jQuery('.left-product-col').fadeTo(250, 0, function(){
    jQuery('.left-product-col').css("visibility", "hidden");
  });
} else {
  jQuery('.left-product-col').fadeTo(250, 1, function(){
    jQuery('.left-product-col').css("visibility", "visible");
  });
}
});
