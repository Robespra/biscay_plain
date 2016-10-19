<form method="get" id="searchform"

action="<?php bloginfo('url'); ?>/">

 <div>
 <p>Entrez votre recherche ci-dessous</p>
<input id="focus" type="text" class="responsive" value="<?php the_search_query(); ?>" autofocus="autofocus"/></input>

<button style="display:none;" type="submit" name="submission" value="Submit 1" class="btn-search"></button>
    </div>

</form>

