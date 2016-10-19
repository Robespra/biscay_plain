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
<h1 class="hidden-h1">hacedor, concentré d'articles sur le jeu de la créativité</h1>
<a href="#"><img class="logo-top"src="<?php bloginfo('template_url'); ?>/images/headerimage_1.svg" alt="Logo Poïesis"/></a>
<div class="double_container">
<div class="double_left">
<img class=" " src="<?php bloginfo('template_url'); ?>/images/hero_news.svg" alt="Biscay Newsletter illustration"/>
</div><!-- illustr -->
<div class="double_right">

<?php include('newsletter_value.php'); ?>


</div><!-- value -->
</div><!-- blocks -->
<div id="container-articles">
  <div class="cd-gallery-container">
    <div class="articles-navbar">
      <nav class="cd-filter">
        <ul>
          <li class="placeholder"><a data-type="red" href="#0">Derniers articles</a> <!-- selected option on mobile --></li> 
          <li><a class="selected" data-type="red" href="#0">Derniers articles</a></li>
          <li><a data-type="green" href="#0">La pratique</a></li>
          <li><a data-type="blue" href="#0">La théorie</a></li>
          <!-- <li><a data-type="white" href="#0">Les jeux</a></li> -->
        <li>
          <div id="search-index">
        <form method="get" id="searchformindex" action="<?php bloginfo('url'); ?>/">
        <div><input  type="search"  value="<?php the_search_query(); ?>"
        name="s" id="s"/></div>
        </form>
      </div> <!-- search-index -->
      </li>
      </ul>
        </nav>
      </div> <!-- articles-navbar -->
      

    <ul class="cd-gallery cd-container">
      <li>
        <ul class="cd-item-wrapper">
          <li data-type="red" class="is-visible">
            <?php
            $args = array( 
              'numberposts' => 7, 
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
            <a href="lienpub"><div class="item">
                     <div class="gridly-image"><img class="l" src="<?php bloginfo('template_url'); ?>/images/pub_index.jpg"></div>
            <div class="gridly-category">
              <p class="category pub_index">PUBLICITE</p>
              <h2>TITRE
            </h2>       
            <p class="small">small desxription</p>         
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
          </li><!-- red -->
          <li data-type="blue" class="is-hidden">
            <?php
            $args = array( 
              'numberposts' => 6, 
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
            <a href="lienpub"><div class="item">
                     <div class="gridly-image"><img class="l" src="<?php bloginfo('template_url'); ?>/images/pub_index.jpg"> </div>
            <div class="gridly-category">
              <p class="category pub_index">PUBLICITE</p>
              <h2>TITRE
            </h2>       
            <p class="small">small desxription</p>         
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
          </li><!-- blue -->
          <li data-type="green" class="is-hidden">
            <?php
            $args = array( 'numberposts' => 6, 'category_name' => 'selection', 'orderby' => 'date', 'order' => 'DESC');
            $theposts = get_posts( $args );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image"><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
              <div class="gridly-category">
              
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
            <a href="lienpub"><div class="item">
                     <div class="gridly-image"><img class="l" src="<?php bloginfo('template_url'); ?>/images/pub_index.jpg"></div>
            <div class="gridly-category">
              <p class="category pub_index ">PUBLICITE</p>
              <h2>TITRE
            </h2>       
            <p class="small">small desxription</p>         
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>   
          </li><!-- green -->         
        </ul>
      </li>
    </ul> <!-- cd-gallery -->
      <div class="big_headlines">
        <p class="category">LA PRATIQUE</p>
        <a>
          <h2 class="big_headlines_title">
            Les 14 lignes de Shakespeare, les 4 saisons de Vivaldi, le bleu de Picasso, Lou Reed qui "cherchait une bonne phrase puis tournait autour" : se fixer un cadre encourage la créativité.
          </h2>
          <p class="big_headlines_excerp">
          Nos représentations du monde se font par des perceptions ou des interactions ayant leurs cadres. Se poser des limites permet de les repousser et ouvre la voie à l'improvisation.
          </p>
        </a>
    </div>
	</div>
</div>


<div class="grey">

    <div class="bande-son">
    <h3 style="color:#fff">Vidéos en vrac</h3>
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
<a href="http://localhost:8888/2016/01/20/les-motivations-de-la-creativite/">
<div class="citation">
Il nous faut de toute manière révéler cette force, la manifester dans ses fonctions tout comme elle se manifeste en nous.
<p>Paul Klee</p>
</div>
</a>
</div>
<div class="clear padding20"></div>
<section>
<div class="cd-gallery-container margin-top background-color">

<h3>Les plus populaires</h3>
  <ul class="cd-item-wrapper">
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
<li data-type="red" class="is-visible">
<a href="<?php the_permalink() ?>"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image pop"><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
            <div class="gridly-category">
              <p class="category"><?php
            $category = get_the_category(); 
            echo $category[0]->cat_name;
            ?></p>
              <h2><?php the_title(); ?>
            </h2>
            
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '10'); ?> [...]</p>           
            </div><!-- gridly-category -->
            </div><!-- item -->
<?php 
endwhile;
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

</div>
</body>