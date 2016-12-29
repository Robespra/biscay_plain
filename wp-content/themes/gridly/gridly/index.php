<?php get_header(); ?>

<body class="cbp-spmenu-push loading">
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "http://www.elhacedor.soy/",
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
<div class="logo_header">
<h1 class="hidden-h1">el hacedor, le jeu de la créativité</h1>
<a href="http://www.elhacedor.soy/" onclick="track('Click-logo-top','Click-logo-top')" rel="canonical"><img class="logo-top"src="<?php bloginfo('template_url'); ?>/images/headerimage_1.svg" alt="Logo Poïesis"/></a>
<div class="cs-loader">
  <div class="cs-loader-inner">
    <label> ●</label>
    <label> ●</label>
    <label> ●</label>
  </div>
</div>
</div>
<div class="double_container">
<div class="double_left">
<img class=" " src="<?php bloginfo('template_url'); ?>/images/hero_news.png" alt="el hacedor Newsletter illustration"/>
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
          <li><a class="selected" data-type="red" href="#0" onclick="track('Click-index-navbar-derniers_articles','Click-index-navbar-derniers_articles')">Derniers articles</a></li>
          <li><a data-type="green" href="#0" onclick="track('Click-index-navbar-pratique','Click-index-navbar-pratique')">La pratique</a></li>
          <li><a data-type="blue" href="#0" onclick="track('Click-index-navbar-theorie','Click-index-navbar-theorie')">La théorie</a></li>
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
            <a href="<?php the_permalink() ?>" onclick="track('Click-index-articles-derniers','Click-index-articles-derniers')"><div class="item">
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
            <p class="small"><?php echo limit_words(get_the_excerpt(), '17'); ?> [...]</p>         
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
            <a href="https://www.amazon.com/gp/product/B017QLKXN4/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B017QLKXN4&linkCode=as2&tag=b0002c-20&linkId=1d9346dc1dc06889c2a8a8ec95d4397d" onclick="track('Click-index-articles-pub-derniers','Click-index-articles-pub-derniers')" target="_blank" rel="nofollow"><div class="item">
                     <div class="gridly-image"><img class="l" src="<?php bloginfo('template_url'); ?>/images/amazon_psychocrea.jpg"></div>
            <div class="gridly-category">
              <p class="category pub_index">PUBLICITE</p>
              <h2>Livre : La psychologie de la créativité
            </h2>       
            <p class="small">Cet ouvrage apporte une synthèse de la littérature scientifique et offre des pistes de réflexion concernant l’Homo creativus. </p>         
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
          </li><!-- red -->
          <li data-type="blue" class="is-hidden">
            <?php
            $args = array( 
              'numberposts' => 6, 
              'category_name' => 'théorie', 
              'orderby' => 'date', 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>" onclick="track('Click-index-articles-pratique','Click-index-articles-pratique')"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image" ><?php the_post_thumbnail( 'lazy summary-image');  ?></div>
            <div class="gridly-category">
            
            <h2><?php the_title(); ?></h2>
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '17'); ?> [...]</p>           
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>

            <a href="https://www.amazon.com/gp/product/0761169253/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=0761169253&linkCode=as2&tag=b0002c-20&linkId=5e6285d67650ab340329066b832c98b9" onclick="track('Click-index-articles-pratique','Click-index-articles-pratique')" target="_blank" rel="nofollow">
            <div class="item">
                     <div class="gridly-image"><img class="l" src="<?php bloginfo('template_url'); ?>/images/amazon_steal.jpg"> </div>
            <div class="gridly-category">
              <p class="category pub_index">PUBLICITE</p>
              <h2>Livre : Steal Like an Artist
            </h2>       
            <p class="small">10 Things Nobody Told You About Being Creative</p>         
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
          </li><!-- blue -->
          <li data-type="green" class="is-hidden">
            <?php
            $args = array( 'numberposts' => 6, 'category_name' => 'pratique', 'orderby' => 'date', 'order' => 'DESC');
            $theposts = get_posts( $args );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>" onclick="track('Click-index-articles-theorie','Click-index-articles-theorie')"><div class="item">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <div class="gridly-image"><?php the_post_thumbnail( 'lazy summary-image' );  ?></div>
              <div class="gridly-category">
              
              <h2><?php the_title(); ?></h2>
           
                            <?php } ?>
                        
            <p class="small"><?php echo limit_words(get_the_excerpt(), '17'); ?> [...]</p>          
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>     
            <a href="https://www.amazon.com/gp/product/0521730252/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=0521730252&linkCode=as2&tag=b0002c-20&linkId=7066f78781b3f11ea6b41177efc028a1" onclick="track('Click-index-articles-pub-theorie','Click-index-articles-pub-theorie')" target="_blank" rel="nofollow"><div class="item">
                     <div class="gridly-image"><img class="l" src="<?php bloginfo('template_url'); ?>/images/amazon_creahandbook.jpg"></div>
            <div class="gridly-category">
              <p class="category pub_index ">PUBLICITE</p>
              <h2>Livre : The Cambridge Handbook of Creativity
            </h2>       
            <p class="small">A comprehensive scholarly handbook on creativity from the most respected psychologists, researchers and educators.</p>      
            
            </div><!-- gridly-category -->
            </div><!-- item -->
            </a>   
          </li><!-- green -->         
        </ul>
      </li>
    </ul> <!-- cd-gallery -->
      <div class="big_headlines">
        <p class="category">LA PRATIQUE</p>
        <a href="http://www.elhacedor.soy/les-motivations-de-la-creativite/"onclick="track('Click-index-bigheadlines','Click-index-bigheadlines')" >
          <h2 class="big_headlines_title">
            Les 14 lignes de Shakespeare, le bleu de Picasso, Lou Reed qui "tournait autour d'une phrase" : se fixer un cadre stimule la créativité.
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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/osmplayer/bin/osmplayer.compressed.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/osmplayer/templates/default/osmplayer.default.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/osmplayer/src/osmplayer.iscroll.js"></script>
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
<a href="http://www.elhacedor.soy/les-motivations-de-la-creativite/" onclick="track('Click-index-citation','Click-index-citation')">
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
<a href="<?php the_permalink() ?>" onclick="track('Click-index-populaires-footer','Click-index-populaires-footer')"><div class="item">
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/osmplayer/jquery-ui/dark-hive/jquery-ui.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
</div>

</body>