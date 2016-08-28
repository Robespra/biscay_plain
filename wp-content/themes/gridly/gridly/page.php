<?php get_header(); ?>
<body>

<div class="la-anim-10"></div>


<div id="left"></div>
<div id="right"></div>

<section>
<header>
<div id="header">
<div id="wrap-article">
        	<a href="http://www.visu-synect.com/poesis"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/headerimage_1.svg" alt="Poïesis, poeisis, création artistique et psychologie de l'Art"/></a>           
       <?php if ( has_nav_menu( 'main_nav' ) ) { ?>
  		 <div id="nav"><?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?></div>
       <?php } else { ?>
 	 	 <div id="nav"><ul><?php wp_list_pages("depth=1&title_li=");  ?></ul></div>
	   <?php } ?>


<!-- // header -->      
</header">     
<article>
<header>
<div class="clear padding60"></div>
<div class="clear padding60"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
     
       
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
     
                <h1 class="header"><?php the_title(); ?></h1>
           		 <?php the_content(); ?> 
                
                 <?php wp_link_pages(); ?>
                
					<?php comments_template(); ?> 
                 
         	                
               
                
                
       </div>
       
		<?php endwhile; endif; ?>

</article>
<section>
<footer>
<div class="apropos">
<h4>A propos de l'auteur</h4>
<div class="clear"></div>
<img src="<?php bloginfo('template_url'); ?>/images/Illustr_robcpages.png" alt="Robert Espra Robespra Robert Pages Charly Carlito Zundert"  width="100px" height="86px"  class="alignleft" />
<div class="padding15"></div>
<p class="small">
"Créateur <a style="color:#e05d4d;" href="http://www.visu-synect.com/Alpe_Rouge" target="_blank">libre</a> (parfois) et <a style="color:#e05d4d;" href="http://www.uxpages.com" target="_blank">commissionné</a> (souvent!) je voulais comprendre quels étaient les mécanismes de la créativité et mettre en mots des sensations au delà de la psychologie en enrichissant mes recherches de réflexions d'artistes, de philosophes, de scientifiques ou d'écrivains.  Ce site est le résultat de ce travail."
<a href="http://www.visu-synect.com/poesis/contact/">En savoir plus...</a></p>
</div>
</footer>
</section>
<aside>
<div id="search"><?php get_search_form(); ?> 
</div>
<div class="final">
<div class="final-gauche">
<h4>Derniers articles</h4>
<ul><?php
$args = array( 'numberposts' => 3, 'orderby' => 'rand', 'post_status'     => 'publish' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>
<div class="padding15"></div> 
<h4>Rubriques</h4>

<?php wp_page_menu( array( 'show_home' => 'Accueil', 'sort_column' => 'menu_order' ) ); ?>

</ul>
<ul>
<div class="padding15"></div> 
<h4>Contact</h4>
<a href="mailto:robespra@visu-synect.com">robespra@visu-synect.com</a>
<div class="padding15"></div> 
<h4>Newsletter</h4>
<div class="padding20"></div
<form class="contact_form" action="<?php bloginfo('template_url'); ?>/contact_send.php" method="post">
<label for="email">Votre email <span>*</span></label>
<input id="email" class="inputText" type="text" name="email" />
<p class="submit"><a class="button white" onclick="$('.contact_form').submit();" href="javascript:void(0);">Envoyer</a></p>
<h4>Portfolios</h4>
<p>
<ul>
<li><a href="http://www.visu-synect.com"TARGET='_blank'>Webdesign : Synect</a></li>
<li><a href="http://www.visu-synect.com/Alpe_Rouge"TARGET='_blank'>Photos/peintures : Alpe_Rouge</a></li>
</ul>



</div>
<div class="final-droite">
<h4 class="padding-left">Articles par ordre de lecture conseillé</h4>
<ul class="padding-left">
<?php get_archives('postbypost', '70', 'html', '', '', FALSE); ?>
</ul>

</div>


  
       </div>
</aside>		

       


 
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
<img alt="top" src="http://www.visu-synect.com/Alpe_Rouge/wp-content/themes/tabula-rosa/images/fleche.png" height="30" width="30"/>
       </div>  

<?php get_footer(); ?>