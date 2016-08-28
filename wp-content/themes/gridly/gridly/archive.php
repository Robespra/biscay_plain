<?php get_header(); ?>
<body onload="hide_preloader();"  id="bg2A">
<div id="preloader">
<div class="preloadercenter">
<div class="clear padding10"></div>
<img src="<?php bloginfo('template_url'); ?>/images/loadinginfinite.gif" >
<div class="clear padding10"></div>
Chargement...
<div class="clear padding10"></div>
</div> <!-- #preloader -->
</div>
<div class="la-anim-10"></div>
<div class="successtop">
<?php  
if (isset($_GET['s'])) echo "<div class=\"alert alert-success text-center\">".$_GET['s']."</div>";   
elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error text-center\">".$_GET['e']."</div>";?></div>
<div class="anti-scroll" style="width:100%; overflow: hidden;">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5
  });
});
</script>
<div id="wrap">

<div id="header_index">
        
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'fr'}
</script>        	            
<div id="balisedrap">   
<h2 id="nav">Choose Language &#9660;</h2>
<ol class="select">
    <li><a>Français</a></li>
    <li data-value="en"><a>English</a></li>
    <li data-value="es"><a>Español</a></li>
</ol>

<div class="clear padding10"></div>





 <div class="social">
<li><a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-lang="fr">Twitter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
  <li><div class="g-plus" data-action="share" data-annotation="none" data-href="http://www.visu-synect.com/poesis"></div></li>

 <li><div class="fb-send" data-href="http://www.visu-synect.com/poesis" data-colorscheme="dark" data-font="lucida grande"></div></li>
<li><a href="http://pinterest.com/pin/create/button/" class="pin-it-button" count-layout="none"><img src="//assets.pinterest.com/images/PinExt.png" alt="Pin it" / ></a> <script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script></li>
</div>

</div>
<a href="http://www.visu-synect.com/poesis"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_hero_unit.svg" class="logo-top" alt="Poïesis, poeisis, création artistique et psychologie de l'Art"/></a>
<h1 class="title-h1">Concentré d'articles sur le jeu créatif</h1>
<div id="container-index">

<div class="citation">The important thing is to not stop questioning. Curiosity has its own reason for existing.
<p>Albert Einstein</p>
</div>
<div class="focus">
<h2 class="gal recently">RÉCEMMENT PUBLIÉ</h2>
<div class="clearfix"></div>
<a href="http://www.visu-synect.com/poesis/hemispheres-et-creativite/" class="titrelink">Cerveau et créativité</a>
 <div class="intro-excerp excerp">Plongée au coeur de l'organe le plus mystérieux pour découvrir les fonctions des hémisphères, des régions cérébrales et des neurones dans le processus créatif.</div>
</div>
<?php			  
$args = array('posts_per_page' => 2,
			);
			query_posts( $args );
			?>
			<?php if (have_posts()) : ?>



			    <?php while (have_posts()) : the_post(); ?>
   		<a href="<?php the_permalink() ?>"><div class="item-index">
		 <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image-index"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>


          <div class="gridly-title-index">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p class="category"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></p>
<p class="gridly-date-index"><?php the_time(get_option('date_format')); ?>  </p>
</div>
   	  <?php } ?>
      			
<a href="<?php the_permalink() ?>"><p class="small-index"><?php echo limit_words(get_the_excerpt(), '40'); ?> [...]</p></a>
               <a class="gridly-link-index" href="<?php the_permalink() ?>">Poursuivre la lecture...</a>
            </div></a>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>

<div id="footer">
        <a>A PROPOS</a>|
        <a>AUTEURS</a>|
        <a>NEWSLETTER</a>|
<a>GUIDE DE STYLE</a>|    
<a>PARTENARIAT</a>|   
        <a>CONTACT</a>
    
</div>


</div> 

<div class="wrap-sidebar-article">
<div class="sidebar-article">
<div id="search"><?php get_search_form(); ?></div>
<?php echo do_shortcode( '[searchandfilter taxonomies="category,post_tag"]' ); ?>

<!-- WordPress Loop -->

<?php if (have_posts()) : ?>
<div id="title2">
<?php /* If this is a category archive */ if (is_category()) { ?>
<h3 class="pagetitle">Entries in <?php single_cat_title(); ?> Category</h3>

<?php wp_get_archives('type=postbypost&limit=10'); ?>

<?php } ?>
</div>
<ul> 
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> - <?php the_time('F jS') ?>, <?php the_time('Y') ?></li>
<?php endwhile; ?>
</ul>

<?php else : ?>
<h6 class="center">Not Found</h6>
<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>
</div>
<!-- End WordPress Loop -->



<div id="app-prez">
<img src="<?php bloginfo('template_url'); ?>/images/deletebttn.png" alt="delete" class="deleteDiv" onclick="closeIt('app-prez')"/>
<img alt="appprez" src="<?php echo get_template_directory_uri(); ?>/images/appillustr.png"/>
<h2 class="index-app">Une selection hebdomadaire d'articles pluridisciplinaires sur la créativité</h2>
<img src="<?php echo get_template_directory_uri(); ?>/images/prensa1.png">
<h2 class="index-app clearfix">Bientôt disponible. Etre informé du lancement</h2>
<form method="POST" action="contact-form-submission.php" class="form-inline">  
<div class="control-group" id="form">  
<div class="controls">  
 <input type="text" name="contact_email" id="input2" placeholder="Email">  
<input type="hidden" name="save" value="contact">  
<button type="submit" class="btn-submit" value="Submit2">Envoyer</button>  
</form>  
</div>  
</div>    


</div>  <!-- // header index -->
</div> <!-- // sidebar-article -->
</div> <!-- //wrap sidebar-article -->

<div id="btn_up">
  <script type="text/javascript">
   $(function(){
  $('#btn_up').click(function() {
    $('html,body').animate({scrollTop: 0}, 'slow');
  });
  
  $(window).scroll(function(){
     if($(window).scrollTop()<500){
        $('#btn_up').fadeOut();
     }else{
        $('#btn_up').fadeIn();
     }
  });
});

    </script>


<img alt="top" src="<?php echo get_template_directory_uri(); ?>/images/fleche_red.png" height="30" width="30"/>
       </div> 

</section>

 <script>
var nav = $('#balisedrap');
var selection = $('.select');
var select = selection.find('li');

nav.click(function(event) {
    if (nav.hasClass('active')) {
        nav.removeClass('active');
        selection.stop().slideUp(200);
    } else {
        nav.addClass('active');
        selection.stop().slideDown(200);
    }
    event.preventDefault();
});

select.click(function(event) {
    alert ("location.href = 'http://www.visu-synect.com/poesis/" + $(this).attr('data-value'));
});
 </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31626671-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
}
</script>
</div>