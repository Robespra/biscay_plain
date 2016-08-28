<?php get_header(); ?>
<div class="successtop">
<?php  
if (isset($_GET['s'])) echo "<div class=\"alert alert-success text-center\">".$_GET['s']."</div>";   
elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error text-center\">".$_GET['e']."</div>";?></div>
<body class="cbp-spmenu-push">

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "http://www.biscaypla.in/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://query.example.com/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<div class="la-anim-10"></div>

<div class="anti-scroll" style="width:100%;">
<div id="fb-root"></div>
<script>
function imgLoaded(img){
    var gridly-image = img.parentNode;
 
    gridly-image.className += gridly-image.className ? ' loaded' : 'loaded';
};
  </script>

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

<!-- body has the class "cbp-spmenu-push" -->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'fr'}
</script>                     

<h1 class="hidden-h1">Poïesis, concentré d'articles sur le jeu de la créativité</h1>
<a href="#"><img class="logo-top"src="<?php bloginfo('template_url'); ?>/images/logo_hero_unit_hp_v2.svg" alt="Logo Poïesis"/></a>

<div class="blocks">
<?php
$args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'DSC' );
$theposts = get_posts( $args );

foreach($theposts as $post) :

setup_postdata($post);
?>


<a href="<?php the_permalink() ?>" class="item-index">
     <?php if ( has_post_thumbnail() ) { ?>

<div class="gridly-image-index">
<?php the_post_thumbnail( 'lazy summary-image' );  ?>

</div><!-- gridly-image-index -->

<div class="gridly-figcaption">
<div class="gridly-title-index">
<p class="category"><?php
$category = get_the_category(); 
echo $category[0]->cat_name;
?></p>
<p class="gridly-date-index"><?php the_time(get_option('date_format')); ?>  </p>
</div><!-- gridly-title-index -->
      <?php } ?>
            
<p class="small-index"><?php echo limit_words(get_the_excerpt(), '20'); ?> [...]</p>
</div><!-- gridly-figcaption -->
<div class="figcaption-h2">
<h2><?php the_title(); ?></h2>
</div>
</a><!-- item-index -->


<?php
endforeach;
wp_reset_postdata();
?>

<div class="showcase">
<div class="app-showcase">
<div class="newsletterh2 float">
<h2>Biscay sur votre mobile</h2>
<p>Une sélection quotidienne d'articles, bientôt disponible.
</br>Pourquoi ne pas vous inscrire à notre newsletter pour être informé du lancement ?</p>
</div>
<img class="app-showca-img"src="<?php bloginfo('template_url'); ?>/images/showcase-app.png" alt="Logo Poïesis"/>
</div><!-- app-showcase -->


<div class="newsletter-showcase">
<div class="newsletterh2">
<h2>Newsletter</h2>
</div>
<?php echo do_shortcode('[sitepoint_contact_form]'); ?>

</div><!-- newsletter-showcase -->

</div><!-- showcase -->
</div><!-- blocks -->
</div> <!-- header_index -->


<div id="container-articles">
  <div class="cd-gallery-container">
    <div id="search-index">
      <form method="get" id="searchformindex"

      action="<?php bloginfo('url'); ?>/">

      <div><input  type="search"  value="<?php the_search_query(); ?>"
      name="s" id="s"/></div>

      </form>
    </div> <!-- search-index -->
    <nav class="cd-filter">
      <ul>
        <li class="placeholder"><a data-type="red" href="#0">Derniers articles</a> <!-- selected option on mobile --></li> 
        <li><a class="selected" data-type="red" href="#0">Derniers articles</a></li>
        <li><a data-type="blue" href="#0">Poïesis</a></li>
        <li><a data-type="green" href="#0">Lu et Vu !</a></li>
        </ul>
    </nav>

    <ul class="cd-gallery cd-container">
      <li>
        <ul class="cd-item-wrapper">
          <li data-type="red" class="is-visible">
            <?php
            $args = array( 'numberposts' => 8, 'order'=> 'DSC');
            $theposts = get_posts( $args );

            foreach($theposts as $post) :

            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
              <div class="gridly-category"><h2><?php the_title(); ?>

            </h2>
            <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '20'); ?> [...]</p>
                          
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
            <?php

            endforeach;

            wp_reset_postdata();
            ?>

          </li><!-- red -->

          <li data-type="blue" class="is-hidden">
            <?php
            $args = array( 'numberposts' => 8, 'category_name' => 'poiesis-core', 'orderby' => 'date', 'order' => 'DESC' );
            $theposts = get_posts( $args );

            foreach($theposts as $post) :

            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
            <div class="gridly-category"><h2><?php the_title(); ?></h2>
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '20'); ?> [...]</p>
                           
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
            <?php
            endforeach;

            wp_reset_postdata();
            ?>
          </li><!-- blue -->


          <li data-type="green" class="is-hidden">
            <?php
            $args = array( 'numberposts' => 8, 'category_name' => 'selection', 'orderby' => 'date', 'order' => 'DESC' );
            $theposts = get_posts( $args );

            foreach($theposts as $post) :

            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
              <div class="gridly-category"><h2><?php the_title(); ?></h2>
            <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '20'); ?> [...]</p>          
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
            <?php
            endforeach;

            wp_reset_postdata();
            ?>        
          </li><!-- green -->         
        </ul>
      </li>
    </ul> <!-- cd-gallery -->
	</div>
</div>





<div class="grey">
<h2 class="video-title">VIDEOS-EN-VRAC</h2>

    <div class="bande-son">
  <iframe src="https://player.vimeo.com/video/39019792" width="500" height="281" frameborder="0" class="block-vid-1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


<iframe class="block-vid-2" width="560" height="315" src="https://www.youtube.com/embed/J6LtABooE2c" frameborder="0" allowfullscreen></iframe>

<iframe class="block-vid-1" width="450" height="253" src="https://www.youtube.com/embed/DSEIEdRo02Q" frameborder="0" allowfullscreen></iframe>
<iframe class="block-vid-2" width="560" height="315" src="https://www.youtube.com/embed/6KyO5-_JbbI" frameborder="0" allowfullscreen></iframe>


<iframe class="block-vid-1" width="560" height="315" src="https://www.youtube.com/embed/s8De5eg1kic" frameborder="0" allowfullscreen></iframe>

<iframe class="block-vid-2" width="420" height="315" src="https://www.youtube.com/embed/1NkZVWXK5jM" frameborder="0" allowfullscreen></iframe>

<iframe class="block-vid-1" src="https://player.vimeo.com/video/45232468?color=ffffff&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<iframe class="block-vid-2" width="420" height="315" src="https://www.youtube.com/embed/n56VVTN9rG8" frameborder="0" allowfullscreen></iframe>

</div> <!-- // bande-son -->
</div> <!-- // "grey" -->


<div id="bottom_index">
<div class="container_bottom_index">
<div id="container-index-bottom">
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="popular cd-gallery-container">
<h2>Les plus populaires</h2>
  <ul class="cd-gallery cd-container">

<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();?>

<a href="<?php the_permalink() ?>"><div class="item">
     <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
 <div class="gridly-category"><h2><?php the_title(); ?></h2>
                <?php } ?>
            
<p class="small"><?php echo limit_words(get_the_excerpt(), '20'); ?> [...]</p>
               
</div>
            </div></a>



<?php 
endwhile;
wp_reset_postdata();
?>

</ul>






 
</div>






<div class="clear padding20"></div>
<div class="clear padding20"></div>

<div class="citation">
The important thing is to not stop questioning. 
Curiosity has its own reason for existing.
<p>Albert Einstein</p>
</div>

<div class="clear padding20"></div>
<div class="clear padding20"></div>

<?php include('selection_hebdo.php'); ?>






</div> <!-- container_bottom_index -->
</div>


</div>  <!-- // header index -->

</section>
</div> <!-- // wrap -->

<?php get_footer(); ?>



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

<script type="text/javascript" defer="">
$('.ClickMeIndexSpotted').each(function() {
    $(this).show(0).on('click', function(e) {
       e.preventDefault();
       $(this).next('.spotted').slideToggle('fast', function() {
            $(this).prev().html($(this).is(':visible') ? 'Spotted &#9660;' : 'Spotted &#9658');
        });
    });
   if ($(this).data('box-show')) {
        $(this).trigger('click');
    }
    
});
       </script> 

</div>
</body>