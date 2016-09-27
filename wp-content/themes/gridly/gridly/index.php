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
<!-- body has the class "cbp-spmenu-push" -->
<h1 class="hidden-h1">Poïesis, concentré d'articles sur le jeu de la créativité</h1>
<a href="#"><img class="logo-top"src="<?php bloginfo('template_url'); ?>/images/logo_hero_unit_hp_v2.svg" alt="Logo Poïesis"/></a>
<div class="double_container">
<div class="double_left">
test illustr
</div><!-- illustr -->
<div class="double_right">

<?php include('newsletter_value.php'); ?>


</div><!-- value -->
</div><!-- blocks -->
<div id="container-articles">
  <div class="cd-gallery-container">
    <div id="search-index">
      <form method="get" id="searchformindex" action="<?php bloginfo('url'); ?>/">
      <div><input  type="search"  value="<?php the_search_query(); ?>"
      name="s" id="s"/></div>
      </form>
    </div> <!-- search-index -->
    <nav class="cd-filter">
      <ul>
        <li class="placeholder"><a data-type="red" href="#0">Derniers articles</a> <!-- selected option on mobile --></li> 
        <li><a class="selected" data-type="red" href="#0">Derniers articles (la pratique?)</a></li>
        <li><a data-type="green" href="#0">La pratique</a></li>
        <li><a data-type="blue" href="#0">La théorie</a></li>
        <li><a data-type="white" href="#0">Les jeux</a></li>
        
        </ul>
    </nav>
    <ul class="cd-gallery cd-container">
      <li>
        <ul class="cd-item-wrapper">
          <li data-type="red" class="is-visible">
            <?php
            $args = array( 
              'numberposts' => 8, 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
            <div class="gridly-category">
              <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
              <h2><?php the_title(); ?>
            </h2>
            <?php } ?>         
            <p class="small"><?php echo limit_words(get_the_excerpt(), '30'); ?> [...]</p>         
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
            $args = array( 
              'numberposts' => 8, 
              'category_name' => 'poiesis-core', 
              'orderby' => 'date', 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image');  ?></div>
            <div class="gridly-category">
            <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
            <h2><?php the_title(); ?></h2>
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '30'); ?> [...]</p>           
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
            $args = array( 'numberposts' => 8, 'category_name' => 'selection', 'orderby' => 'date', 'order' => 'DESC');
            $theposts = get_posts( $args );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
              <div class="gridly-category">
              <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
              <h2><?php the_title(); ?></h2>
           
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '30'); ?> [...]</p>          
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
    <script type="text/javascript">
  $(function() {
    $("#osmplayer").osmplayer({
      playlist: 'playlist.xml',
      height: '500px'
    });
  });
</script>
<div id="osmplayer"></div>  
</div> <!-- // bande-son -->
</div> <!-- // "grey" -->
<div id="bottom_index">
<div id="container-articles">
<div id="container-index-bottom">
<div class="clear padding20"></div>
<div class="citation_container">
<div class="citation">
The important thing is to not stop questioning. 
Curiosity has its own reason for existing.
<p>Albert Einstein</p>
</div>
</div>
<div class="clear padding20"></div>
<section>
<div class="cd-gallery-container margin-top background-color">

<h3>Les plus populaires</h3>
  <ul class="cd-item-wrapper">
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
<li data-type="red" class="is-visible">
<a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
            <div class="gridly-category">
              <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
              <h2><?php the_title(); ?>
            </h2>
            
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '30'); ?> [...]</p>           
            </div><!-- gridly-category -->
            </div><!-- item -->
<?php 
endwhile;
wp_reset_postdata();
?>
</a>
</li>
</ul>
</div><!-- // "cd-gallery-container margin-top background-color" -->
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