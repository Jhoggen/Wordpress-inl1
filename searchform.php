<!-- header search bar -->

<form action="/" method="GET" id="searchform" class="searchform">
    <div>
        <input name="s" type="text" value="<?php the_search_query(); ?>" />
        <input type="submit" value="Sök" />
    </div>
</form>