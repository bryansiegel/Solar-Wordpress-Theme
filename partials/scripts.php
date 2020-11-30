
<script>
//on scroll change link
jQuery( window ).scroll(function() {
  // console.log('scoll');
  var ScrollTop = jQuery(window).scrollTop();
  if(ScrollTop > 85) {
  	jQuery('#collapseForm1').attr({ 'href':"#fullscreenModal", 'data-toggle':"modal" });   
  }
});

//lazy load
jQuery(function() {
	jQuery('.lazy').lazy();
});

</script>