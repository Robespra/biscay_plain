<?php get_header(); ?>

 <ul wp-posts>
<li wp-post>
<h1>{{title}}</h1>
<div ng-bind-html="content"></div>
</li>
</ul>

<?php get_footer(); ?>

