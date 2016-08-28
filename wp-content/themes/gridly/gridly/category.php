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
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<h2 class="pagetitle">Résultats pour la catégorie: <?php single_cat_title(); ?></h2>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
	<?php if (have_posts()) : ?>


		<div class="clear"></div>

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
<?php get_footer(); ?>