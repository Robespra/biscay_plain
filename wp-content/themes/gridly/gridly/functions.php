<?php




add_shortcode('my_blockquote', 'my_blockquote');
function my_blockquote($atts, $content) {
    return '<div class="entry-meta-blockquotes">'.PHP_EOL
        .'<blockquote>'.$content.'</blockquote>'.PHP_EOL
        .'</div>';
}


	
	// content width
	if ( !isset( $content_width ))  {
		$content_width = 710; 
	}


	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Gridly post thumbnails
	add_theme_support( 'post-thumbnails' );
		add_image_size('summary-image', 310, 9999);
		add_image_size('detail-image', 770, 9999);
	
	
    // menu 
	add_action( 'init', 'register_gridly_menu' );

	function register_gridly_menu() {
		register_nav_menu( 'main_nav', __( 'Main Menu' ) );
	} 


	// hide blank excerpts 
	function custom_excerpt_length( $length ) {
	return 0;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	function new_excerpt_more($more) {
       global $post;
	return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	function limit_words($string, $word_limit) {

	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character

	$words = explode(' ', $string);

	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character

	return implode(' ', array_slice($words, 0, $word_limit));
	}


function number_of_posts_on_archive($query){
    if ($query->is_category) {
            $query->set('posts_per_page', 7);
   }
    return $query;
}
 
add_filter('pre_get_posts', 'number_of_posts_on_archive');


function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


?>