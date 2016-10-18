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
<div id="search"><?php get_search_form(); ?> </div>

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

<?php the_post_thumbnail( '' );  ?>
</span>
<div id="wrap-article">


			<div class="content">

	<?php if (have_posts()) : ?>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>

<h2 class="pagetitle">
RECHERCHE </br>
Résultats pour : "<?php echo $s ?>"</h2>
<div class="clear padding20"></div>
<div class="clear padding20"></div>

		<div class="clear"></div>

		<?php while (have_posts()) : the_post(); ?>

			<a href="<?php the_permalink() ?>"><div class="cd-item-wrapper"> <div class="item">
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

		</div>
</article>
</div> <!-- /wrap-article -->


	<?php else : ?>

<div id="wrap-article">


			<div class="content">

<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>

<h2 class="pagetitle">
RECHERCHE</br>
Aucun résultat... Essayez un autre mot clef.</h2>
<div class="clear padding20"></div>
<div class="clear padding20"></div>

		<div class="clear"></div>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
<div class="clear padding20"></div>
		</div>
</article>
</div> <!-- /wrap-article -->








	<?php endif; ?>



	


</section>
<?php get_footer(); ?>