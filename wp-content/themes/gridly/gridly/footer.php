<div id="footer">
<div class="bg_newsletter_footer">
 <?php include('newsletter_value.php'); ?>

</div>
<div class="social footerico">
<li><a style="color:#e05d4d;" href="http://twitter.com/home?status=Intéressant... http://www.biscaypla.in" title="Partager cet article sur Twitter!" target="_blank" onclick="track('Click-social-footer-twitter','Click-social-footer-twitter')"><img class="lazy" src="<?php bloginfo('template_url'); ?>/images/social_twitter.svg"/></a></li>
  <li><a href="https://plus.google.com/share?url=http://www.poiesis-app.com" data-trackevent="Share: Google+" target="blank" onclick="track('Click-social-footer-gplus','Click-social-footer-gplus')"><img class="lazy" src="<?php bloginfo('template_url'); ?>/images/social_g+.svg"/></a></li>
 <li><a style="color:#e05d4d;" href="http://www.facebook.com/sharer.php?u=http://www.poiesis-app.com target="blank" onclick="track('Click-social-footer-facebook','Click-social-footer-facebook')"><img class="lazy" src="<?php bloginfo('template_url'); ?>/images/social_fb.svg"/></a></li>
<li><a href="http://pinterest.com/pin/create/button/"  count-layout="none" target="blank" onclick="track('Click-social-footer-pinterest','Click-social-footer-pinterest')"><img class="lazy" src="<?php bloginfo('template_url'); ?>/images/social_pint.svg"/></a> </li>
</div><a href="http://www.biscaypla.in/a-propos/" onclick="track('Click-social-footer-about','Click-social-footer-about')">A PROPOS</a>/<a href="http://www.biscaypla.in/mentions-legales" onclick="track('Click-social-footer-tamis','Click-social-footer-tamis')">MENTIONS LEGALES</a>/<a href="http://www.biscaypla.in/participer/" onclick="track('Click-social-footer-newsletter','Click-social-footer-newsletter')">PARTICIPER</a>/<a href="http://www.biscaypla.in/newsletter_template/index.html" onclick="track('Click-social-footer-contact','Click-social-footer-contact')">NEWSLETTER</a>/<a href="http://www.biscaypla.in/contact/" onclick="track('Click-social-footer-contact','Click-social-footer-contact')">CONTACT</a>
<div class="app-footer">
<a href="#" title="hacedor logo footer" onclick="track('Click-logofooter','Click-logofooter')">
<img class="app-footer-img" src="<?php bloginfo('template_url'); ?>/images/footerimage_1.svg" alt="Logo Poïesis"/>
</a>
</div><!-- // app-footer -->  
</div>
</div><!-- // wrap -->   
<script>
        function track(name,label){
        ga('send', 'event', name, 'click', label, {
            hitCallback: function(){
            console.log('Event sent to Google Analytics');
                }
            });
        }
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-31626671-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
}
</script>
</section>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="<?php echo get_template_directory_uri(); ?>/js/bouncyfilter.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/newsletter_sign_up_lib.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.lazy.min.js"></script>
<!-- Include the core media player JavaScript. -->
<script>
//requires jQuery
$(window).scroll(function(){
  var threshold = 700; // number of pixels before bottom of page that you want to start fading
  var op = (($(document).height() - $(window).height()) - $(window).scrollTop()) / threshold;
  if( op <= 0 ){
    $("#share").hide();
  } else {
    $("#share").show();
  }
  $("#share").css("opacity", op ); 
});
</script>script>


</body>
</html>