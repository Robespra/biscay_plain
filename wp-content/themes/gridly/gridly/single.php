<?php get_header(); ?>
<body class="cbp-spmenu-push loading">
<div class="padding10"></div>
<div class="la-anim-10"></div>
<section>
<header>
<div class="logo_header">
<h1 class="hidden-h1">el hacedor, le jeu de la créativité</h1>
<a href="http://www.elhacedor.soy" onclick="track('Click-logo-top','Click-logo-top')" rel="canonical"><img class="logo-top"src="<?php bloginfo('template_url'); ?>/images/headerimage_1.svg" alt="Logo Poïesis"/></a>
<div class="cs-loader">
  <div class="cs-loader-inner">
    <label> ●</label>
    <label> ●</label>
    <label> ●</label>
  </div>
</div>
<div id="nav">
<section class="buttonset">
<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
<div id="showRight" class="closed"><img src="<?php bloginfo('template_url'); ?>/images/search.svg"/></div></section>
<!-- body has the class "cbp-spmenu-push" -->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
<div class="article_search">
<a href="http://www.elhacedor.soy" onclick="track('Click-logo-top-search','Click-logo-top-search')" rel="canonical" style="text-align:left; padding-left:0">elhacedor.soy</a>
</br>
 <h2>Rechercher</h2>
<div id="search">

<?php get_search_form(); ?> 
 </div>

</div>
<section class="search_left">
  <h3>DERNIERS ARTICLES</h3>
  <?php
            $args = array( 
              'numberposts' => 10, 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a class="" href="<?php the_permalink() ?>" onclick="track('Click-search-last_articles','Click-search-last_articles')"><?php the_title(); ?></a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
<span class="separator"></span>
<h3>LA PRATIQUE</h3>
<?php
            $args = array( 
              'numberposts' => 30, 
              'category_name' => 'pratique', 
              'orderby' => 'date', 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a class="" href="<?php the_permalink() ?>" onclick="track('Click-search-pratique','Click-search-pratique')"><?php the_title(); ?></a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
</section>
<section class="search_right">
<h3>LA THEORIE</h3>
<?php
            $args = array( 
              'numberposts' => 30, 
              'category_name' => 'théorie', 
              'orderby' => 'date', 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a class="" href="<?php the_permalink() ?>" onclick="track('Click-search-theorie','Click-search-theorie')"><?php the_title(); ?></a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
<span class="separator"></span>
<h3>AILLEURS SUR LE WEB</h3>
<?php
            $args = array( 
              'numberposts' => 10, 
              'category_name' => 'selection', 
              'orderby' => 'date', 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a class="" href="<?php the_permalink() ?>" onclick="track('Click-search-ailleurs','Click-search-ailleurs')"><?php the_title(); ?></a>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
</section>

</nav>
</div>
<!-- // header -->   
</header>   
<div id="wrap" class="article">

<article>
<span class="thumbnail_bg">

<?php the_post_thumbnail( '' );  ?>
</span>
<ul id="share">
<h4>PARTAGER</h4>
<li class="facebook">
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=348328435295070&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
</li>
<li class="twitter">
<a href="https://twitter.com/share" class="twitter-share-button" data-via="hacedor" data-related="hacedor" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</li>
</ul>

<div id="wrap-article">

 <div class="entry-content">
  <h2 class="header"><?php the_title(); ?></h2>
<div class="clear padding60"></div>
<div class="clear padding60"></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<p class="catekoi">
 	<a href="http://www.elhacedor.soy" onclick="track('Click-single-article-category','Click-single-article-category')">POESIS</a></p>		       			
<div class="intro-excerp"><?php the_excerpt(); ?></div>
  <p class="tags"><?php the_time(get_option('date_format')); ?> 
</br><?php the_tags(); ?> </p>                        
<div class="padding20"></div> 
           		 <?php the_content(); 
wpb_set_post_views(get_the_ID());
?> 

  <p class="tags" style="text-align:left;"><?php the_tags(); ?></p>
  <p class="tags" style="text-align:left;"><?php the_category(', '); ?></p>
</div> 
</article>
<section>


<div class="cd-gallery-container margin-top">
    <ul class="cd-gallery cd-container margin-top">
    <h3>Plus d'articles</h3>
     <div class="padding20"></div>
      <li>
        <ul class="cd-item-wrapper">
          <li data-type="red" class="is-visible">
            <?php
            $args = array( 
              'numberposts' => 3, 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <a href="<?php the_permalink() ?>" onclick="track('Click-single-popular-articles','Click-single-popular-articles')"><div class="item">
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
        </ul>
      </li>
    </ul> <!-- cd-gallery -->
  </div> 
   <?php endwhile; endif; ?>     

<div class="cd-gallery-container meka">
<div class="cui">
<div class="cui_dialog_meka_sidebar">
  <div id="cui_dialog_avatar"  class="cui_dialog_avatar">
    <div class="svg-logo">
    <svg class="svg-happyfreshlogo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="41.9 73.6 180.9 180.9" enable-background="new 41.9 73.6 180.9 180.9" xml:space="preserve">
<g>
  <path fill="#FF7473" d="M148.3,145.8c4.9,42.3-24.2,81.3-23.9,85.2c-0.7,5.6,9.2-25.5-19.1-60.4C78,135.9,42,119.1,66.1,106.8
    c10.7-5.6,31.4-7.9,48.4-1.8C131.9,110.8,145.5,125.1,148.3,145.8z"/>
</g>
<path fill="#ED9E6E" d="M82.7,218.6C82.8,218.6,82.8,218.7,82.7,218.6c0-0.1,0-0.3,0-0.4C82.7,218.3,82.7,218.5,82.7,218.6"/>
<path fill="#ED9E6E" d="M202.8,196.2C202.8,196.2,202.8,196.1,202.8,196.2c0-0.2,0-0.4-0.1-0.5C202.7,195.9,202.7,196,202.8,196.2"
  />
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="77.7549" y1="193.1956" x2="106.8164" y2="193.1956" gradientTransform="matrix(0.9829 -0.1842 0.1842 0.9829 -27.9439 27.1907)">
  <stop  offset="0" style="stop-color:#FF7BAC"/>
  <stop  offset="1" style="stop-color:#FF7BAC;stop-opacity:0"/>
</linearGradient>
<path opacity="0.56" fill="url(#SVGID_1_)" d="M112.6,197.4c1.5,7.9-3.7,15.5-11.6,17c-7.9,1.5-15.5-3.7-17-11.6
  c-1.5-7.9,3.7-15.5,11.6-17C103.6,184.3,111.2,189.5,112.6,197.4"/>
<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="166.4462" y1="193.1956" x2="195.51" y2="193.1956" gradientTransform="matrix(0.9829 -0.1842 0.1842 0.9829 -27.9439 27.1907)">
  <stop  offset="0" style="stop-color:#FF7BAC"/>
  <stop  offset="1" style="stop-color:#FF7BAC;stop-opacity:0"/>
</linearGradient>
<path opacity="0.56" fill="url(#SVGID_2_)" d="M199.8,181.1c1.5,7.9-3.7,15.5-11.6,17c-7.9,1.5-15.5-3.7-17-11.6
  c-1.5-7.9,3.7-15.5,11.6-17C190.7,168,198.3,173.2,199.8,181.1"/>
<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-26.2098" y1="96.5702" x2="5.5214" y2="96.5702" gradientTransform="matrix(-0.9829 0.1842 0.1842 0.9829 124.415 -1.3685)">
  <stop  offset="0" style="stop-color:#C2982E"/>
  <stop  offset="0" style="stop-color:#A2792C"/>
  <stop  offset="0.4607" style="stop-color:#CDA430"/>
  <stop  offset="0.5618" style="stop-color:#CDA430"/>
  <stop  offset="0.8202" style="stop-color:#F8D975"/>
  <stop  offset="1" style="stop-color:#C2982E"/>
  <stop  offset="1" style="stop-color:#A2792C"/>
</linearGradient>
<path opacity="0.54" fill="url(#SVGID_3_)" d="M154.6,82.5c-13.2-5.4-26.9,1.5-14.2,12c5.1,4.2,12,6.5,18.1,7.3
  c12.3,1.4,11.3-3.5,11.3-3.5S167.8,87.9,154.6,82.5"/>
<path class="eyes" fill="#2A262A" d="M107.7,164.4c-1.2-6.5-7.4-10.7-13.9-9.5c-6.4,1.2-10.7,7.4-9.5,13.9c1.2,6.5,7.4,10.7,13.9,9.5
  C104.6,177.1,108.9,170.9,107.7,164.4"/>
<path class="eyes" fill="#2A262A" d="M169.4,140.7c-6.4,1.2-10.7,7.4-9.5,13.9c1.2,6.5,7.4,10.7,13.9,9.5c6.5-1.2,10.7-7.4,9.5-13.9
  C182.1,143.8,175.9,139.5,169.4,140.7"/>
<path class="mouth" fill="#171C21" d="M150.9,206.7c-14.4,6.2-23.2,1-24.8-2.8c-0.5-1.1,0-2.3,1.1-2.7l36-15.5c1.1-0.5,2.3,0,2.7,1.1
  C167.5,190.5,165.2,200.5,150.9,206.7z"/>
<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="41.8771" y1="164.0992" x2="222.8222" y2="164.0992" gradientTransform="matrix(0.9829 -0.1842 0.1842 0.9829 -27.9439 27.1907)">
  <stop  offset="0" style="stop-color:#C2982E"/>
  <stop  offset="0" style="stop-color:#A2792C"/>
  <stop  offset="0.4607" style="stop-color:#CDA430"/>
  <stop  offset="0.5618" style="stop-color:#CDA430"/>
  <stop  offset="0.8202" style="stop-color:#F8D975"/>
  <stop  offset="1" style="stop-color:#C2982E"/>
  <stop  offset="1" style="stop-color:#A2792C"/>
</linearGradient>
<circle fill="none" stroke="url(#SVGID_4_)" stroke-miterlimit="10" cx="132.4" cy="164.1" r="89.9"/>
</svg>

  </div>
  <div class="cui_loader"><span class="cui_loader__dot">.</span><span class="cui_loader__dot">.</span><span class="cui_loader__dot">.</span></div>
  </div> 
  



</div> 


<div class="cui_container">

<div class="cui_dialog cui_intro">

<div class="cui_dialog_message">
<p class="message">
Bonjour!
Je suis mēkā, un bot destiné à vous aider à choisir votre prochaine lecture.
Voulez-vous que je vous oriente?
</p>
</div> <!-- cui_dialog_message -->
<div class="cui_first_buttons cui_dialog_buttons">
<a href="#cui_first_oui" class="cui_btn_primary cui_first_button1">Oui!</a><a href="#cui_first_non" class="cui_btn_secondary cui_first_button2">Non merci</a>
</div> <!-- cui_dialog_buttons -->
</div> <!-- cui_intro -->

<div id ="cui_first_oui" class="cui_dialog cui_first_oui cui_dialog_hide">
<div class="cui_first_oui_message bubble_none">
<p class="message">
Ok! Quel aspect de la créativité vous intéresse aujourd’hui, la théorie ou la pratique?
</p>
  </div> <!-- cui_dialog_message -->
<div class="cui_dialog_buttons">
  <a href="#cui_second_theorie" class="cui_btn_primary cui_first_oui_button1">La théorie</a><a href="#cui_second_pratique" class="cui_btn_secondary cui_first_oui_button2">La pratique</a>
  </div> <!-- cui_dialog_buttons -->
</div> <!-- cui_first_oui -->


<div id="cui_first_non" class="cui_dialog cui_first_non cui_dialog_hide">
<div class="cui_first_non_message bubble_none">
<p class="message">
Très bien. Nous vous souhaitons une excellente visite. N'hésitez pas à vous inscrire à notre newsletter!
<p>
</div> <!-- cui_first_non -->
  </div> <!-- cui_dialog_message -->


  <div id="cui_second_pratique" class="cui_dialog cui_second_pratique cui_dialog_hide">
  <div class="cui_second_pratique_message bubble_none">
  <p class="message">
Ces deux articles sur la pratique de la créativité sont les plus lu. Peut être qu’ils vous intéresseront aussi :
</p>
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 2, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'category_name' => 'pratique', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
<div class="cui_article_container">
<a href="<?php the_permalink() ?>" onclick="track('Click-index-populaires-footer','Click-index-populaires-footer')">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <?php the_post_thumbnail( 'lazy cui_article_image' );  ?>
              
              <?php the_title(); ?>
        </div>
            
                            <?php } ?>       
<?php 
endwhile;
?>
</div> <!-- cui_dialog_message -->
<div class="cui_dialog_buttons1">
<a href="#cui_third_all" class="cui_btn_primary cui_second_pratique_button1">Je les ai déjà lu</a>
<a href="#cui_third_all" class="cui_btn_secondary cui_second_pratique_button2">Me faire plus de proposition</a>
</div> <!-- cui_dialog_buttons -->
</div> <!-- cui_second_pratique -->

<div id="cui_second_theorie" class="cui_dialog cui_second_theorie cui_dialog_hide">
  <div class="cui_second_theorie_message bubble_none">
<p class="message">
Ces deux articles sur la théorie de la créativité sont les plus lu. Peut être qu’ils vous intéresseront aussi :
</p>
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 2, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'category_name' => 'théorie', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
<div class="cui_article_container">
<a href="<?php the_permalink() ?>" onclick="track('Click-index-populaires-footer','Click-index-populaires-footer')">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <?php the_post_thumbnail( 'lazy cui_article_image' );  ?>
              
              <?php the_title(); ?>
        </div>
            
                            <?php } ?>       
<?php 
endwhile;
?>
</div> <!-- cui_dialog_message -->
<div class="cui_dialog_buttons2">
<a href="#cui_third_all" class="cui_btn_primary cui_second_theorie_button1">Je les ai déjà lu</a><a href="#cui_third_all" class="cui_btn_secondary cui_second_theorie_button2">Me faire plus de proposition</a>
</div> <!-- cui_dialog_buttons -->
</div> <!-- cui_second_theorie -->

<div id="cui_third_all" class="cui_dialog cui_third_all cui_dialog_hide">
  <div class="cui_third_all_message bubble_none">
<p class="message">
Voici les 3 derniers articles publiés toutes catégories confondues. Cette sélection vous convient-elle ?
</p>
<?php
            $args = array( 
              'numberposts' => 3, 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <div class="cui_article_container">
            <a href="<?php the_permalink() ?>" onclick="track('Click-index-articles-theorie','Click-index-articles-theorie')">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <?php the_post_thumbnail( 'lazy cui_article_image' );  ?>
              
              <?php the_title(); ?>
              </div> 
           
                            <?php } ?>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>


</div> <!-- cui_dialog_message -->
<div class="cui_dialog_buttons3">
<a href="#cui_fourth_oui" class="cui_btn_primary cui_third_all_button1">Oui, je veux plus d'articles</a><a href="#cui_fourth_non" class="cui_btn_secondary cui_third_all_button2">Je voudrai voir une vidéo</a>
</div> <!-- cui_dialog_buttons -->
</div> <!-- cui_third_all -->
 
<div  class="cui_dialog cui_fourth_oui cui_dialog_hide">
  <div class="cui_fourth_oui_message bubble_none">
  <p class="message">
Il suffit de demander! et trois articles supplémentaires, trois !
Bonne visite et n'hésiter à vous inscrire à la newsletter!
</p>
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
<div class="cui_article_container">
<a href="<?php the_permalink() ?>" onclick="track('Click-index-populaires-footer','Click-index-populaires-footer')">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <?php the_post_thumbnail( 'lazy cui_article_image' );  ?>
              
              <?php the_title(); ?>
        </div>
            
                            <?php } ?>
                        
           
<?php 
endwhile;
?>
</div> <!-- cui_dialog_message -->

</div> <!-- cui_dialog_buttons -->
</div> <!-- cui_fourth_oui -->

<div class="cui_dialog cui_fourth_non cui_dialog_hide">
<div class="cui_fourth_non_message bubble_none">

<p class="message">
Peut-être que ces vidéos vous interesserons... 
Bonne visite et n'hésiter à vous inscrire à la newsletter!
</p>
<?php
            $args = array( 
              'numberposts' => 3, 
              'order' => 'DESC'
            );// CHECK FUNCTION.PHP LINE 104 FOR NUMBERPOSTS
            $theposts = get_posts( $args );
            foreach($theposts as $post) :
            setup_postdata($post);
            ?>
            <div class="cui_article_container">
            <a href="<?php the_permalink() ?>" onclick="track('Click-index-articles-theorie','Click-index-articles-theorie')">
                 <?php if ( has_post_thumbnail() ) { ?>
                     <?php the_post_thumbnail( 'lazy cui_article_image' );  ?>
              
              <?php the_title(); ?>
           </div> <!-- cui_article_container -->
                            <?php } ?>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
</div> <!-- cui_dialog_message -->
</div> <!-- cui_dialog_message -->
</div> <!-- cui_fourth_non -->




</div> <!-- cui_container -->
</div> <!-- cd-gallery-container meka -->
<script> 
    $(".cui_first_button1").click(function(e) {
    $(".cui_first_oui").removeClass("cui_dialog_hide");
    $(".cui_first_oui").addClass("cui_dialog_display");
    $(".cui_first_oui_message").addClass("bubble_displayed");
    $(".cui_intro").addClass("cui_dialog_greyed");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons").addClass("cui_dialog_buttons_displayed");
    $(".cui_first_button1").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_first_button2").click(function(e) {
    $(".cui_first_non").removeClass("cui_dialog_hide");
    $(".cui_first_non").addClass("cui_dialog_display");
    $(".cui_first_non_message").addClass("bubble_displayed");
    $(".cui_intro").addClass("cui_dialog_greyed");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons").addClass("cui_dialog_buttons_displayed");
    $(".cui_first_button2").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_first_oui_button1").click(function(e) {
    $(".cui_second_theorie").removeClass("cui_dialog_hide");
    $(".cui_second_theorie").addClass("cui_dialog_display");
    $(".cui_second_theorie_message").addClass("bubble_displayed");
    $(".cui_first_oui").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons2").addClass("cui_dialog_buttons_displayed");
    $(".cui_first_oui_button1").addClass("btn_selected");
    $(".svg-logo").toggleClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_first_oui_button2").click(function(e) {
    $(".cui_second_pratique").removeClass("cui_dialog_hide");
    $(".cui_second_pratique").addClass("cui_dialog_display");
    $(".cui_second_pratique_message").addClass("bubble_displayed");
    $(".cui_first_oui").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons1").addClass("cui_dialog_buttons_displayed");
    $(".cui_first_oui_button2").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_second_pratique_button1").click(function(e) {
    $(".cui_third_all").removeClass("cui_dialog_hide");
    $(".cui_third_all").addClass("cui_dialog_display");
    $(".cui_third_all_message").addClass("bubble_displayed");
    $(".cui_second_pratique").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons3").addClass("cui_dialog_buttons_displayed");
    $(".cui_second_pratique_button1").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_second_pratique_button2").click(function(e) {
    $(".cui_third_all").removeClass("cui_dialog_hide");
    $(".cui_third_all").addClass("cui_dialog_display");
    $(".cui_third_all_message").addClass("bubble_displayed");
    $(".cui_second_pratique").addClass("cui_dialog_greyed");
    $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons3").addClass("cui_dialog_buttons_displayed");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_second_theorie_button1").click(function(e) {
    $(".cui_third_all").removeClass("cui_dialog_hide");
    $(".cui_third_all").addClass("cui_dialog_display");
    $(".cui_third_all_message").addClass("bubble_displayed");
    $(".cui_second_theorie").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons").addClass("cui_dialog_buttons_displayed");
    $(".cui_second_theorie_button1").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_second_theorie_button2").click(function(e) {
    $(".cui_third_all").removeClass("cui_dialog_hide");
    $(".cui_third_all").addClass("cui_dialog_display");
    $(".cui_third_all_message").addClass("bubble_displayed");
    $(".cui_second_theorie").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons3").addClass("cui_dialog_buttons_displayed");
    $(".cui_second_theorie_button2").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_third_all_button1").click(function(e) {
    $(".cui_fourth_oui").removeClass("cui_dialog_hide");
    $(".cui_fourth_oui").addClass("cui_dialog_display");
    $(".cui_fourth_oui_message").addClass("bubble_displayed");
    $(".cui_dialog_avatar").addClass("cui_dialog_avatar_margin");
    $(".cui_third_all").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons3").addClass("cui_dialog_buttons_displayed");
    $(".cui_third_all_button1").addClass("btn_selected");
    $(".svg-logo").addClass("svg-happyfreshlogo_thinking");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


    $(".cui_third_all_button2").click(function(e) {
    $(".cui_fourth_non").removeClass("cui_dialog_hide");
    $(".cui_fourth_non").addClass("cui_dialog_display");
    $(".cui_fourth_non_message").addClass("bubble_displayed");
    $(".cui_dialog_avatar").addClass("cui_dialog_avatar_margin");
    $(".cui_third_all").addClass("cui_dialog_greyed");
     $(".cui_loader").removeClass("remove_loader");
    $(".cui_loader").addClass("display_loader");
    $(".cui_dialog_buttons4").addClass("cui_dialog_buttons_displayed");
    $(".cui_third_all_button2").addClass("btn_selected");
    setTimeout(function() {
       $(".cui_loader").addClass("remove_loader");
       $(".svg-logo").removeClass("svg-happyfreshlogo_thinking");
   }, 2000);
    });


</script> 

</div> <!-- cui -->


</section>


</div>
<footer>
<?php get_footer(); ?>
</footer>
<script> 
// h3 anchors scroll
// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});
// h3 anchors scroll
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
    <script>
      var   menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        showRightPush = document.getElementById( 'showRight' ),
        body = document.body;
    
      showRight.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        $('#s').trigger('focus')
      };
$('#showRight').click(function() {
        if($('#showRight').hasClass('closed')) {
            $(this).removeClass('closed').addClass('open').html('<div class="search_close">FERMER<div/>');
            $('#fade').fadeIn(); }
        else if($('#showRight').hasClass('open')) {
            $(this).removeClass('open').addClass('closed').html('<img src="<?php bloginfo('template_url'); ?>/images/search.svg"/>');
            $('#fade').fadeOut(); }
    });
    </script> 
<script> 
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-500
        }, 3000);
        return false;
      }
    }
  });
});
    </script> 
