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
<div id="wrap">
<div id="container-articles" style="background-color:#ebeee6">
<div class="cd-gallery-container">
<article>


		<div class="column span-9 first" id="maincontent">

			<div class="content">

	<?php if (have_posts()) : ?>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<h2 class="pagetitle">Résultats pour le mot-clef: <?php single_tag_title(); ?></h2>

		<div class="clear padding20"></div>

		<?php while (have_posts()) : the_post(); ?>

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
              
</div>
            </div></a>
			
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

		</div> <!-- /content -->
	</div> <!-- /maincontent-->

	
</div>
	</div> <!-- /page -->
</section>
<?php get_sidebar(); ?>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php get_footer(); ?>