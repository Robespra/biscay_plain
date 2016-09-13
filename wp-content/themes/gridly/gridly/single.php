<?php get_header(); ?>

<body class="cbp-spmenu-push">


   <div class="padding10"></div>




<div class="la-anim-10"></div>
<section>
<header>
       	        

 	 	 <div id="nav">
<h1 class="hidden-h1">Biscay Plain, créativité Art et design</h1>
<a href="http://www.biscaypla.in"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/headerimage_1.svg" alt="Biscay Plain, création artistique et psychologie de l'Art"/></a>  
<!-- body has the class "cbp-spmenu-push" -->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
  

    <a class="first white" href="http://www.biscaypla.in">Accueil</a>
    <a class="ClickMe white">Langues  ►</a>
    <div class="box-langue"><a>Spanish</a><a>English</a></div>	
    <a class="white" href="http://www.biscaypla.in/Poesis_pdf_ebook.pdf">Telecharger eBook (pdf)</a>
    <a class="ClickMeApp white">Télécharger App  ►</a>
    
<a class="ClickMeShare white">Partager  ►</a>
    <div class="share"><a>Facebook</a><a>Twitter</a><a>Google +</a><a>Pinterest</a></div>	
    <a class="white" href="http://www.biscaypla.in/a-propos/">A propos</a>
    <a class="white" href="#">Guide de style</a>
    <a class="white" href="#">Partenariat</a>
    <a class="white" href="http://www.biscaypla.in/contact-2/">Contact</a>

</nav>

<section class="buttonset">
<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
<div id="showRight" class="closed"><img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg"/></div></section>
</div>
	  

<!-- // header -->      
</header>   
<div id="wrap" class="article">
<article>
<span class="thumbnail_bg">
<div id="wrap-article">
<h2 class="header"><?php the_title(); ?></h2>
</div>
<?php the_post_thumbnail( '' );  ?>
</span>
<div id="wrap-article">

<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>

		<script>
			var 	menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				showRightPush = document.getElementById( 'showRight' ),
				body = document.body;
		
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
			};
$('#showRight').click(function() {
        if($('#showRight').hasClass('closed')) {
            $(this).removeClass('closed').addClass('open').html('<img height="30px" style="position:fixed" src="<?php echo get_template_directory_uri();?>/images/deletebttn.png"/>');
            $('#fade').fadeIn(); }
        else if($('#showRight').hasClass('open')) {
            $(this).removeClass('open').addClass('closed').html('<img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg"/>');
            $('#fade').fadeOut(); }
    });
		</script>



  
<div class="clear padding60"></div>
<div class="clear padding60"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			                
   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<p class="catekoi">
 	<a href="http://www.biscaypla.in">POESIS</a></p>		       			

<div class="intro-excerp"><?php the_excerpt(); ?></div>
  <p class="tags"><?php the_time(get_option('date_format')); ?> 
</br><?php the_tags(); ?> </p>
                           
   
  
 <div class="entry-content">

<div class="padding20"></div>
 
           		 <?php the_content(); 
wpb_set_post_views(get_the_ID());

?> 
 
<ul id="share">

<li class="whatsapp"><div class="whatsapp-btn"><?php echo do_shortcode('[whatsapp]'); ?></div></li>
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
<a href="https://twitter.com/share" class="twitter-share-button" data-via="gamesnepal" data-related="gamesnepal" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</li>
<li class="gplus">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<g:plus action="share"></g:plus>
</li>
</ul>
  <p class="tags" style="text-align:left;"><?php the_tags(); ?></p>
  <p class="tags" style="text-align:left;"><?php the_category(', '); ?></p>
                 </div> 

                <div class="padding10"></div>
                <div class="clear"></div>

			        
<?php 
// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

			?>



</article>

<section>
<footer>

<aside>
<div id="search"><?php get_search_form(); ?> 
</div>
</aside>

<?php comments_template(); ?>

		
 <?php endwhile; endif; ?>
       





<script type="text/javascript" defer="">
$('.box-langue').hide();
$('.ClickMe').each(function() {
    $(this).show(0).on('click', function(e) {
       e.preventDefault();
       $(this).next('.box-langue').slideToggle('fast', function() {
            $(this).prev().html($(this).is(':visible') ? 'Langues &#9660;' : 'Langues &#9658');
        });
    });
   if ($(this).data('box-show')) {
        $(this).trigger('click');
    }
		
});
       </script> 
<script type="text/javascript" defer="">
$('.app').hide();
$('.ClickMeApp').each(function() {
    $(this).show(0).on('click', function(e) {
       e.preventDefault();
       $(this).next('.app').slideToggle('fast', function() {
            $(this).prev().html($(this).is(':visible') ? 'Télécharger App  &#9660;' : 'Télécharger App  &#9658');
        });
    });
   if ($(this).data('box-show')) {
        $(this).trigger('click');
    }
		
});
       </script> 

<script type="text/javascript" defer="">
$('.share').hide();
$('.ClickMeShare').each(function() {
    $(this).show(0).on('click', function(e) {
       e.preventDefault();
       $(this).next('.share').slideToggle('fast', function() {
            $(this).prev().html($(this).is(':visible') ? 'Partager  &#9660;' : 'Partager  &#9658');
        });
    });
   if ($(this).data('box-show')) {
        $(this).trigger('click');
    }
		
});
       </script> 





</section>


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
<section>
<nav class="final">

<div class="cd-gallery-container">
    <h3>Plus d'articles</h3>

    <ul class="cd-gallery cd-container">
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

        </ul>
      </li>
    </ul> <!-- cd-gallery -->
  </div>
       </nav>
</section>
</div>
<?php get_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</footer>