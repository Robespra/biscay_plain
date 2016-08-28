<form method="get" id="searchform"

action="<?php bloginfo('url'); ?>/">

 <div>
<input class="responsive" type="text" value="<?php the_search_query(); ?>"
name="s" id="s" />

<button type="submit" name="submission" value="Submit 1" class="btn-search">RECHERCHER</button>
    </div>

</form>

