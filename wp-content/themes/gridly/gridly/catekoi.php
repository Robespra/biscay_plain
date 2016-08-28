<div id="search"><?php get_search_form(); ?></div>
<?php echo do_shortcode( '[searchandfilter taxonomies="category,post_tag"]' ); ?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>




<?php			  
$args = array(
				'posts_per_page' => 200,
			);
			query_posts($args);
			?>
			<?php if (have_posts()) : ?>

<div id="container">
			    <?php while (have_posts()) : the_post(); ?>
   		<a href="<?php the_permalink() ?>"><div class="item">
		 <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>
 <div class="gridly-category"><h2 style="padding:3px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2></div>
            	  <?php } ?>
      			
<a href="<?php the_permalink() ?>"><p class="small"><?php echo limit_words(get_the_excerpt(), '20'); ?> [...]</p></a>
               <a class="gridly-link" href="<?php the_permalink() ?>">Poursuivre la lecture...</a>
            </div></a>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
