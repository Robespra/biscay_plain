<?php 
function mytheme_enqueue_scripts() {

  wp_register_script('angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.js', array(), null, false);


  wp_register_script('angular-app', get_bloginfo('template_directory').'/app.js', array('angular-core'), null, false);


  wp_enqueue_script('angular-core');
  wp_enqueue_script('angular-app');

  
  wp_localize_script( 'angular-core', 'AppAPI', array( 'url' => get_bloginfo('wpurl').'/api/') ); // this is the API address of the JSON API plugin

  wp_localize_script( 'angular-core', 'BlogInfo', array( 'url' => get_bloginfo('template_directory').'/', 'site' => get_bloginfo('wpurl')) );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
?>